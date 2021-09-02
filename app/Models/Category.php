<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Category
 * @package App\Models
 *
 * @property Digest[] $posts
 */
class Category extends Model
{
    use HasFactory;
    public function posts(): HasMany
    {
        return $this->hasMany(Digest::class, 'category'); //достает все посты данной категории
    }
}
