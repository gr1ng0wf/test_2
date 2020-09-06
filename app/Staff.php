<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Staff extends Model
{
    protected $table = "staffs";

    protected $fillable = [
        'last_name',
        'first_name',
        'middle_name',
        'birth_date',
        'active',
        'group_id'
    ];

    protected $casts = [
        'active' => 'boolean',
        'birth_date' => 'date:d.m.Y',
    ];

    protected $appends = [
        'fullYears',
    ];

    public function group(): BelongsTo
    {
        return $this->belongsTo(AcademicGroup::class, "group_id");
    }

    public function getFullYearsAttribute(): int
    {
        return intval(now()->diffInMonths($this->birth_date) / 12);
    }
}
