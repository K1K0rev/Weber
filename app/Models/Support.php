<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Support extends Model
{
    use HasFactory;

    protected $fallable = [
        'name',
        'icon',
        'login',
        'password',
    ];

    public function chat(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'supports_chats');
    }
}
