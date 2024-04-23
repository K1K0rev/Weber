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
        'course_id',
    ];

    public $timestamps = false;

    public function course() : BelongsTo
    {
        return $this->belongsTo(Course::class);
    }

    public function status_lesson() : BelongsToMany
    {
        return $this->belongsToMany(User::class, 'status_lesson');
    }
}
