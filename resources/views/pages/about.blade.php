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
            <div class="col-12">
                <div class="admins d-flex justify-content-center align-items-center my-5">
                    <div class="img-box">
                        <img src="{{Vite::asset('resources/img/piero.jpg')}}" alt="Medieval developer">
                    </div>
                    <div class="info-box px-5">
                        <h2 class="text-center fw-bolder">Sir Piero Bramanti</h2>
                        <p>Nato e cresciuto in quel di Pesaro, tra le onde dell'Adriatico mare. <br> Maestro nell’arte della sfoglia, la sua mano stende la pasta con tal grazia che persino le anziane dame di gran lignaggio del paese non vi si posson paragonare. Le sue passioni, nella quiete del tempo libero, sono le storie narrate e le melodie diffuse dalle onde eteree dei menestrelli. Predilige una serata tranquilla tra le mura domestiche, dove si impegna in epiche battaglie simulate, piuttosto che partecipare ai frenetici festeggiamenti delle danze notturne. Si considera un gigante, dotato di un cuore tenero e affettuoso.</p>
                    </div>
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