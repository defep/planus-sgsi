@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br />
                    @endif

                    <form method="post" action="{{ route('assets.store') }}">
                        <div class="form-group">
                            @csrf
                            <label for="name">Nombre del activo:</label>
                            <input type="text" class="form-control" name="name" />
                        </div>
                        <div class="form-group">
                            <label for="price">Descripción:</label>
                            <textarea class="form-control" name="description"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="price">Tipo:</label>
                            <select class="form-control" name="asset_type_id">
                            @foreach($types as $type)
                            <option value="{{ $type->id }}">{{ $type->name }}</option>
                            @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="price">Dimensiones de seguridad afectadas:</label>
                            <select class="form-control" name="">
                                <option>Disponibilidad</option>
                                <option>Disponibilidad (Baja)</option>
                                <option>Disponibilidad (Media)</option>
                                <option>Disponibilidad (Alta)</option>
                            </select>

                            <br/>

                            <select class="form-control" name="">
                                <option>Integridad</option>
                                <option>Integridad (Baja)</option>
                                <option>Integridad (Media)</option>
                                <option>Integridad (Alta)</option>
                            </select>

                            <br/>

                            <select class="form-control" name="">
                                <option>Confidencialidad</option>
                                <option>Confidencialidad (Baja)</option>
                                <option>Confidencialidad (Media)</option>
                                <option>Confidencialidad (Alta)</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Crear activo</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection