<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Author extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'username',
        'avatar',
        'bio',
    ];

    public function news()
    {
        return $this->hasMany(News::class);
    }
}
