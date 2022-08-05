
@section('meta')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{{setting('site.description')}}">
    <meta name="author" content="Gekkode">
@endsection

@foreach($posts as $post)
    <!-- Blog Post -->
    <div class="card mb-4">
        <img class="card-img-top" src="{{Illuminate\Support\Facades\Storage::url($post['featured_image'])}}" alt="Card image cap">
        <div class="card-body">
            <h2 class="card-title">{{$post['title']}}</h2>
            <p class="card-text">{{Illuminate\Support\Str::limit(strip_tags($post['content']), 200, '...')}}</p>
            <a href="http://localhost:8000/post/{{$post['slug']}}" class="btn btn-primary" style="background-color: #8064A2 !important;border-color: #8064A2;border-radius: 5px;">En savoir plus →</a>
        </div>
        <div class="card-footer text-muted">
            Posté le {{$post->created_at->format('d/m/Y')}} par {{$post->user['name']}}
        </div>
    </div>
@endforeach

