@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 index-page"> 
            <!-- Pulsante per aggiungere un nuovo personaggio -->
            <div class="text-end mb-3">
                <a href="{{ route('types.create') }}" class="btn btn-primary">Add New Type</a>
            </div>

            <!-- Lista dei personaggi -->
            <div class="list-group">
                <!-- Ciclo sui personaggi -->
                @foreach($types as $type)
                <div class="list-group-item d-flex justify-content-between align-items-center">
                    <!-- Nome del personaggio a sinistra -->
                    <span class="fs-2">{{ $type->name }}</span>

                    <!-- Pulsanti a destra -->
                    <div>
                        <!-- Link per visualizzare i dettagli del personaggio -->
                        <a href="{{ route('types.show', ['type' => $type->id]) }}" class="btn btn-info btn-sm">Show</a>

                        <!-- Link per modificare il personaggio -->
                        <a href="{{ route('types.edit', ['type' => $type->id]) }}" class="btn btn-warning btn-sm">Edit</a>

                        <!-- Form per eliminare il personaggio -->
                        <form action="{{ route('types.destroy', ['type' => $type->id]) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm del-btn" data-pg-name="{{ $type->name }}">Delete</button>
                        </form>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection