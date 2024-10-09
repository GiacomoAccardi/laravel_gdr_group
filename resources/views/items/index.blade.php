@extends('layouts.app')

@section('content')
    <div class="bg-items">
        <div class="container">
            <div class="row justify-content-center">
                <div class="row justify-content-center p-5">
                    <div class="col-12 col-md-12 col-lg-6 index-page bg-panel">
                        <div class="d-flex justify-content-center mb-3">
                            <h1>Lista oggetti</h1>
                        </div>
                        <!-- Lista degli oggetti -->
                        <div class="list-group">
                            <!-- Ciclo sugli oggetti -->
                            @foreach ($items as $item)
                                <div
                                    class="list-group-item d-flex flex-column flex-md-row justify-content-between align-items-center">
                                    <!-- Nome dell'oggetto a sinistra -->
                                    <span class="fs-4">{{ $item->name }}</span>

                                    <div class="mt-3 mt-md-0">
                                        <!-- Link per visualizzare i dettagli dell'oggetto -->
                                        <a href="{{ route('items.show', ['item' => $item->id]) }}"
                                            class="btn-personal btn-show"><i class="bi bi-eye-fill"></i>Dettagli</a>

                                        <!-- Link per modificare l'oggetto -->
                                        <a href="{{ route('items.edit', ['item' => $item->id]) }}"
                                            class="btn-personal btn-edit"><i class="bi bi-feather"></i>Riscrivi</a>

                                        <!-- Form per eliminare l'oggetto -->
                                        <form action="{{ route('items.destroy', ['item' => $item->id]) }}" method="POST"
                                            class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn-personal del-btn"
                                                data-pg-name="{{ $item->name }}">Bandisci</button>
                                        </form>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="text-end mt-4 mb-2 ">
                            <a href="{{ route('items.create') }}" class="btn-personal btn-create"><i
                                    class="bi bi-plus-square-fill"></i>Nuovo oggetto</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- @include('items.partials.destroy_modal') --}}
    @endsection
