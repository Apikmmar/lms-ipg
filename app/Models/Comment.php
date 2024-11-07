<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'discussion_id',
        'commentDetails',
    ];

    public function comment(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function comments(): BelongsTo {
        return $this->belongsTo(Discussion::class);
    }
}
