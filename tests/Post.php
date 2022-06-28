<?php

declare(strict_types=1);

namespace Activity\Tests;

use Activity\HasActions;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasActions;
    
    protected $guarded = [];
}