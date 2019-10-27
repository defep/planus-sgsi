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
                            <th>Tipo</th>
                            <th>Creación</th>
                            <th>Modificación</th>
                            <th></th>
                            <th></th>
                        </tr>
                        @foreach ($assets as $asset)
                        <tr>
                            <td>{{ $asset->name }}</td>
                            <td>{{ $asset->description }}</td>
                            <td>{{ $asset->type()->first()->name }}</td>
                            <td>{{ $asset->created_at }}</td>
                            <td>{{ $asset->updated_at }}</td>
                            <td><a href="{{ route('assets.edit',$asset->id) }}" class="btn btn-sm btn-primary">Editar</a></td>
                            <td>
                                <form action="{{ route('assets.destroy', $asset->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger" type="submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>

                    <a href="{{ url('assets/create') }}" class="btn btn-primary">Crear</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection