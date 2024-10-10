@extends('layouts.app')

@section('content')

    <section id="edit_page">
        <div id="overlay_effect" class="container text-center z-2 position-relative">
            <h1 class="p-0 m-0">
                Riscrivi qui il tuo combattente!
            </h1>
            <div class="d-flex justify-content-center align-items-center p-4">
                <form action="{{ route('characters.store') }}" method="post" class="w-75">
                    @csrf
                    @method('PUT')
                    <div class="row text-white">
                        <div class="col-12 col-md-6">
                            <div class="form-group py-2">
                                <label for="name" class="fs-2 fw-semibold">Nome</label>
                                <input type="text" class="form-control rounded-0 @error('name') is-invalid @enderror"
                                    id="name" name="name" value="{{ old('name', $character->name) }}" required>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group py-2">
                                <label for="type_id" class="fs-2 fw-semibold">Classe</label>
                                <select name="type_id"
                                    class="form-control rounded-0 type_id @error('type_id') is-invalid @enderror" required>
                                    <option value="">Seleziona la classe</option>
                                    @foreach ($types as $type)
                                        <option value="{{ old('type_id', $type->id) }}" data-img="{{ asset($type->image) }}">
                                            {{ $type->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            @error('type_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row text-white">
                        <div class="col-12 col-md-4">
                            <div class="form-group py-2">
                                <label for="strength" class="fs-2 fw-semibold">Forza</label>
                                <input type="number" min="0" max="20"
                                    class="form-control rounded-0 @error('strength') is-invalid @enderror" id="strength"
                                    name="strength" rows="3" value="{{ old('strength', $character->strength) }}"
                                    required>
                                @error('strength')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-group py-2">
                                <label for="defence" class="fs-2 fw-semibold">Difesa</label>
                                <input type="number" min="0" max="20"
                                    class="form-control rounded-0 @error('defence') is-invalid @enderror" id="defence"
                                    name="defence" rows="3" value="{{ old('defence', $character->defence) }}"
                                    required>
                                @error('defence')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-group py-2">
                                <label for="speed" class="fs-2 fw-semibold">Velocita'</label>
                                <input type="number" min="0" max="20"
                                    class="form-control rounded-0 @error('speed') is-invalid @enderror" id="speed"
                                    name="speed" rows="3" value="{{ old('speed', $character->speed) }}" required>
                                @error('speed')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 col-md-4 offset-md-2">
                            <div class="form-group py-2">
                                <label for="intelligence" class="fs-2 fw-semibold">Intelligenza</label>
                                <input type="number" min="0" max="20"
                                    class="form-control rounded-0 @error('intelligence') is-invalid @enderror"
                                    id="intelligence" name="intelligence" rows="3"
                                    value="{{ old('intelligence', $character->intelligence) }}" required>
                                @error('intelligence')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-group py-2">
                                <label for="life" class="fs-2 fw-semibold">Salute</label>
                                <input type="number" min="0" max="200"
                                    class="form-control rounded-0 @error('life') is-invalid @enderror" id="life"
                                    name="life" rows="3" value="{{ old('life', $character->life) }}" required>
                                @error('life')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group py-2">
                                <label for="description" class="fs-2 fw-semibold">Descrizione</label>
                                <textarea class="form-control rounded-0 @error('description') is-invalid @enderror" id="description"
                                    name="description" rows="3" required>{{ old('description', $character->description) }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mb-2 img-preview gif-box mx-auto">
                        <img src="" alt="Character's preview" class="d-none selected-img">
                    </div>
                    <div class="py-3 mt-3 d-flex justify-content-center align-items-center">
                        <button type="submit" class="fs-3 p-0 px-2 rounded-0 letter_spacing">Genera</button>
                        <a href="{{ route('characters.index') }}"
                            class="text-decoration-none fs-3 btn btn-sm rounded-0 back_button fw-semibold ms-3 py-0">
                            <i class="bi bi-arrow-left"></i> Ci devo pensare !
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
