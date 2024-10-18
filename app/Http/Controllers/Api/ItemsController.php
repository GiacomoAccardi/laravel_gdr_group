<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;

class ItemsController extends Controller
{
    public function index() {
        $items = Item::all();
        return response()->json([
            'success' => true,
            'results' => $items
        ]);
    }
}
