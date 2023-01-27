@extends('layout')
@section('contenido')
    <div class="row">
        <div class="col-12 col-md-6 mx-auto">
            <form action="{{ route('producto.store') }}" method="POST">
                @csrf
                @method('POST')
                <div class="mb-3">
                    <label for="categoria" class="form-label">Nombre producto</label>
                    <input value="{{ old('nombre') }}" type="text" class="form-control" id="categoria" name="nombre">
                    @error('nombre')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="categoria" class="form-label">descripcion producto</label>
                    <input value="{{ old('descripcion') }}" type="text" class="form-control" id="categoria"
                        name="descripcion">
                    @error('descripcion')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="categoria" class="form-label">categoria producto</label>
                    <select name="categoria_id">
                        @foreach ($categorias as $c)
                            <option value="{{ $c->id }}"> {{ $c->nombre }} </option>
                        @endforeach
                    </select>
                    @error('categoria_id')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Crear</button>
            </form>
        </div>
    </div>
@endsection
