<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SubjectLecturer extends Model
{
    use HasFactory;
    protected $fillable = [
        'subject_id',
        'user_id',
    ];

    public function subjectLecturer(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function subject(): BelongsTo {
        return $this->belongsTo(Subject::class);
    }

    public function unitSubjects(): HasMany {
        return $this->hasMany(SubjectLecturer::class);
    }
}
