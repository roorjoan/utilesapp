@extends('layout')
@section('content')
    <form class="row g-3" action="{{ route('utils.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="col-md-6">
            <label class="form-label">Nombre</label>
            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
            @error('name')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="col-6">
            <label class="form-label">URL</label>
            <input type="text" class="form-control" name="url" value="{{ old('url') }}">
            @error('url')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="col-md-6">
            <label class="form-label">Descripción</label>
            <textarea name="description" class="form-control" id="" cols="10" rows="5">{{ old('description') }}</textarea>
            @error('description')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="col-6">
            <label class="form-label">Archivo</label>
            <input type="file" class="form-control" name="file" id="file">
            @error('file')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary my-3">Guardar</button>
        </div>
    </form>
@endsection
