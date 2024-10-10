@extends('layouts.app')

@section('content')
    <div class="bg-charachters">
        <div class="container">
            <div class="row justify-content-center">
                <div id="overlay_effect" class="col-12 col-md-8 my-5">
                    <div class="d-flex justify-content-center mb-3">
                        <h1>Lista dei personaggi</h1>
                    </div>
                    <div class="text-end mt-4 mb-2 ">
                        <a href="{{ route('characters.create') }}" class="btn-personal btn-create"><i
                                class="bi bi-plus-square-fill me-3"></i>Nuovo personaggio</a>
                    </div>
                    <!-- Lista dei personaggi -->
                    <div class="list-group">
                        <!-- Ciclo sui personaggi -->
                        @foreach ($characters as $character)
                            <div
                                class="list-group-item d-flex flex-column flex-md-row justify-content-between align-items-center">
                                <!-- Nome del personaggio a sinistra -->
                                <div>
                                    <span>{{ $character->name }}</span>
                                    <span class="mx-2 text-warning-emphasis">{{ $character->type->name ?? 'Non Definito' }}</span>
                                    <span class="text-success">HP: {{ $character->life }}</span>
                                </div>

                                <div class="mt-3 mt-md-0 d-none d-lg-block">
                                    <!-- Link per visualizzare i dettagli del personaggio -->
                                    <a href="{{ route('characters.show', ['character' => $character->id]) }}"
                                        class="btn-personal btn-show"><i class="bi bi-eye-fill me-2"></i>Dettagli</a>

                                    <!-- Link per modificare il personaggio -->
                                    <a href="{{ route('characters.edit', ['character' => $character->id]) }}"
                                        class="btn-personal btn-edit"><i class="bi bi-feather me-2"></i>Riscrivi</a>

                                    <!-- Form per eliminare il personaggio -->
                                    <form action="{{ route('characters.destroy', ['character' => $character->id]) }}"
                                        method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn-personal del-btn"
                                            data-pg-name="{{ $character->name }}">Bandisci</button>
                                    </form>
                                </div>
                                {{-- qui i bottoni mobile --}}
                                <div class="mt-3 mt-md-0 d-block d-lg-none">
                                    <!-- Link per visualizzare i dettagli del personaggio -->
                                    <a href="{{ route('characters.show', ['character' => $character->id]) }}"
                                        class="btn-personal btn-show"><i class="bi bi-eye-fill"></i></a>

                                    <!-- Link per modificare il personaggio -->
                                    <a href="{{ route('characters.edit', ['character' => $character->id]) }}"
                                        class="btn-personal btn-edit"><i class="bi bi-feather"></i></a>

                                    <!-- Form per eliminare il personaggio -->
                                    <form action="{{ route('characters.destroy', ['character' => $character->id]) }}"
                                        method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn-personal del-btn characters-del"
                                            data-pg-name="{{ $character->name }}"><i class="bi bi-trash2"></i></button>
                                    </form>
                                </div>
                                
                            </div>
                        @endforeach
                    </div>
                    <div class="text-end mt-4 mb-2 ">
                        <a href="{{ route('characters.create') }}" class="btn-personal btn-create"><i
                                class="bi bi-plus-square-fill me-3"></i>Nuovo personaggio</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('characters.partials.destroy_modal')
@endsection
