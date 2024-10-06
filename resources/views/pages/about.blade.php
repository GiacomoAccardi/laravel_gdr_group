@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="text-center" id="about-text">
                    <h1 class="fw-bolder" id="about-title">Delle nostre persone</h1>
                    <h3 id="about-subtitle">Le menti ingenue che si celano dietro tal bizzarro portale d'informazioni</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="admins d-flex justify-content-center align-items-center my-5">
                    <div class="img-box">
                        <img src="{{Vite::asset('resources/img/piero.jpg')}}" alt="Medieval developer">
                    </div>
                    <div class="info-box px-5">
                        <h2 class="text-center fw-bolder">Sir Piero Bramanti</h2>
                        <p>Nato e cresciuto in quel di Pesaro, tra le onde dell'Adriatico mare. Nobile Cavaliere e maestro nell’arte della sfoglia, la sua mano stende la pasta con tal grazia che persino le anziane dame di gran lignaggio del paese non vi si posson paragonare. Le sue passioni, nella quiete del tempo libero, sono le storie narrate e le melodie diffuse dalle onde eteree dei menestrelli. Predilige una serata tranquilla tra le mura domestiche, dove si impegna in epiche battaglie simulate, piuttosto che partecipare ai frenetici festeggiamenti delle danze notturne. Si considera un gigante, dotato di un cuore tenero e affettuoso.</p>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="admins d-flex justify-content-center align-items-center my-5">
                    <div class="img-box">
                        <img src="{{Vite::asset('resources/img/alessandro.jpg')}}" alt="Medieval developer">
                    </div>
                    <div class="info-box px-5">
                        <h2 class="text-center fw-bolder">Il fu Lord Alessandro Farina</h2>
                        <p>Quarto del suo nome, di nobile lignaggio, fu un uomo di grandi virtù, conosciuto per la sua rettitudine e amore per la gloriosa città di Roma, della quale egli fu custode dei suoi più antichi segreti. Il destino volle che Alessandro, un tempo esempio di onore, fosse presto accecato dai vizi del gioco. Precipitato in un abisso di debiti e tentazioni, la sua anima fu corrotta e, abbandonata ogni via di rettitudine, egli divenne un ladro di mestiere. Oramai braccato dalla legge, una pesante taglia pende sul suo capo. Della città di Milano, dice ancor oggi che la miglior cosa ivi trovata sia la biga che riconduce sollecita a Roma.</p>
                    </div>
                </div>
            </div><div class="col-12">
                <div class="admins d-flex justify-content-center align-items-center my-5">
                    <div class="img-box">
                        <img src="{{Vite::asset('resources/img/laura.jpg')}}" alt="Medieval developer">
                    </div>
                    <div class="info-box px-5">
                        <h2 class="text-center fw-bolder">Lady Laura Corrado</h2>
                        <p>Umile contadina della miseria calabra, vive tra le fatiche e le privazioni della sua terra. Con spirito ardente, ella s’impegna nello studio delle nobili discipline filosofiche, ma cela tale passione, sconsiderata per una fanciulla analfabeta, agli occhi del mondo. Spesso si abbandona a fughe tra i boschi, dove trova rifugio e sovranità tra i procioni, creature astute e libere. Molti, vedendola favellare con creature sì tanto ignobili, la ritengono affetta da follia..</p>
                    </div>
                </div>
            </div><div class="col-12">
                <div class="admins d-flex justify-content-center align-items-center my-5">
                    <div class="img-box">
                        <img src="{{Vite::asset('resources/img/giacomo.jpg')}}" alt="Medieval developer">
                    </div>
                    <div class="info-box px-5">
                        <h2 class="text-center fw-bolder">Giacomo Accardi o il Bardo</h2>
                        <p>Giovane di ventotto primavere, originario della storica città di Palermo. Egli nutre una profonda passione per ogni arte, tecnica e scienza che il volgo di taluni paesi definisce “nerd”. La sua dedizione è pari solo all'amore che nutre per il suo strumento a corde, dal quale ricava melodie che incantano l’animo. Le meraviglie del firmamento lo affascinano e con sguardo sognante contempla le stelle e gli astri.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection