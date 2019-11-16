@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Crear amenaza</div>
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

                    <form method="post" action="{{ route('threats.store') }}">
                        <div class="form-group">
                            @csrf
                            <label for="name">Nombre de la amenaza:</label>
                            <input type="text" class="form-control" name="name" />
                        </div>

                        <div class="form-group">
                            <label for="price">Descripción:</label>
                            <textarea class="form-control" name="description"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="price">Observaciones:</label>
                            <textarea class="form-control" name="observation"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="price">Tipos de activos amenazados:</label>
                            <select multiple name="asset_types[]" class="form-control">
                                @foreach($asset_types as $type)
                                <option value="{{ $type->id }}">{{ $type->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                        <label for="price">Dimensiones de seguridad afectadas de más a menos importante:</label>
                            <br/>
                            1. <select class="form-control" name="">
                                <option value="">Seleccione</option>
                                <option value="D">[D] Disponibilidad</option>
                                <option value="I">[I] Integridad</option>
                                <option value="C">[C] Confidencialidad</option>
                            </select>

                            <br/>

                            2. <select class="form-control" name="">
                                <option value="">N/A</option>
                                <option value="D">[D] Disponibilidad</option>
                                <option value="I">[I] Integridad</option>
                                <option value="C">[C] Confidencialidad</option>
                            </select>

                            <br/>

                            3. <select class="form-control" name="">
                                <option value="">N/A</option>
                                <option value="D">[D] Disponibilidad</option>
                                <option value="I">[I] Integridad</option>
                                <option value="C">[C] Confidencialidad</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Crear amenaza</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection