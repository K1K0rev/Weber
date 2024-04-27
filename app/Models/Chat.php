<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Chat extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'status',
        'user_id',
        'support_id',
    ];

    public function user() : HasOne
    {
        return $this->hasOne(User::class);
    }

    public function message(): HasMany
    {
        return $this->hasMany(Message::class);
    }

    public function support(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'supports_chats');
    }
}
