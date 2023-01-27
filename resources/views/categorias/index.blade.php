@extends('layout')
@section('contenido')
    <a href="{{ route('categoria.create') }}" class="btn btn-outline-info">Crear categoria</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#id</th>
                <th scope="col">nombre</th>
                <th scope="col">acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categorias as $c)
                <tr>
                    <th scope="row"> {{ $c->id }} </th>
                    <td> {{ $c->nombre }} </td>
                    <td>
                        <a href="{{route('categoria.edit',$c->id)}}" class="btn btn-outline-primary">Editar</a>
                        <form action="{{route('categoria.destroy',$c->id)}}" method="POST">
                            @method("DELETE")
                            @csrf
                            <button type="submit" class="btn btn-outline-danger">eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
