@extends('layouts.main')
@section('title','edit')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Edit Post</h1>
            <form action="{{ route('posts.edit', $post->id) }}" method="POST" {{--enctype="multipart/form-data" --}}>
                @method('patch')
                @csrf
                <input type="hidden" name="pengguna_id" value="4"> {{-- perlu dikerjakan--}}
                {{-- <input type="hidden" name="topik_id" value="4"> --}}
                {{-- <input type="hidden" name="comment_id" value="4"> --}}
                {{-- <input type="hidden" name="picture" value="4"> --}}
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control" id="nama" placeholder="Judul" name="Judul" value="{{$post->Judul}}">
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <input type="text" class="form-control" id="nim" placeholder="Content" name="content" value="{{$post->content}}">
                </div>
                {{--<div class="form-group">
                    <label for="picture">Gambar</label>
                    <input type="file" name="picture" id="gambar">
                </div>--}}
                <button type="submit" class="btn btn-primary">Edit</button>
            </form>
        </div>
    </div>
</div>
@endsection