<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Character extends Model
{
    use HasFactory;

    public static function createSlug($x) {
        return Str::slug($x, '-');
    }

    public function type() {
        return $this->belongsTo(Type::class);
    }
}
