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
                <div>
                    @foreach ($post->topik as $topik)
                    <a class="btn-topik" >{{$topik->topik_name}}</a>
                    @endforeach
                    {{$post->created_at->format("d, F, Y")}}
                </div>
                <div class="col-12 mb-4">
                    <article style="font-size: 1.1rem;">
                        <h3 class="fw-bold text-soft-black">{{$post->Judul}}</h3>
                        <div class="content-font" style="text-align: justify;">
                            <p><strong>{{$post->content}}</strong> </p>
                        </div>
                    </article>
                </div>
                <div class="divider"></div>
                <div>
                    <h3 class="fw-bold text-soft-black py-1">Komentar</h3> 
                    <div class="pt-3 mb-3">
                            <a href="{{ route('comment.create',$post->id) }}" class="btn btn-primary">Komentar</a>
                    </div> 
                </div>
                <div>
                    @foreach ($post->comment as $comment)
                    <div class="card mb-4">
                        <div class="card-header">
                            <div class="media d-flex flex-wrap justify-content-between align-items-center"> 
                                <div>
                                    <img src="{{asset('images/pexels-thgusstavo-santana-1933873.jpg') }}" style="clip-path: circle()" alt=""> <br>
                                    <a href="{{ route('user.index') }}">{{Auth::user()->name}}</a>
                                    <p>{{$comment->created_at->format('d, M, Y')}}</p>
                                </div>
                                <div class="text-muted small ml-3">
                                    <div>Member since <strong>{{Auth::user()->created_at->format('d, M, Y')}}</strong></div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <p>{{$comment->content}}</p>
                        </div>
                        <div class="card-footer d-flex flex-wrap justify-content-between align-items-center px-0 pt-0 pb-3">
                            <div class="px-4 pt-3"></div>
                            <div class="px-4 pt-3"> <a class="btn btn-primary">Reply</a></div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</main>
@endsection