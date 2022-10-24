<?php

declare(strict_types=1);

namespace Activity\models;

use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    /**
     * @var array
     */
    protected $guarded = [];

    /**
     * get the type of the actions
     * @return string
     */
    public function getDescription(): string
    {
        return 'The model was ' . $this->type;
    }
}