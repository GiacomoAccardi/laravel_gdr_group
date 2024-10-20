<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Character;
use App\Models\Type;
use App\Models\Item;
use App\Http\Requests\StoreCharacterRequest;
use App\Http\Requests\UpdateCharacterRequest;

class CharactersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $characters = Character::with('type')->get();
        return view('characters.index', compact('characters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items = Item::all();
        $types = Type::all();
        return view('characters.create', compact('types', 'items'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCharacterRequest $request)
    {
        $data = $request->validated();

        // Genera lo slug usando il nome del personaggio
        $data['slug'] = Character::createSlug($data['name']); 
    

        // Crea il personaggio con i dati validati
        $character = Character::create($data);

        // DA RICONTROLLARE ----------------------
        if ($request->has('items')) {
            $items = $request->items;
            $character->items()->attach($items);
        }
        
        return redirect()->route('characters.index')->with('success', 'Personaggio creato con successo.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $character = Character::with('type')->findOrFail($id);
        return view('characters.show', compact('character'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $character = Character::with('type')->findOrFail($id);
        $types = Type::all();
        $items = Item::all();
        return view('characters.edit', compact('character', 'types', 'items'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCharacterRequest $request, Character $character)
    {
        $data = $request->validated();

        // Genera lo slug usando il nome del personaggio
        $data['slug'] = Character::createSlug($data['name']); 
        
        $character->update($data);

        if($request->has('items')) {
            $character->items()->sync($request->items);
        } else {
            $character->items()->synch([]);
        }

        return redirect()->route('characters.index')->with('success', 'Personaggio modificato con successo.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Character $character)
    {
        $character->items()->synch([]);
        $character->delete();
        return redirect()->route('characters.index');
    }
}
