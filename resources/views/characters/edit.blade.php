@extends('layouts.app')

@section('content')

    <section id="create_page">
        <div class="container text-center">
            <h1 class="bg-warning mb-3">
                Genera qui il tuo combattente!
            </h1>
            <div class="d-flex justify-content-center">
                <h1 class="align-self-center fit_content w-25">
                    Qui, prima o poi, si potra' caricare l'immagine del pg che si vorra' creare
                </h1>
                <form action="{{ route('characters.store') }}" method="post" class="w-75">
                    @csrf
                    @method('PUT')
                    <div class="row text-white">
                        <div class="col-4">
                            <div class="form-group py-2">
                                <label for="name" class="fs-2 fw-semibold">Nome</label>
                                <input type="text" class="form-control rounded-0 @error('name') is-invalid @enderror" id="name"
                                    name="name" value="{{ old('name', $character->name) }}" required>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="form-group py-2">
                                <label for="description" class="fs-2 fw-semibold">Descrizione</label>
                                <textarea class="form-control rounded-0 @error('description') is-invalid @enderror" id="description" name="description"
                                    rows="3" required>{{ old('description', $character->description) }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row text-white">
                        <div class="col-4">
                            <div class="form-group py-2">
                                <label for="strength" class="fs-2 fw-semibold">Forza</label>
                                <input type="number" min="0" max="20" class="form-control rounded-0 @error('strength') is-invalid @enderror" id="strength" name="strength"
                                    rows="3" value="{{ old('strength', $character->strength) }}" required>
                                @error('strength')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group py-2">
                                <label for="defence" class="fs-2 fw-semibold">Difesa</label>
                                <input type="number" min="0" max="20" class="form-control rounded-0 @error('defence') is-invalid @enderror" id="defence" name="defence"
                                    rows="3" value="{{ old('defence', $character->defence) }}" required>
                                @error('defence')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group py-2">
                                <label for="speed" class="fs-2 fw-semibold">Velocita'</label>
                                <input type="number" min="0" max="20" class="form-control rounded-0 @error('speed') is-invalid @enderror" id="speed" name="speed"
                                    rows="3" value="{{ old('speed', $character->speed) }}" required>
                                @error('speed')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group py-2">
                                <label for="intelligence" class="fs-2 fw-semibold">Intelligenza</label>
                                <input type="number" min="0" max="20" class="form-control rounded-0 @error('intelligence') is-invalid @enderror" id="intelligence" name="intelligence"
                                    rows="3" value="{{ old('intelligence', $character->intelligence) }}" required>
                                @error('intelligence')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group py-2">
                                <label for="life" class="fs-2 fw-semibold">Salute</label>
                                <input type="number" min="0" max="200" class="form-control rounded-0 @error('life') is-invalid @enderror" id="life" name="life"
                                    rows="3" value="{{ old('life', $character->life) }}" required>
                                @error('life')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="py-3">
                        <button type="submit" class="fs-3 p-0 px-2 rounded-0 letter_spacing">Genera</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection