<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Relations\BelongsTo;

class Post extends Model
{

    protected $fillable = [
        'title',
        'body',
    ];
    
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
