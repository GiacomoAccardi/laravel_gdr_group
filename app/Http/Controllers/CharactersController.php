<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Character;

class CharactersController extends Controller
{
    public function index(){
        $character = Character::all();

        return view('characters.index', compact('character'));
    }

    public function create() {
 
    }

    public function store() {
        
    }

    public function show() {
        
    }

    public function edit() {
        
    }

    public function update() {
        
    }

    public function destroy() {
        
    }
}


