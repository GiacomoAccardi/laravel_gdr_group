@extends('layouts.app')

@section('content')
    <div class="bg-show-items">
        <div class="container py-5 show-page">
            <div class="row">
                <div class="col-12 bg-panel p-5">
                    <div class="d-flex align-items-center justify-content-center mb-4">
                        {{-- <img src="" alt="{{ $item['name'] }}" class="img-fluid rounded shadow"> --}}
                    </div>
                    <h1 class="text-center">{{ $item['name'] }}</h1>
                    <p class="text-center fs-1 fw-bolder">{{ $item['category'] ?? '' }}</p>

                    <p class="text-center fs-1 fw-bolder">{{ $item['type'] }}</p>

                    <div class="text-center stats text-center">
                        <h4>Weight: {{ $item['weight'] }} lb</h4>
                        <h4>Cost: {{ $item['cost'] }} gold</h4>
                        <h4>Dice: {{ $item['dice'] }}</h2>
                            <div class="d-flex justify-content-center align-items-center pt-2">
                            <a href="{{ route('items.edit', ['item' => $item['id']]) }}"
                                class="btn btn-warning fs-2"><i class="bi bi-feather"></i>Riscrivi</a>
                                <a href="{{ route('items.index') }}"
                                class="text-decoration-none fs-3 btn btn-sm rounded-0 back_button fw-semibold py-2">
                                <i class="bi bi-arrow-left"></i> Torno sui miei passi . .
                            </a>

                            <form action="{{ route('items.destroy', ['item' => $item['id']]) }}" method="POST"
                                class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger delete-button fs-2 object-show-delete" data-obj-name="{{ $item->name }}">Distruggi</button>
                            </form>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('items.partials.destroy_modal')
@endsection
