<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AcademicGroup extends Model
{
    protected $fillable = [
        'title',
        'course',
        'faculty',
        'archive',
    ];

    protected $casts = [
        'archive' => 'boolean',
    ];

    public function staffs(): HasMany
    {
        return $this->hasMany(Staff::class, "group_id");
    }
}
