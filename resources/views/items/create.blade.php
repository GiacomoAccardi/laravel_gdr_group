@extends('layouts.app')

@section('content')
    <section id="create_page">
        <div class="overlay-blur"></div>
        <div class="container text-center z-2 position-relative">
            <h1 class="p-0 m-0">
                Crea una nuova arma!
            </h1>
            <div class="d-flex justify-content-center p-4">
                <form action="{{ route('items.store') }}" method="post" class="w-75">
                    @csrf
                    <div class="row text-white justify-content-center">
                        <div class="col-12 col-md-6">
                            <div class="form-group py-2">
                                <label for="name" class="fs-2 fw-semibold">Nome arma</label>
                                <input type="text" class="form-control rounded-0 @error('name') is-invalid @enderror"
                                    id="name" name="name" value="" required>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 col-md-6">
                            <div class="form-group py-2">
                                <label for="category" class="fs-2 fw-semibold">Seleziona la catgoria</label>
                                <select name="category"
                                    class="form-control rounded-0 @error('category') is-invalid @enderror" required>
                                    <option value="category">Martial Melee Weapons</option>
                                    <option value="category">Martial Ranged Weapons</option>
                                </select>
                            </div>
                            @error('type_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-6 col-md-6">
                            <div class="form-group py-2">
                                <label for="dice" class="fs-2 fw-semibold">Danno</label>
                                <select name="dice" class="form-control rounded-0 @error('dice') is-invalid @enderror"
                                    required>
                                    <option value="dice">1d4</option>
                                    <option value="dice">1d6</option>
                                    <option value="dice">1d8</option>
                                    <option value="dice">1d10</option>
                                    <option value="dice">1d12</option>
                                    <option value="dice">2d6</option>
                                </select>
                            </div>
                            @error('type_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 col-md-6">
                            <div class="form-group py-2">
                                <label for="weight" class="fs-2 fw-semibold">Peso</label>
                                <input type="number" min="0" max="50"
                                    class="form-control rounded-0 @error('weight') is-invalid @enderror" id="weight"
                                    name="weight" rows="3" required>
                                @error('weight')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6 col-md-6">
                            <div class="form-group py-2">
                                <label for="cost" class="fs-2 fw-semibold">Costo</label>
                                <input type="number" min="0" max="75"
                                    class="form-control rounded-0 @error('cost') is-invalid @enderror" id="cost"
                                    name="cost" rows="3" required>
                                @error('cost')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    {{-- prova anteprima --}}
                    <div class="mb-2 img-preview gif-box mx-auto">
                        <img src="" alt="Character's preview" class="d-none selected-img">
                    </div>
                    <div class="py-3 mt-3 d-flex justify-content-center align-items-center">
                        <a href="{{ route('characters.index') }}"
                            class="text-decoration-none fs-3 btn btn-sm rounded-0 back_button fw-semibold mx-3 py-0">
                            <i class="bi bi-arrow-left"></i> Ci devo pensare !
                        </a>
                        <button type="submit" class="fs-3 p-0 px-2 rounded-0 letter_spacing">Genera</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
