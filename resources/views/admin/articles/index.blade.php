@extends('admin.template.main')

@section('title', 'Listado de articulos')

@section('content')
    <a href="{{ route('admin.articles.create') }}" class="btn btn-info">Crear nuevo articulo</a><hr />
    <table class="table table-striped">
        <thead>
            <th>ID</th>
            <th>Titulo</th>
            <th>Acción</th>
        </thead>
        <tbody>
            @foreach($articles as $article)
                <tr>
                    <td>{{ $article->id }}</td>
                    <td>{{ $article->title }}</td>
                    <td>
                        <a href="#" onclick="return confirm('¿Seguro que desea eliminarlo?')" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash" aria-hidden="true"></a>
                        <a href="#" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {!! $articles->render() !!}
@endsection