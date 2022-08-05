@extends('master')

@section('meta')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{{setting('site.description')}}">
    <meta name="author" content="Gekkode">
@endsection

@section('title')
    <title>{{ setting('site.title') }}</title>
@endsection

@section('content')
    <div class="row">
        <!-- Blog Entries Column -->
        <div class="col-md-8">

            <h1 class="my-4">
                <small class="text-muted text-center">Liste des Articles</small>
            </h1>

            @include('_partials.posts-list')

        </div>
        @include('_partials.sidebar')

    </div>

<!-- Articles similaire -->
<h3>Articles similaire</h3>

<div class="row">
    @foreach($featured_posts as $post)
        <div class="col-md-4">
            <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="{{Illuminate\Support\Facades\Storage::url($post['featured_image'])}}">
                <div class="card-body">
                    <p class="card-text">{{Illuminate\Support\Str::limit(strip_tags($post['content']), 100, '...')}}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a href="http://localhost:8000/post/{{$post['slug']}}" class="btn btn-sm btn-outline-secondary">En savoir →</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endforeach

@endsection

