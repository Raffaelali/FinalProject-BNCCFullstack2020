@extends('layouts.main')
@section('title','Home')
@section('content')
<main class="bg-light">
    <section class="py-5 bg-light">
        <div class="container" style="padding-left:2.5%;">
            <div class="row mb-5">
                <div class="col mt-5">
                    <div class="mb-5">
                        <h5 class="mb-2 text-muted">Hai, selamat datang di</h5>
                        <h2 class="mb-3 text-bold"><strong>Binus Computer Forum</strong></h2>
                        <h6 class="mplus text-black-77 mb-3">Boleh dicek sosmednya</h6>
                        <div>
                            <a href="https://instagram.com/raffaelali" target="_blank" class="btn btn-primary"><i class="fa fa-instagram fs-5"></i></a>
                            <a href="https://linkedin.com/in/raffhizz" target="_blank" class="btn btn-primary"><i class="fa fa-linkedin fs-5"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-5">
                <img class="img-fluid w-100" src="{{asset('images/undraw_Creation_process_re_74on.svg')}}" alt="">
            </div>
            </div>
        </div>
    </section>
    <section class="penampung">
        <div class="divider"></div>
    </section>
    <section class="pt-5 bg-light">
        <div class="container" style="padding-left:2.5%;">
            <div class="row mb-5">
                <div class="col">
                    <div class="mb-5">
                        <h2 class="mb-3 text-bold"><strong>Who are we?</strong></h2>
                        <p>We are webmaster from <strong>Bina Nusantara Computer Club Bandung</strong></p>
                        <p>and we are here to give you updates of informations about IT in Binus University</p>
                        <div>
                            <img id="bncc" class="img-fluid w-100" src="{{asset('images/download-removebg-preview.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-5">
                    <img id="bncc-seru" src="{{asset('images/images (1).jpeg')}}" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="penampung">
        <div class="divider"></div>
    </section>
    <section class="py-5 bg-light">
        <div class="container" style="padding-left:2.5%;">
            <h2 class="mb-5 text-bold"><strong>Post Terbaru</strong></h2>
            <div class="row">
                <div class="col-4 mt-5">
                    <div class="card kartu-halaman">
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
                <div class="col-4 mt-5">
                    <div class="card kartu-halaman ";">
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
                <div class="col-4 mt-5 mb-5">
                    <div class="card kartu-halaman">
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