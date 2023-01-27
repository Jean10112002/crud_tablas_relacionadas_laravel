@extends('layout')
@section('contenido')
    <div class="row">
        <div class="col-12 col-md-6 mx-auto">
            <form action="{{route('categoria.store')}}" method="POST">
                @csrf
                @method("POST")
                <div class="mb-3">
                    <label for="categoria" class="form-label">Nombre categoria</label>
                    <input type="text" class="form-control" id="categoria" name="nombre">
                </div>
                @error('nombre')
                <p class="text-danger">{{ $message }}</p>
            @enderror
                <button type="submit" class="btn btn-primary">Crear</button>
            </form>
        </div>
    </div>
@endsection
