@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Creación</th>
                            <th>Modificación</th>
                        </tr>
                        @foreach ($threats as $asset)
                        <tr>
                            <td>{{ $asset->name }}</td>
                            <td>{{ $asset->description }}</td>
                            <td>{{ $asset->created_at }}</td>
                            <td>{{ $asset->updated_at }}</td>
                        </tr>
                        @endforeach
                    </table>

                    <a href="{{ url('threats/create') }}" class="btn btn-primary">Crear</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection