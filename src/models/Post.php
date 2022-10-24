<?php

declare(strict_types=1);

namespace Activity\models;

use Activity\traits\HasActions;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasActions;

    protected $guarded = [];

    /**
     * if there is a user table, a post belongs to a user
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function users()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function actions()
    {
        return $this->hasMany(Action::class, 'subject_id');
    }

}