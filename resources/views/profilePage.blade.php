@extends('layouts.main')
@section('title','Home')
@section('content')
<main class="bg-light">
    <section class="py-5 bg-light-blue">
        <div class="container profile" style="padding-left:2.5%;">
            <div>
                <img class="foto-profile" src="{{ asset('images/pexels-thgusstavo-santana-1933873.jpg') }}" alt="">
                <h1 id="namaUser">{{Auth::user()->name}}</h1>
                <h1 id="emailUser">{{Auth::user()->email}}</h1>
            </div>
            <div class="row">
                <div class="col-4 mt-5 mb-5">
                    <div class="card profile-card">
                        <img src="{{asset('images/pexels-cottonbro-4709285.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-topik mb-3">
                                <a href="/sign" class="btn-sm btn-topik"> Kopi</a>
                                <a href="/sign" class="btn-sm btn-topik"> Komputer</a>
                            </div>
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                            <a href="#" class="card-link">Card link</a>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </section>
</main>
@endsection