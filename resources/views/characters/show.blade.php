@extends('layouts.app')

@section('content')
    <div class="container py-5 show-page">
        <div class="row">
            <div class="col-12">
                <div class="d-flex align-items-center justify-content-center mb-4">
                    <img src="https://via.placeholder.com/150" alt="{{ $character['name'] }}" class="img-fluid rounded shadow">
                </div>
                <h1 class="display-5 text-white text-center">{{ $character['name'] }}</h1>
                <p class="text-muted text-white text-center fs-2 fw-bolder">{{ $character['description'] }}</p>
                
                <div class="text-center character-stats">
                    <h2 class="fw-bold text-white ">Strength: {{ $character['strength'] }}</h2>
                    <h2 class="fw-bold text-white ">Defence: {{ $character['defence'] }}</h2>
                    <h2 class="fw-bold text-white ">Speed: {{ $character['speed'] }}</h2>
                    <h2 class="fw-bold text-white ">Intelligence: {{ $character['intelligence'] }}</h2>
                    <h2 class="fw-bold text-white ">Life: {{ $character['life'] }}</h2>

                    <a href="{{ route('characters.edit', ['character' => $character['id']]) }}" class="btn btn-warning mt-3">Edit</a>

                    <form action="{{ route('characters.destroy', ['character' => $character['id']]) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger mt-3 delete-button" onclick="return confirm('Sei sicuro di voler cancellare questo personaggio?')">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
