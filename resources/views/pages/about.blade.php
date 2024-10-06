@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Delle nostre persone</h1>
                <h3>Le menti ingenue che si celano dietro tal bizzarro portale d'informazioni</h3>
            </div>
        </div>
        <div class="row">
            {{-- qui andranno le bio --}}
            <div class="col-12 col-md-6">
                <div class="img-box">
                    <img src="{{Vite::asset('resources/img/piero.jpg')}}" alt="">
                </div>
            </div>
            <div class="col-12 col-md-6">
            </div>
            <div class="col-12 col-md-6">
            </div>
            <div class="col-12 col-md-6">
            </div>
        </div>
    </div>
@endsection