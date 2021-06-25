@extends('layouts.main')
@section('title','Home')
@section('content')
<main>
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
                <div class="col-lg-5 aos-init aos-animate" data-aos="fade-up">
                <img class="img-fluid w-100" src="{{asset('images/undraw_Creation_process_re_74on.svg')}}" alt="">
            </div>
            </div>
        </div>
    </section>
    <section class="py-5 bg-light">
        <div class="container" style="padding-left:2.5%;">
            <div class="row mb-5">
                <div class="col mt-5">
                    <div class="mb-5">
                        <h1 class="mb-3 text-bold"><strong>About</strong></h1>
                    </div>
                </div>
                <div class="col-lg-5 aos-init aos-animate" data-aos="fade-up">
                <img class="img-fluid w-100" src="{{asset('images/undraw_Creation_process_re_74on.svg')}}" alt="">
            </div>
            </div>
        </div>
    </section>
    <section class="py-5 bg-light">
        <div class="container" style="padding-left:2.5%;">
            <div class="row">
                <div class="col mt-5">
                    <div class="mb-5">
                        <h1 class="mb-3 text-bold"><strong>Newest Post</strong></h1>
                    </div>
                </div>
                <div class="col-lg-5 aos-init aos-animate" data-aos="fade-up">
                <img class="img-fluid w-100" src="{{asset('images/undraw_Creation_process_re_74on.svg')}}" alt="">
            </div>
            </div>
        </div>
    </section>
</main>
@endsection