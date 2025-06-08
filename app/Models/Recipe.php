<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $fillable = [
        'name', 'description', 'rating', 'ingredients', 'steps', 'image_url',
    ];

    protected $casts = [
        'ingredients' => 'array', // Menyimpan bahan sebagai array
        'steps' => 'array',       // Menyimpan langkah-langkah sebagai array
    ];

    public function users()
{
    return $this->belongsToMany(User::class, 'favorites')->withTimestamps();
}

}

