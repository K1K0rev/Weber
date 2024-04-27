<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'course_type',
        'course_status',
        'short_description',
        'start_date',
        'end_date',
    ];

    public $timestamps = false;

    public function lesson(): HasMany
    {
        return $this->hasMany(Lesson::class);
    }

    public function user(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'user_courses');
    }
}
