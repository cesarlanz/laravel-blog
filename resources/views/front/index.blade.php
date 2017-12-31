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
                    <p><span class="label label-info">{{ $article->category->name }}</span></p>
                    <p class="text-right"><span class="badge">hace 3 minutos</span></p>
                </div>
            </div>
        </div>
    @endforeach
    <div>
        {!! $articles->render() !!}
    </div>
@endsection