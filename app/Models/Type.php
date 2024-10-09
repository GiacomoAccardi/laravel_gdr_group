<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Type extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'image', 'description', 'slug'];

    public static function createSlug($x) {
        return Str::slug($x, '-');
    }

    public function characters() {
        return $this->hasMany(Character::class);
    }
}
