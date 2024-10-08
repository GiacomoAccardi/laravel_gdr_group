@extends('layouts.app')

@section('content')
    <div class="container py-5 show-page">
        <div class="row">
            <div class="col-12">
                <div class="d-flex align-items-center justify-content-center mb-4">
                    <img src="https://via.placeholder.com/150" alt="{{ $item['name'] }}" class="img-fluid rounded shadow">
                </div>
                <h1 class="display-5 text-white text-center">{{ $item['name'] }}</h1>
                <p class="text-muted text-white text-center fs-2 fw-bolder">{{ $item['category'] }}</p>
                <p class="text-muted text-white text-center fs-3">{{ $item['type'] }}</p>
                
                <div class="text-center item-stats">
                    <h2 class="fw-bold text-white">Weight: {{ $item['weight'] }} kg</h2>
                    <h2 class="fw-bold text-white">Cost: {{ $item['cost'] }} gold</h2>
                    <h2 class="fw-bold text-white">Dice: {{ $item['dice'] }}</h2>

                    <a href="{{ route('items.edit', ['item' => $item['id']]) }}" class="btn btn-warning mt-3">Edit</a>

                    <form action="{{ route('items.destroy', ['item' => $item['id']]) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger mt-3 delete-button" onclick="return confirm('Sei sicuro di voler cancellare questo oggetto?')">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
