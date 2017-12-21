@extends('admin.template.main')

@section('title', 'Listado de categorias')

@section('content')
    <a href="{{ route('admin.categories.create') }}" class="btn btn-info">Crear nuevo categoria</a><hr />
    <table class="table table-striped">
        <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th>Acción</th>
        </thead>
        <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->email }}</td>
                    <td>
                        <a href="{{ route('admin.categories.destroy', $category->id) }}" onclick="return confirm('¿Seguro que desea eliminarlo?')" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash" aria-hidden="true"></a>
                        <a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {!! $categories->render() !!}
@endsection