<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Relations\BelongsTo;

class Post extends Model
{
    public function user():BelongsTo
    {
        return $this->belongsTo('App\User');
    }
}
