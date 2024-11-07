<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Submission extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'submissionName',
        'submissionMode',
        'submissionDue',
        'submissionTime',
        'submissionDescription',
        'submissionPublished',
    ];

    public function submission(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function submissionScripts(): HasMany {
        return $this->hasMany(SubmissionScript::class);
    }
}
