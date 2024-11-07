<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SubmissionScript extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'submission_id',
        'submissionStatus',
        'submissionFileName',
        'submissionDocument',
    ];

    public function submissionScript(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function submission_Script(): BelongsTo {
        return $this->belongsTo(Submission::class);
    }
}
