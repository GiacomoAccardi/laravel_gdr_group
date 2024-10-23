<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Character;

class CharactersController extends Controller
{
    public function index() {
        $characters = Character::with('type')->paginate(3);
        return response()->json([
            'success' => true,
            'results' => $characters
        ]);
    }

    public function confirmChoice($slug) {
        $character = Character::where('slug', $slug)->first();
        if (!$character) {
            return response()->json([
                'success' => false
            ]);
        }
        
        return response()->json([
            'success' => true,
            'character' => $character
        ]);
    }

    public function gameScreen(){
        $characters = Character::whit('type', 'items')->get();
        return response()->json([
            'success' => true,
            'results' => $characters
        ]);
    }
}
