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
                            <th>Assets affected</th>
                            <th></th>
                        </tr>
                        @foreach ($threats as $threat)
                        <tr>
                            <td>{{ $threat->name }}</td>
                            <td>{{ $threat->description }}</td>
                            <td>
                                @foreach ($threat->asset_types as $asset_type)
                                    {{$asset_type->name}}
                                @endforeach
                            </td>
                            <td><a href="{{ route('threats.edit',$threat->id) }}" class="btn btn-sm btn-primary">Editar</a></td>
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