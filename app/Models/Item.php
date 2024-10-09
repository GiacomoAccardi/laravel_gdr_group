<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Item extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'category', 'type', 'weight', 'cost', 'dice', 'slug'];

    public static function createSlug($x) {
        return Str::slug($x, '-');
    }
}
