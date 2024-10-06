@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Come contattarci?</h1>
                <h3 class="text-center">Con la presente, potrete stabilire un contatto con un prode membro della nostra assemblea</h3>
            </div>
            <div class="col-12">
                <form method="POST">
                    <div class="row gy-2">
                        <div class="col-12 col-md-6">
                            <label class="form-label mt-3" for="name">Prego, riportate qui il Vostro nome:</label>
                            <input class="form-control" type="text" id="name" name="name" placeholder="Your name">
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label mt-3" for="mail">In quale modo ci è possibile contattarVi?</label>
                            <input class="form-control" type="email" id="mail" name="mail" placeholder="example@web.com">
                        </div>
                    </div>
                    <div class="row gy-2">
                        <div class="col-12">
                            <label class="form-label mt-3" for="comment">Un Vostro giudizio potrebbe meglio orientarci nella ricerca del modo più consono per assisterVi</label>
                            <textarea class="form-control" name="comment" id="comment" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <button class="my-3">Invia</button>
                </form>
            </div>
            </div>
        </div>
    </div>
@endsection