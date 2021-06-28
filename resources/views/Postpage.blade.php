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
                        <a href="/post/create">Buat Posting Sekarang</a>
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
                @foreach ($posts as $post)
                <div class="col-6 mb-3">
                    <div class="card post-card" style="width:auto;">
                        <img src="{{ asset('images/pexels-cottonbro-4709285.jpg') }}" class="" alt="...">
                        <div class="card-body badan-card">
                            <div class="card-topik mb-3">
                                <a href="/" class="btn-sm btn-topik"> Kopi</a>
                                <a href="/" class="btn-sm btn-topik"> Komputer</a>
                            </div>
                            <h5 class="card-title">{{$post->Judul}}</h5>
                            <p class="card-text">{{$post->content}}</p>
                            <a href="{{ route('posts.show',$post->id) }}" class="card-link">Read More</a>
                            <a href="{{route('posts.edit', $post->id)}}" class="card-link">edit</a>
                            <form action="{{ route('posts.delete',$post->id) }}" method="POST" class="d-inline">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</main>
@endsection