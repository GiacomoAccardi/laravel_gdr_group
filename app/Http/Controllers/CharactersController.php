<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Character;

class CharactersController extends Controller
{
    public function index(){
        $character = Character::all();

        return view('welcome', compact('character'));
    }
}
