@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 index-page"> 
            <!-- Pulsante per aggiungere un nuovo personaggio -->
            <div class="text-center mb-3">
                <a href="{{ route('characters.create') }}" class="btn btn-primary">Add New Character</a>
            </div>

            <!-- Lista dei personaggi -->
            <div class="list-group">
                <!-- Ciclo sui personaggi -->
                @foreach($character as $character)
                <div class="list-group-item d-flex justify-content-between align-items-center">
                    <!-- Nome del personaggio a sinistra -->
                    <span class="fs-2">{{ $character->name }}</span>

                    <!-- Pulsanti a destra -->
                    <div>
                        <!-- Link per visualizzare i dettagli del personaggio -->
                        <a href="{{ route('characters.show', ['character' => $character->id]) }}" class="btn btn-info btn-sm">Show</a>

                        <!-- Link per modificare il personaggio -->
                        <a href="{{ route('characters.edit', ['character' => $character->id]) }}" class="btn btn-warning btn-sm">Edit</a>

                        <!-- Form per eliminare il personaggio -->
                        <form action="{{ route('characters.destroy', ['character' => $character->id]) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
