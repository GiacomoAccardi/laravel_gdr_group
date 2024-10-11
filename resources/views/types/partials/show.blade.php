@extends('layouts.app')

@section('content')
    <div class="bg-show-charachters">
        <div class="container py-5 show-page">
            <div class="row">
                <div class="col-12 bg-panel text-center p-5">
                    <h1 class="m-0">{{ $classinfoItem->name }}</h1>
                    <img src="{{ $classinfoItem->image }}" alt="{{ $classinfoItem->name }}" class="d250x mb-5">
                    <p class="fs-1 fw-bolder type-description mx-auto">{{ $classinfoItem->description }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-center">
                        <a href="{{ route('types.index') }}"
                            class="text-decoration-none fs-3 btn btn-sm rounded-0 back_button fw-semibold py-2">
                            <i class="bi bi-arrow-left"></i> Torno sui miei passi . .
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
