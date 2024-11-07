<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UnitSubject extends Model
{
    use HasFactory;
    protected $fillable = [
        'unit_id',
        'subject_id',
        'subject_lecturer_id',
    ];

    public function unitSubjects(): BelongsTo {
        return $this->belongsTo(Unit::class);
    }

    public function unitSubject(): BelongsTo {
        return $this->belongsTo(Subject::class);
    }

    public function unit_Subject(): BelongsTo {
        return $this->belongsTo(SubjectLecturer::class);
    }
}
