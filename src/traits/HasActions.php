<?php

declare(strict_types=1);

namespace Activity\traits;

use Activity\models\Action;
use function Illuminate\Events\queueable;

trait HasActions
{
    /**
     * three events are pushed to the queue and saved to the database
     * created three actions by user
     * @return void
     */
    protected static function booted(): void
    {
        static::created(queueable(function ($model)  {
            $action = new Action();
            $action->type = 'created';
            $action->performer = Auth()->user()->name;
            $action->performer_id = Auth()->user()->id;
            $action->subject = $model;
            $action->subject_id = $model->id;
            $action->save();
        }));

        static::updated(queueable(function ($model){
            $action = new Action();
            $action->type = 'updated';
            $action->performer = Auth()->user()->name;
            $action->performer_id = Auth()->user()->id;
            $action->subject = $model;
            $action->subject_id = $model->id;
            $action->save();
        }));

        static::deleted(queueable(function ($model) {
            $action = new Action();
            $action->type = 'deleted';
            $action->performer = Auth()->user()->name;
            $action->performer_id = Auth()->user()->id;
            $action->subject = $model;
            $action->subject_id = $model->id;
            $action->save();
        }));
    }

}