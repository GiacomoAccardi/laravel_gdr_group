@extends('layouts.app')

@section('content')
    <div class="jumbo-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="home-box d-flex flex-column align-items-center justify-content-center">
                        <span class="title text-center">Un nuovo viaggio sta per cominciare</span>
                        <div class="frame-box">
                            <img src="{{ Vite::asset('/resources/img/lines.png') }}" alt="Frame">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <p id="home-text" class="my-5">Acuite i sensi, giovani esploratori, perché le vostre vite stanno per cambiare per sempre. Davanti
                    a voi si
                    stende un mondo sconosciuto, fatto di sentieri mai battuti e segreti sepolti sotto antiche foreste e montagne
                    lontane. Il destino vi ha chiamati, e non è un invito che si può ignorare. Prima di intraprendere questo
                    viaggio, però, dovrete fare una scelta: sarete coraggiosi guerrieri, brandendo spade lucenti e scudi
                    impenetrabili, o preferirete l’arte furtiva degli assassini, muovendovi come ombre, con lame affilate pronte a
                    colpire nel silenzio? Forse, invece, sceglierete la via della magia, diventando maghi potenti, capaci di evocare
                    fiamme e tempeste con un semplice gesto. Scegliete con saggezza le vostre armi, perché esse saranno il vostro
                    unico alleato in un mondo dove il pericolo e l'avventura vi aspettano ad ogni angolo."
                </p>
            </div>
        </div>


    </div>
@endsection
