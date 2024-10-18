@extends('layouts.app')

@section('content')
    <section id="create_page">
        <div id="overlay_effect" class="container text-center">
            <div class="container text-center z-2 position-relative">
                <h1 class="p-0 m-0">
                    Modifica il tuo oggetto
                </h1>
                <div class="d-flex justify-content-center p-4">
                    <form action="{{ route('items.update', ['item' => $item->id]) }}" method="POST" class="w-75">
                        @csrf
                        @method('PUT')
                        <div class="row text-white justify-content-center">
                            <div class="col-12 col-lg-6">
                                <div class="form-group py-2">
                                    <label for="name" class="fs-2 fw-semibold">Nome oggetto</label>
                                    <input type="text" class="form-control rounded-0 @error('name') is-invalid @enderror"
                                        id="name" name="name" value="{{ old('name', $item->name) }}" required>
                                    @error('name')
                                        <div class="alert alert-danger fs-4">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group py-2">
                                    <label for="category" class="fs-2 fw-semibold">Seleziona la categoria</label>
                                    <select name="category"
                                        class="form-control rounded-0 @error('category') is-invalid @enderror" required>
                                        <option value="Not a weapon"
                                            {{ old('category') == 'Not a weapon' ? 'selected' : '' }}>Not a weapon</option>
                                        <option value="Martial Melee Weapons"
                                            {{ old('category') == 'Martial Melee Weapons' ? 'selected' : '' }}>Martial Melee
                                            Weapons</option>
                                        <option value="Martial Ranged Weapons"
                                            {{ old('category') == 'Martial Ranged Weapons' ? 'selected' : '' }}>Martial
                                            Ranged Weapons</option>
                                    </select>
                                </div>
                                @error('type_id')
                                    <div class="alert alert-danger fs-4">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group py-2">
                                    <label for="dice" class="fs-2 fw-semibold">Chance</label>
                                    <select name="dice"
                                        class="form-control rounded-0 @error('dice') is-invalid @enderror" required>
                                        <option value="1d4" {{ old('dice') == '1d4' ? 'selected' : '' }}>1d4</option>
                                        <option value="1d6" {{ old('dice') == '1d6' ? 'selected' : '' }}>1d6</option>
                                        <option value="1d8" {{ old('dice') == '1d8' ? 'selected' : '' }}>1d8</option>
                                        <option value="1d10" {{ old('dice') == '1d10' ? 'selected' : '' }}>1d10</option>
                                        <option value="1d12" {{ old('dice') == '1d12' ? 'selected' : '' }}>1d12</option>
                                        <option value="2d6" {{ old('dice') == '2d6' ? 'selected' : '' }}>2d6</option>
                                    </select>
                                </div>
                                @error('type_id')
                                    <div class="alert alert-danger fs-4">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group py-2">
                                    <label for="type" class="fs-2 fw-semibold">Tipologia</label>
                                    <select name="type"
                                        class="form-control rounded-0 @error('type') is-invalid @enderror" required>
                                        <option value="Weapons" {{ old('type') == 'Weapons' ? 'selected' : '' }}>Weapons
                                        </option>
                                        <option value="Potions" {{ old('type') == 'Potions' ? 'selected' : '' }}>Potions
                                        </option>
                                        <option value="Projectile" {{ old('type') == 'Projectile' ? 'selected' : '' }}>
                                            Projectile</option>
                                        <option value="Miscellaneous"
                                            {{ old('type') == 'Miscellaneous' ? 'selected' : '' }}>Miscellaneous</option>
                                        <option value="Artifacts" {{ old('type') == 'Artifacts' ? 'selected' : '' }}>
                                            Artifacts</option>
                                    </select>
                                </div>
                                @error('type_id')
                                    <div class="alert alert-danger fs-4">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group py-2">
                                    <label for="weight" class="fs-2 fw-semibold">Peso</label>
                                    <input type="number" min="0" max="50"
                                        class="form-control rounded-0 @error('weight') is-invalid @enderror" id="weight"
                                        name="weight" rows="3" value="{{ old('weight', $item->weight) }}" required>
                                    @error('weight')
                                        <div class="alert alert-danger fs-4">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group py-2">
                                    <label for="cost" class="fs-2 fw-semibold">Costo</label>
                                    <input type="number" min="0" max="75"
                                        class="form-control rounded-0 @error('cost') is-invalid @enderror" id="cost"
                                        name="cost" rows="3" value="{{ old('cost', $item->cost) }}" required>
                                    @error('cost')
                                        <div class="alert alert-danger fs-4">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        {{-- prova anteprima --}}
                        <div class="mb-2 img-preview gif-box mx-auto">
                            <img src="" alt="Character's preview" class="d-none selected-img">
                        </div>

                        <div class="py-3 mt-3 d-none d-md-block">
                            <div class="d-flex justify-content-center align-items-center">
                                <a href="{{ route('items.index') }}"
                                    class="text-decoration-none fs-3 btn btn-sm rounded-0 back_button fw-semibold me-2 py-0">
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-arrow-left"></i>
                                        <span class="ms-2">Ci devo pensare!</span>
                                    </div>
                                </a>
                                <button id="forge_button_mobile" type="submit"
                                    class="fs-1 p-0 px-4 py-2 rounded-0 letter_spacing">Riscrivi</button>
                            </div>
                        </div>

                        {{-- button Mobile --}}
                        <div class="py-3 mt-3 d-flex flex-column d-md-none">
                            <div class="row">
                                <div class="col-12">
                                    <button id="forge_button_mobile" type="submit"
                                        class="mb-3 p-2 rounded-0 letter_spacing">Riscrivi</button>
                                </div>
                                <div class="col-12">
                                    <a href="{{ route('items.index') }}"
                                        class="text-decoration-none fs-3 btn btn-sm rounded-0 back_button fw-semibold py-0">
                                        <div class="d-flex align-items-center">
                                            <i class="bi bi-arrow-left"></i>
                                            <span class="ms-2">Ci devo pensare!</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
