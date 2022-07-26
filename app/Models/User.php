<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Model
{
    use HasFactory;

    protected $fillable = ['first_name', 'last_name', 'username', 'email', 'password'];

    public function post(): HasMany{
        return $this->hasMany(Post::class);
    }

    public function comments(): HasMany{
        return $this->hasMany(Comment::class);
    }
}
