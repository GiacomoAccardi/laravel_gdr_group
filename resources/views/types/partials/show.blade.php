@extends('layouts.app')

@section('content')
    <div class="bg-show-charachters">
        <div class="container py-5 show-page">
            <div class="row">
                <div class="col-12 bg-panel text-center p-5">
                    <h1 class="m-0">{{ $classinfoItem->name }}</h1>
                    <img src="{{ $classinfoItem->image }}" alt="{{ $classinfoItem->name }}">
                    <p class="fs-1 fw-bolder type-description mx-auto">{{ $classinfoItem->description }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
