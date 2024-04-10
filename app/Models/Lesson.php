<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Lesson extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'lesson_text',
        'lesson_img',
        'course_id',
    ];

    public function course() : BelongsTo
    {
        return $this->belongsTo(Course::class);
    }

    public function status_lesson() : BelongsToMany
    {
        return $this->belongsToMany(User::class, 'status_lesson');
    }
}
