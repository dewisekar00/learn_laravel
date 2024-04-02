@extends('layouts.main')

@section('container')

<h1 class="fs-3 mx-5">{{ $title }}</h1>
@if ($posts->count())
<div class="card mb-3 mx-5">
  <img src="https:/source.unsplash.com/1200x400?{{ $posts[0]->category->name}}" class="card-img-top" alt="{{ $posts[0]->category->name}}">
  <div class="card-body ">
    <h5 class="card-title">{{ $posts[0]->title }}</h5>
    <small class="text-muted">
    <h5>By <a href="/authors/{{ $posts[0]->author->username}}">{{ $posts[0]->author->username }}</a> in <a href="/categories/{{ $posts[0]->category->slug}}">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}</h5>
    </small>
    <p class="card-text"> {{ $posts[0]->excerpt}}</p>
<a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">read more</a>
  </div>
</div>
@else
<p class="text-center"> No post found </p>
@endif
<div class="container">
  <div class="row">
  @foreach ($posts->skip(1) as $post)

    <div class="col-md-4">
    <div class="card">
  <img src="https:/source.unsplash.com/400x300?{{ $post->category->name}}" class="card-img-top" alt="{{ $posts[0]->category->name}}">
  <div class="card-body">
    <h5 class="card-title">{{ $post->title}}</h5>
    <h5 class="card-title">{{ $posts[0]->title }}</h5>
    <small class="text-muted">
    <h5>By <a href="/authors/{{ $posts[0]->author->username}}">{{ $post->author->username }}</a> {{ $post->created_at->diffForHumans() }} in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></h5>
    </small>
    <p class="card-text"> {{ $post->excerpt}}</p>
    <a href="/posts/{{ $post->slug }}" class="btn btn-primary">read more</a>
  </div>
</div>
    </div>
    @endforeach
  </div>
</div>


@endsection


