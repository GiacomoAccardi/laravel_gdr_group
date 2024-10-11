@extends('layouts.app')

@section('content')
    {{-- <div class="container">
    <div class="row">
        <div class="col-12 index-page"> 
            <!-- Pulsante per aggiungere un nuovo personaggio -->
            <div class="text-end mb-3">
                <a href="{{ route('types.create') }}" class="btn btn-primary">Add New Type</a>
            </div>

            <!-- Lista dei personaggi -->
            <div class="list-group">
                <!-- Ciclo sui personaggi -->
                @foreach ($types as $type)
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
</div> --}}

    <div class="bg-charachters">
        <div class="container">
            <div class="row justify-content-center">
                <div id="overlay_effect" class="col-12 col-md-8 my-5">
                    <div class="d-flex justify-content-center mb-3">
                        <h1>Lista delle classi</h1>
                    </div>
                    {{-- <div class="text-end mt-4 mb-3">
                        <a href="{{ route('types.create') }}" class="btn-personal btn-create"><i
                                class="bi bi-plus-square-fill me-3"></i>Aggiungi classe</a>
                    </div> --}}
                    <!-- Lista dei personaggi -->
                    <div class="list-group">
                        <!-- Ciclo sui personaggi -->
                        @foreach ($types as $type)
                            <div
                                class="list-group-item d-flex flex-column flex-md-row justify-content-between align-items-center">
                                <!-- Nome del personaggio a sinistra -->
                                <div>
                                    <span>{{ $type->name }}</span>
                                </div>

                                <div class="mt-3 mt-md-0 d-none d-lg-block">
                                    <!-- Link per visualizzare i dettagli del personaggio -->
                                    <a href="{{ route('types.show', ['type' => $type->id]) }}"
                                        class="btn-personal my-2 btn-show"><i class="bi bi-eye-fill me-2"></i>Dettagli</a>

                                    {{-- <!-- Link per modificare il personaggio -->
                                    <a href="{{ route('types.edit', ['type' => $type->id]) }}"
                                        class="btn-personal my-2 btn-edit me-3"><i
                                            class="bi bi-feather me-2"></i>Riscrivi</a>

                                    <!-- Form per eliminare il personaggio -->
                                    <form action="{{ route('types.destroy', ['type' => $type->id]) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn-personal my-2 del-btn"
                                            data-pg-name="{{ $type->name }}">Elimina</button> --}}
                                    </form>
                                </div>
                                {{-- qui i bottoni mobile --}}
                                <div class="mt-3 mt-md-0 d-block d-lg-none">
                                    <!-- Link per visualizzare i dettagli del personaggio -->
                                    <a href="{{ route('types.show', ['type' => $type->id]) }}"
                                        class="btn-personal btn-show"><i class="bi bi-eye-fill"></i></a>

                                    {{-- <!-- Link per modificare il personaggio -->
                                    <a href="{{ route('types.edit', ['type' => $type->id]) }}"
                                        class="btn-personal btn-edit"><i class="bi bi-feather"></i></a>

                                    <!-- Form per eliminare il personaggio -->
                                    <form action="{{ route('types.destroy', ['type' => $type->id]) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn-personal del-btn characters-del"
                                            data-pg-name="{{ $type->name }}"><i class="bi bi-trash2"></i></button> --}}
                                    </form>
                                </div>

                            </div>
                        @endforeach
                    </div>
                    {{-- <div class="text-end mt-4 mb-2 ">
                        <a href="{{ route('types.create') }}" class="btn-personal btn-create"><i
                                class="bi bi-plus-square-fill me-3"></i>Aggiungi classe</a>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    {{-- @include('characters.partials.destroy_modal') --}}
@endsection
