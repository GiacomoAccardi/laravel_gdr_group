@extends('layouts.app')

@section('content')

    <section id="create_page">
        <div class="container text-center">
            <div class="d-flex justify-content-center">
                <h1 class="align-self-center font_fam fit_content">
                    Genera qui il tuo combattente!
                </h1>
                <form action="{{ route('characters.store') }}" method="post" class="w-75">
                    @csrf
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group py-2">
                                <label for="name">Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                    name="name" value="{{ old('name') }}" required>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="form-group py-2">
                                <label for="description">Description</label>
                                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                                    rows="3" required>{{ old('description') }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group py-2">
                                <label for="strength">Strength</label>
                                <input type="number" max="20" class="form-control @error('strength') is-invalid @enderror" id="strength" name="strength"
                                    rows="3" required>{{ old('strength') }}
                                @error('strength')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group py-2">
                                <label for="defence">Defence</label>
                                <input type="number" max="20" class="form-control @error('defence') is-invalid @enderror" id="defence" name="defence"
                                    rows="3" required>{{ old('defence') }}
                                @error('defence')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group py-2">
                                <label for="speed">Speed</label>
                                <input type="number" max="20" class="form-control @error('speed') is-invalid @enderror" id="speed" name="speed"
                                    rows="3" required>{{ old('speed') }}
                                @error('speed')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group py-2">
                                <label for="intelligence">Intelligence</label>
                                <input type="number" max="20" class="form-control @error('intelligence') is-invalid @enderror" id="intelligence" name="intelligence"
                                    rows="3" required>{{ old('intelligence') }}
                                @error('intelligence')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group py-2">
                                <label for="life">Life</label>
                                <input type="number" max="20" class="form-control @error('life') is-invalid @enderror" id="life" name="life"
                                    rows="3" required>{{ old('life') }}
                                @error('life')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="py-3">
                        <button type="submit" class="btn btn-sm btn-md btn-primary fs-5 letter_spacing">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection