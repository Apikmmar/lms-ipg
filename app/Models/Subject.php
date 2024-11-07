<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = [
        'subjectName',
        'subjectCode',
        'subjectPhoto,'
    ];

    // public function subject(): BelongsTo {
    //     return $this->belongsTo(User::class);
    // }

    public function subjectLecturers(): HasMany {
        return $this->hasMany(SubjectLecturer::class);
    }

    public function unitSubjects(): HasMany {
        return $this->hasMany(UnitSubject::class);
    }

    public function discussions(): HasMany {
        return $this->hasMany(Discussion::class);
    }
}
