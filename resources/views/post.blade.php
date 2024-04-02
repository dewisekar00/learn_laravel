
@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 my-5">
        <img src="https:/source.unsplash.com/1200x400?{{ $post->category->name}}" class="card-img-top img-fluid" alt="{{ $post->category->name}}">

        <h1>{{ $post->title }}</h1>
<h5>By <a href="/authors/{{$post->author->username}}">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug}}">{{ $post->category->name }}</a></h5>
<article class="fs-5 my-3" >
{!! $post->body !!}
</article>
<a href="/blog">back</a>
        </div>
    </div>
</div>


@endsection