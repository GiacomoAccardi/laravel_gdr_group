<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Models\Character;

class Item extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'category', 'type', 'weight', 'cost', 'dice', 'slug'];

    public static function createSlug($name) {
        return Str::slug($name, '-');
    }

    public function characters() {
        return $this->belongsToMany(Character::class);
    }
}
