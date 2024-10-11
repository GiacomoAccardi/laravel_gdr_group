<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classinfo extends Model
{
    use HasFactory;
    
    public $id;
    public $name;
    public $image;
    public $description;

    public function __construct($id, $name, $image, $description)
    {
        $this->id = $id;
        $this->name = $name;
        $this->image = $image;
        $this->description = $description;
    }
}
