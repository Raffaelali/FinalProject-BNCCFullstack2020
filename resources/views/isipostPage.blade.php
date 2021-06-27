@extends('layouts/main')
@section('title','namaPost')
@section('content')
<main class="bg-light">
    <section>
        <div class="container wajah-postingan">
            <img class="img-fluid w-100" src="{{ asset('images/pexels-cottonbro-4709285.jpg') }}" alt="">
        </div>
        <div class="container isi-postingan">
            <div class="bg-white py-lg-5 py-3 px-lg-5 px-3">
                <div class="col-12 mb-4">
                    <article style="font-size: 1.1rem;">
                        <h3 class="fw-bold text-soft-black">Mengenal Bahasa Pemrograman Kotlin</h3>
                        <div class="content-font" style="text-align: justify;">
                            <p><strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ut pharetra odio. In ut odio id enim viverra dictum. Aenean lorem massa, scelerisque vel purus in, porta hendrerit ipsum. Phasellus congue vitae augue quis laoreet. Nam sit amet justo in massa euismod sodales. Quisque volutpat libero sed magna venenatis, non consectetur mauris auctor. Nam vel viverra est. Donec convallis purus in sem tempus, vulputate ultrices dui gravida. Duis bibendum, lectus sodales sollicitudin mollis, odio massa auctor neque, nec rutrum risus massa et elit. Vivamus eu lectus lacus. Etiam molestie nec ex vitae suscipit. Nulla aliquam leo elit, vitae volutpat est ullamcorper at. Mauris ac enim non orci suscipit semper. Phasellus congue ex interdum orci efficitur, eget tincidunt elit accumsan. Sed nisi nisi, scelerisque vitae ex vitae, fringilla faucibus neque. Cras euismod elementum arcu id maximus.
                            Duis lacinia nulla sed purus vestibulum volutpat rutrum non libero. Interdum et malesuada fames ac ante ipsum primis in faucibus. Maecenas porta fermentum arcu, sit amet venenatis ipsum feugiat nec. Aliquam ut quam vitae erat faucibus ullamcorper. Aenean in lacus risus. Praesent eget erat at leo bibendum eleifend. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec posuere elit vitae ipsum bibendum varius. Curabitur at nisl semper, pharetra nisi sed, convallis turpis.
                            Sed eu ipsum sit amet neque pharetra tincidunt. Pellentesque tincidunt enim eu urna varius imperdiet. Nam sem turpis, rutrum id viverra vel, ultricies sed purus. Ut et neque eu dui porta lobortis sed hendrerit lacus. Integer ac justo lobortis justo malesuada pharetra vel at risus. Morbi finibus, tellus at lacinia rutrum, massa leo imperdiet sapien, et blandit est lacus non lacus. Pellentesque bibendum nisl ac diam pretium tristique. Praesent vestibulum felis eget sem placerat facilisis. Maecenas vestibulum vel neque vitae feugiat. Vestibulum fermentum massa id nulla rhoncus, eu semper mi euismod. Nulla lacinia suscipit pharetra. </strong> </p>
                        </div>
                    </article>
                </div>
                <div class="divider"></div>
                <div>
                    <h3 class="fw-bold text-soft-black py-1">Komentar</h3> 
                    <div class="pt-3 mb-3"> <a class="btn btn-primary">Komentar</a></div> 
                </div>
                <div>
                    <div class="card mb-4">
                        <div class="card-header">
                            <div class="media d-flex flex-wrap justify-content-between align-items-center"> 
                                <div>
                                    <img src="{{ asset('images/pexels-thgusstavo-santana-1933873.jpg') }}" style="clip-path: circle()" alt=""> <br>
                                    <a href="">Tom Harry</a>
                                    <p> 13 days ago </p>
                                </div>
                                <div class="text-muted small ml-3">
                                    <div>Member since <strong>01/1/2019</strong></div>
                                    <div><strong>134</strong> posts</div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <p> For me, getting my business website made was a lot of tech wizardry things. Thankfully i get an ad on Facebook ragarding commence website. I get connected with BBB team. They made my stunning website live in just 3 days. With the increase demand of online customers. I had to take my business online. BBB Team guided me at each step and enabled me to centralise my work and have control on all aspect of my online business. </p>
                            <p> For me, getting my business website made was a lot of tech wizardry things. Thankfully i get an ad on Facebook ragarding commence website. I get connected with BBB team. They made my stunning website live in just 3 days. With the increase demand of online customers. I had to take my business online. BBB Team guided me at each step and enabled me to centralise my work and have control on all aspect of my online business. </p>
                        </div>
                        <div class="card-footer d-flex flex-wrap justify-content-between align-items-center px-0 pt-0 pb-3">
                            <div class="px-4 pt-3"></div>
                            <div class="px-4 pt-3"> <a class="btn btn-primary">Reply</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection