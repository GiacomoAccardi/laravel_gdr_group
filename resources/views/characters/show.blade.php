@extends('layouts.app')

@section('content')
    <div class="bg-show-charachters">
        <div class="container py-5 show-page">
            <div class="row">
                <div class="col-12 bg-panel p-5">
                    <div class="d-flex align-items-center justify-content-center mb-4">
                        <img src="https://via.placeholder.com/150" alt="{{ $character['name'] }}"
                            class="img-fluid rounded shadow">
                    </div>
                    <h1 class="text-center">{{ $character['name'] }}</h1>
                    <p class="text-center fs-1 fw-bolder">{{ $character['description'] }}</p>

                    <div class="text-center stats">
                        <h4>Strength: {{ $character['strength'] }}</h4>
                        <h4>Defence: {{ $character['defence'] }}</h4>
                        <h4>Speed: {{ $character['speed'] }}</h4>
                        <h4>Intelligence: {{ $character['intelligence'] }}</h4>
                        <h4>Life: {{ $character['life'] }}</h4>

                        <a href="{{ route('characters.edit', ['character' => $character['id']]) }}"
                            class="btn btn-warning mt-3 fs-2"><i class="bi bi-feather"></i>Riscrivi</a>

                        <form action="{{ route('characters.destroy', ['character' => $character['id']]) }}" method="POST"
                            class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger mt-3 delete-button fs-2"
                                onclick="return confirm('Sei sicuro di voler cancellare questo personaggio?')">Bandisci</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
