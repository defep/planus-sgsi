@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Security Plans</div>

                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Fecha arranque</th>
                            <th>Fecha fin</th>
                            <th>Opciones</th>
                        </tr>
                        @foreach ($plans as $plan)
                        <tr>
                            <td>{{ $plan->name }}</td>
                            <td>{{ $plan->description }}</td>
                            <td>{{ $plan->from }}</td>
                            <td>{{ $plan->to }}</td>
                            <td>
                                <a href="{{ route('security-plans.edit',$plan->id) }}" class="btn btn-sm btn-primary">Editar</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>

                    <a href="{{ url('security-plans/create') }}" class="btn btn-primary">Crear</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection