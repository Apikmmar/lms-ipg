<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Assignment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'assignmentTitle',
        'assignmentDocument',
        'assignmentPublished',
    ];

    public function assignment(): BelongsTo {
        return $this->belongsTo(User::class);
    }
}
