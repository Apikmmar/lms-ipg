<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Unit extends Model
{
    use HasFactory;

    protected $fillable = [
        'unitName',
    ];

    public function units(): HasMany {
        return $this->hasMany(User::class);
    }

    public function unitSubjects(): HasMany {
        return $this->hasMany(UnitSubject::class);
    }
}
