<?php

declare(strict_types=1);

namespace Activity\traits;

use Activity\models\Action;

trait PerformsActions
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function performedActions(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Action::class, 'performer_id');
    }
}