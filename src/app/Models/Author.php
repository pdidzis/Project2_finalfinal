<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Author extends Model
{
    // Define the relationship between Author and Book
    public function books(): HasMany
    {
        return $this->hasMany(Book::class);
    }
}
