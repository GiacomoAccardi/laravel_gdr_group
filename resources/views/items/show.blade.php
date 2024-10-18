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
                        <div class="d-flex justify-content-center align-items-center pt-2 d-none d-md-block">
                            <div>
                                <a href="{{ route('items.edit', ['item' => $item['id']]) }}"
                                    class="btn btn-warning fs-2 rounded-0"><i class="bi bi-feather"></i>Riscrivi
                                </a>
                                <form action="{{ route('items.destroy', ['item' => $item['id']]) }}" method="POST"
                                    class="d-inline p-0">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger delete-button fs-2 rounded-0 items-del" data-pg-name="{{ $item->name }}">Bandisci</button>
                                </form>
                            </div>
                            <div class="my-4">
                                <a href="{{ route('items.index') }}"
                                    class="text-decoration-none rounded-0 fw-semibold py-2 my-3 fs-1 return-anchor">
                                    <i class="bi bi-arrow-left"></i> Torno sui miei passi . .
                                </a>
                            </div>
                        </div>

                        {{-- buttons per mobile --}}
                        <div class="container d-md-none">
                            <div class="row mb-3">
                                <div class="col-12">
                                    <a href="{{ route('items.edit', ['item' => $item['id']]) }}"
                                        class="btn btn-warning fs-2 rounded-0">Riscrivi
                                    </a>
                                    <form action="{{ route('items.destroy', ['item' => $item['id']]) }}" method="POST"
                                        class="d-inline p-0">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger delete-button fs-2 rounded-0 items-del" data-pg-name="{{ $item->name }}">Bandisci</button>
                                    </form>
                                </div>
                            </div>
                            <div class="row">
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
                </div>
            </div>
        </div>
    </div>
    @include('items.partials.destroy_modal')
@endsection
