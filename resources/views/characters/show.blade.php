@extends('layouts.app')

@section('content')
    <div class="bg-show-charachters">
        <div class="container py-5 show-page">
            <div class="row">
                <div class="col-12 bg-panel text-center p-5">
                    <div class="d-flex align-items-center justify-content-center mb-4 show-box mx-auto">
                        <img src="{{asset($character->type->image)}}" alt="{{ $character['name'] }}"
                            class="rounded shadow">
                    </div>
                    <h1 class="m-0">{{ $character['name'] }}</h1>
                    <p class="pg_type_text m-0">Classe: {{ $character['type']['name'] ?? 'Non Definita' }}</p>
                    <p class=" fs-1 fw-bolder">{{ $character['description'] }}</p>

                    <div class=" stats">
                        <h4>Forza: {{ $character['strength'] }}</h4>
                        <h4>Difesa: {{ $character['defence'] }}</h4>
                        <h4>Velocita': {{ $character['speed'] }}</h4>
                        <h4>Intelligenza: {{ $character['intelligence'] }}</h4>
                        <h4>Salute: {{ $character['life'] }}</h4>

                        <div class="d-flex justify-content-center align-items-center pt-2">
                            <a href="{{ route('characters.edit', ['character' => $character['id']]) }}"
                                class="btn btn-warning fs-2 rounded-0"><i class="bi bi-feather"></i>Riscrivi
                            </a>
                                <a href="{{ route('characters.index') }}"
                                class="text-decoration-none fs-3 btn btn-sm rounded-0 back_button fw-semibold py-2">
                                <i class="bi bi-arrow-left"></i> Torno sui miei passi . .
                            </a>
    
                            <form action="{{ route('characters.destroy', ['character' => $character['id']]) }}" method="POST"
                                class="d-inline p-0">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger delete-button fs-2 rounded-0 characters-del" data-pg-name="{{ $character->name }}">Bandisci</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('characters.partials.destroy_modal')
@endsection
