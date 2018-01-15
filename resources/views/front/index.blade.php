@extends('front.template.main')

@section('content')
    @foreach($articles as $article)
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                @foreach($article->images as $image)
                    <img src="{{ asset('images/articles/' . $image->name) }}" alt="...">
                @endforeach
                <div class="caption">
                    <h3>{{ $article->title }}</h3>
                    <p><a class="label label-info" href="{{ route('front.search.category', $article->category->name) }}">{{ $article->category->name }}</a></p>
                    <p class="text-right"><span class="badge">{{ $article->created_at->diffForHumans() }}</span></p>
                </div>
            </div>
        </div>
    @endforeach
    <div>
        {!! $articles->render() !!}
    </div>
@endsection