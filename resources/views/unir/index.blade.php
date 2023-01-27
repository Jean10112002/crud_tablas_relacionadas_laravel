@extends('layout')
@section('contenido')
    @forelse ($categoria as $c)
        <h1 class="text-center text-danger">Categoria: {{ $c->nombre }} </h1>
        <div class="card shadow w-50 mx-auto my-5">
            <div class="card-body">
                <table class="table ">
                    <thead>
                        <th>Nombre producto</th>
                        <th>descripcion producto</th>
                    </thead>
                    <tbody>
                        @forelse ($c->productos as $p)
                            <tr>
                                <td> {{ $p->nombre }} </td>
                                <td> {{ $p->descripcion }} </td>
                            </tr>
                        @empty
                            <tr>
                                <td> no hay datos </td>
                                <td> no hay datos </td>
                            </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    @empty
        <h1 class="text-center text-danger"> No existen categorias</h1>
    @endforelse
    {{-- @foreach ($categoria as $c)
        <h1 class="text-center text-danger">Categoria: {{ $c->nombre }} </h1>
        <div class="card shadow w-50 mx-auto my-5">
            <div class="card-body">
                <table class="table ">
                    <thead>
                        <th>Nombre producto</th>
                        <th>descripcion producto</th>
                    </thead>
                    <tbody>
                        @foreach ($c->productos as $p)
                            <tr>
                                <td> {{ $p->nombre }} </td>
                                <td> {{ $p->descripcion }} </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    @endforeach --}}
@endsection
