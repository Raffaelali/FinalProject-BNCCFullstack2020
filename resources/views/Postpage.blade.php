@extends('layouts.main')
@section('title','Home')
@section('content')
<main class="bg-light">
    <section class="py-5 bg-light">
        <div class="container" style="padding-left:2.5%;">
            <div class="row mb-5">
                <div class="col mt-5">
                    <div class="mb-5">
                        <h1 class="mb-3 text-bold"><strong>Postingan</strong></h1>
                        <h5 class="mplus text-black-77 mb-3">Hai, Selamat datang di postingan. Disini kamu bisa buat postingan <br> 
                        seputar IT dan kamu juga bisa lihat postingan dari teman-teman</h5>
                        <a href="">Buat Posting Sekarang</a>
                    </div>
                </div>
                <div class="col-5 mt-5">
                    <h3 style="font-size:1.3em;" class="mb-3 pt-3 text-bold">Berikut ada list topik yang bisa kamu pilih</h3>
                    <div class="card mb-3">
                        <div class="card-body">
                            <a href="" class="btn-sm btn-topik"> Kopi</a>
                            <a href="" class="btn-sm btn-topik"> Komputer</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="penampung">
        <div class="divider"></div>
    </section>
    <section>
        <div class="container mt-4">
            <div class="row">
                <div class="col-lg-6">
                    <form action="" method="post">
                        <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Cari artikel" name="keyword" id="keyword" aria-describedby="button-addon2" autocomplete="off">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit" id="tombolCari" >Cari</button>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="pb-5 pt-0 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-6 mb-3">
                    <div class="card post-card" style="width:auto;">
                        <img src="{{ asset('images/pexels-cottonbro-4709285.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-topik mb-3">
                                <a href="/sign" class="btn-sm btn-topik"> Kopi</a>
                                <a href="/sign" class="btn-sm btn-topik"> Komputer</a>
                            </div>
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="card-link">Card link</a>
                        </div>
                    </div>
                </div>
                <div class="col-6 mb-3">
                    <div class="card post-card" style="width:auto;">
                        <img src="{{ asset('images/pexels-cottonbro-4709285.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-topik mb-3">
                                <a href="/sign" class="btn-sm btn-topik"> Kopi</a>
                                <a href="/sign" class="btn-sm btn-topik"> Komputer</a>
                            </div>
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="card-link">Card link</a>
                        </div>
                    </div>
                </div>
                <div class="col-6 mb-3">
                    <div class="card post-card" style="width:auto;">
                        <img src="{{ asset('images/pexels-cottonbro-4709285.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-topik mb-3">
                                <a href="/sign" class="btn-sm btn-topik"> Kopi</a>
                                <a href="/sign" class="btn-sm btn-topik"> Komputer</a>
                            </div>
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="card-link">Card link</a>
                        </div>
                    </div>
                </div>
                <div class="col-6 mb-3">
                    <div class="card post-card" style="width:auto;">
                        <img src="{{ asset('images/pexels-cottonbro-4709285.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-topik mb-3">
                                <a href="/sign" class="btn-sm btn-topik"> Kopi</a>
                                <a href="/sign" class="btn-sm btn-topik"> Komputer</a>
                            </div>
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="card-link">Card link</a>
                        </div>
                    </div>
                </div>
                <div class="col-6 mb-3">
                    <div class="card post-card" style="width:auto;">
                        <img src="{{ asset('images/pexels-cottonbro-4709285.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-topik mb-3">
                                <a href="/sign" class="btn-sm btn-topik"> Kopi</a>
                                <a href="/sign" class="btn-sm btn-topik"> Komputer</a>
                            </div>
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="card-link">Card link</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection