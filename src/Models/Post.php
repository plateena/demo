<?php

namespace Plateena\Demo\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Plateena\Demo\Database\Factories\PostFactory;

class Post extends Model
{
    use HasFactory;

    // Disable Laravel's mass assignment protection
    protected $guarded = [];

    protected static function newFactory()
    {
        return PostFactory::new();
    }
}
