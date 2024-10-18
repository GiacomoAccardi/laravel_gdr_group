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
            <div class="row d-none d-md-block">
                <div class="col-12">
                    <div class="d-flex justify-content-center">
                        <div class="my-4">
                            <a href="{{ route('items.index') }}"
                                class="text-decoration-none rounded-0 fw-semibold py-2 my-3 fs-1 return-anchor">
                                <i class="bi bi-arrow-left"></i> Torno sui miei passi . .
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- button mobile --}}
            <div class="row d-md-none">
                <div class="col-12">
                    <a href="{{ route('items.index') }}" 
                    class="text-decoration-none rounded-0 fw-semibold py-2 my-3 fs-1 return-anchor">
                        <div class="d-flex align-items-center justify-content-center return-mobile">
                            <i class="bi bi-arrow-left"></i>
                            <div class="ms-2 fs-1 py-2">Torno sui miei passi . .</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
