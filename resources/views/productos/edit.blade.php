@extends('layout')
@section('contenido')
    <div class="row">
        <div class="col-12 col-md-6 mx-auto">
            <form action="{{ route('producto.update', $producto->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="categoria" class="form-label">Nombre producto</label>
                    <input value=" {{ $producto->nombre }} " type="text" class="form-control" id="categoria" name="nombre">
                </div>
                @error('nombre')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <div class="mb-3">
                    <label for="categoria" class="form-label">descripcion producto</label>
                    <input value=" {{ $producto->descripcion }} " type="text" class="form-control" id="categoria"
                        name="descripcion">
                </div>
                @error('descripcion')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <div class="mb-3">
                    <label for="categoria" class="form-label">categoria producto</label>
                    <select name="categoria_id" value="{{ $producto->categoria->nombre }}">
                        @foreach ($categorias as $c)
                            <option value="{{ $c->id }}"> {{ $c->nombre }} </option>
                        @endforeach
                    </select>
                    @error('categoria_id')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Editar</button>
            </form>
        </div>
    </div>
@endsection
