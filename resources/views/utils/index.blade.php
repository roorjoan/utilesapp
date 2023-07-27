@extends('layout')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/jquery.dataTables.min.css') }}">
@endsection
@section('content')
    <a class="btn btn-primary btn-sm my-3" href="{{ route('utils.create') }}">Guardar</a>
    <table class="table" id="myDataTable">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Archivo</th>
                <th scope="col">URL</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($utils as $util)
                <tr>
                    <td>{{ $util->name }}</td>
                    <td>{{ $util->description }}</td>
                    <td><a href="{{ $util->file }}" download>Descargar</a></td>
                    <td><a href="{{ $util->url }}" target="blank">{{ $util->url }}</a></td>
                    <td class="d-flex">
                        <a class="btn btn-info btn-sm" style="margin-right: 2px;" href="{{ route('utils.show', $util) }}">
                            @include('icons.eye')
                        </a>
                        <form action="{{ route('utils.destroy', $util) }}" method="post">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick='return confirm("Estas seguro de que quieres borrar {{ $util->name }}?");'>
                                @include('icons.trash')
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
@section('scripts')
    <script src="{{ asset('js/jqueryv3.6.1.min.js') }}"></script>
    <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
@endsection
