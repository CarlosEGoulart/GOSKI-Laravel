<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Like extends Model
{
    public function posts(): belongsTo
    {
        return $this->belongsTo(Post::class);
    }

    public function users():belongsTo
    {
        return $this->belongsTo(User::class);
    }

}
