<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Character;

class CharactersController extends Controller
{
    public function index() {
        $characters = Character::with('type')->paginate(6);
        return response()->json([
            'success' => true,
            'results' => $characters
        ]);
    }
}
