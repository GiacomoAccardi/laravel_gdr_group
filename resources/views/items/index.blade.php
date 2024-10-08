@extends('layouts.app')

@section('content')
<div class="bg-items">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 index-page"> 
                <div class="text-end mb-3">
                    <a href="{{ route('items.create') }}"class="btn-personal btn-create"><i class="bi bi-plus-square-fill"></i> Nuovo oggetto</a>
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
                            <a href="{{ route('items.show', ['item' => $item->id]) }}" class="btn-personal btn-show"><i class="bi bi-eye-fill"></i>Dettagli</a>


                            <!-- Link per modificare il personaggio -->
                            <a href="{{ route('items.edit', ['item' => $item->id]) }}" class="btn-personal btn-edit"><i class="bi bi-feather"></i>Riscrivi</a>

                            <!-- Form per eliminare il personaggio -->
                            <form action="{{ route('items.destroy', ['item' => $item->id]) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-personal del-btn" data-pg-name="{{ $item->name }}">Bandisci</button>
                            </form>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="text-end mb-3">
                    <a href="{{ route('items.create') }}"class="btn-personal btn-create"><i class="bi bi-plus-square-fill"></i> Nuovo oggetto</a>
                </div>
            </div>
        </div>
    </div>
</div>
 @include('items.partials.destroy_modal')
@endsection
