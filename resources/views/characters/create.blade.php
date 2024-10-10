@extends('layouts.app')

@section('content')

    <section id="create_page">
        <div id="overlay_effect" class="container text-center">
            <h1 class="p-0 m-0">
                Genera qui il tuo combattente!
            </h1>
            <div class="d-flex justify-content-center align-items-center p-4">
                <form action="{{ route('characters.store') }}" method="post" class="w-75">
                    @csrf
                    <div class="row text-white">
                        <div class="col-12 col-md-6">
                            <div class="form-group py-2">
                                <label for="name" class="fs-2 fw-semibold">Nome</label>
                                <input type="text" class="form-control rounded-0 @error('name') is-invalid @enderror"
                                    id="name" name="name" value="{{ old('name') }}">
                                @error('name')
                                    <div class="invalid-feedback fs-4">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group py-2">
                                <label for="type_id" class="fs-2 fw-semibold">Classe</label>
                                <select name="type_id" class="form-control rounded-0 type_id @error('type_id') is-invalid @enderror">
                                    <option value="">Seleziona la classe</option>
                                    @foreach($types as $type)
                                        <option value="{{ $type->id }}" data-img="{{ asset($type->image) }}">
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
                                <input type="number" min="0" max="15"
                                    class="form-control rounded-0 @error('strength') is-invalid @enderror" id="strength"
                                    name="strength" rows="3">{{ old('strength') }}
                                @error('strength')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-group py-2">
                                <label for="defence" class="fs-2 fw-semibold">Difesa</label>
                                <input type="number" min="0" max="15"
                                    class="form-control rounded-0 @error('defence') is-invalid @enderror" id="defence"
                                    name="defence" rows="3">{{ old('defence') }}
                                @error('defence')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-group py-2">
                                <label for="speed" class="fs-2 fw-semibold">Velocita'</label>
                                <input type="number" min="0" max="15"
                                    class="form-control rounded-0 @error('speed') is-invalid @enderror" id="speed"
                                    name="speed" rows="3">{{ old('speed') }}
                                @error('speed')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 col-md-4 offset-md-2">
                            <div class="form-group py-2">
                                <label for="intelligence" class="fs-2 fw-semibold">Intelligenza</label>
                                <input type="number" min="0" max="15"
                                    class="form-control rounded-0 @error('intelligence') is-invalid @enderror"
                                    id="intelligence" name="intelligence" rows="3">{{ old('intelligence') }}
                                @error('intelligence')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-group py-2">
                                <label for="life" class="fs-2 fw-semibold">Salute</label>
                                <input type="number" min="0" max="130"
                                    class="form-control rounded-0 @error('life') is-invalid @enderror" id="life"
                                    name="life" rows="3">{{ old('life') }}
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
                                <textarea class="form-control rounded-0 @error('description') is-invalid @enderror" id="description" name="description"
                                    rows="3">{{ old('description') }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class=" my-4 img-preview gif-box mx-auto">
                        <img src="" alt="Character's preview" class="d-none selected-img me-4">
                    </div>
                    <div class="py-3 mt-3 d-flex justify-content-center align-items-center">
                        <button type="submit" class="fs-3 p-0 px-2 rounded-0 letter_spacing">Genera</button>
                        <a href="{{ route('characters.index') }}" class="text-decoration-none fs-3 btn btn-sm rounded-0 back_button fw-semibold ms-3 py-0">
                            <i class="bi bi-arrow-left"></i> Ci devo pensare !
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
