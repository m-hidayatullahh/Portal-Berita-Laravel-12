<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class NewsCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
    ];

    public function news()
    {
        return $this->hasMany(News::class);
    }
}
