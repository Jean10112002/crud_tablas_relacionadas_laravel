@extends('layout')
@section('contenido')
    <a href="{{ route('producto.create') }}" class="btn btn-outline-info">Crear Producto</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#id</th>
                <th scope="col">nombre</th>
                <th scope="col">descripcion</th>
                <th scope="col">categoria</th>
                <th scope="col">acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $p)
                <tr>
                    <th scope="row"> {{ $p->id }} </th>
                    <td> {{ $p->nombre }} </td>
                    <td> {{ $p->descripcion }} </td>
                     <td> {{$p->categoria->nombre}} </td>
                    <td>
                        <a href="{{route('producto.edit',$p->id)}}" class="btn btn-outline-primary">Editar</a>
                        <form action="{{route('producto.destroy',$p->id)}}" method="POST">
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
