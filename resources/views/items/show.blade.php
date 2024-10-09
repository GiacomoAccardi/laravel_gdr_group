@extends('layouts.app')

@section('content')
    <div class="bg-show-items">
        <div class="container py-5 show-page">
            <div class="row">
                <div class="col-12 bg-panel p-5">
                    <div class="d-flex align-items-center justify-content-center mb-4">
                        <img src="https://via.placeholder.com/150" alt="{{ $item['name'] }}" class="img-fluid rounded shadow">
                    </div>
                    <h1 class="text-center">{{ $item['name'] }}</h1>
                    <p class="text-center fs-1 fw-bolder">{{ $item['category'] }}</p>
                    <p class="text-center fs-1 fw-bolder">{{ $item['type'] }}</p>

                    <div class="text-center stats">
                        <h4>Weight: {{ $item['weight'] }} kg</h4>
                        <h4>Cost: {{ $item['cost'] }} gold</h4>
                        <h4>Dice: {{ $item['dice'] }}</h2>

                            <a href="{{ route('items.edit', ['item' => $item['id']]) }}"
                                class="btn btn-warning mt-3 fs-2"><i class="bi bi-feather"></i>Riscrivi</a>


                            <form action="{{ route('items.destroy', ['item' => $item['id']]) }}" method="POST"
                                class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger mt-3 delete-button fs-2"
                                    onclick="return confirm('Sei sicuro di voler cancellare questo oggetto?')">Distruggi</button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
