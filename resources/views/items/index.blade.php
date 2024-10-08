@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 index-page"> 
            <!-- Pulsante per aggiungere un nuovo personaggio -->
            <div class="text-end mb-3">
                <a href="{{ route('items.create') }}" class="btn btn-primary"><i class="bi bi-plus-square-fill"></i> Nuovo oggetto</a>
            </div>

            <!-- Lista dei personaggi -->
            <div class="list-group">
                <!-- Ciclo sui personaggi -->
                @foreach($items as $item)
                <div class="list-group-item d-flex justify-content-between align-items-center">
                    <!-- Nome del personaggio a sinistra -->
                    <span class="fs-2">{{ $item->name }}</span>

                    <!-- Pulsanti a destra -->
                    <div>
                        <!-- Link per visualizzare i dettagli del personaggio -->
                        <a href="{{ route('items.show', ['item' => $item->id]) }}" class="btn btn-info btn-sm">Show</a>

                        <!-- Link per modificare il personaggio -->
                        <a href="{{ route('items.edit', ['item' => $item->id]) }}" class="btn btn-warning btn-sm">Edit</a>

                        <!-- Form per eliminare il personaggio -->
                        <form action="{{ route('items.destroy', ['item' => $item->id]) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm del-btn" data-pg-name="{{ $item->name }}">Delete</button>
                        </form>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="text-end mb-3">
                <a href="{{ route('items.create') }}" class="btn btn-primary"><i class="bi bi-plus-square-fill"></i> Nuovo oggetto</a>
            </div>
        </div>
    </div>
</div>
{{-- @include('items.partials.destroy_modal') --}}
@endsection
