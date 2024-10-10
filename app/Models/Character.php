<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Character extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'strength',
        'defence',
        'speed',
        'intelligence',
        'life',
        'slug',
        'type_id'
    ];

    public static function createSlug($x)
    {
        return Str::slug($x, '-');
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
