@extends('layouts.app')

@section('content')
    <div class="bg-charachters">
        <div class="container">
            <div class="row justify-content-center p-5">
                <div class="col-12 col-md-12 col-lg-6 index-page bg-panel">
                    <div class="d-flex justify-content-center mb-3">
                        <h1>Lista dei personaggi</h1>
                    </div>
                    <!-- Lista dei personaggi -->
                    <div class="list-group">
                        <!-- Ciclo sui personaggi -->
                        @foreach ($characters as $character)
                            <div
                                class="list-group-item d-flex flex-column flex-md-row justify-content-between align-items-center">
                                <!-- Nome del personaggio a sinistra -->
                                <span class="fs-4">{{ $character->name }}</span>

                                <div class="mt-3 mt-md-0">
                                    <!-- Link per visualizzare i dettagli del personaggio -->
                                    <a href="{{ route('characters.show', ['character' => $character->id]) }}"
                                        class="btn-personal btn-show me-2"><i class="bi bi-eye-fill"></i>Dettagli</a>

                                    <!-- Link per modificare il personaggio -->
                                    <a href="{{ route('characters.edit', ['character' => $character->id]) }}"
                                        class="btn-personal btn-edit"><i class="bi bi-feather"></i>Riscrivi</a>

                                    <!-- Form per eliminare il personaggio -->
                                    <form action="{{ route('characters.destroy', ['character' => $character->id]) }}"
                                        method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn-personal del-btn"
                                            data-pg-name="{{ $character->name }}">Bandisci</button>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="text-end mt-4 mb-2 ">
                        <a href="{{ route('characters.create') }}" class="btn-personal btn-create"><i
                                class="bi bi-plus-square-fill"></i>Nuovo personaggio</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('characters.partials.destroy_modal')
@endsection
