@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Security Plans</div>

                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Fecha arranque</th>
                            <th>Fecha fin</th>
                        </tr>
                        @foreach ($security_plans as $security_plan)
                        <tr>
                            <td>{{ $security_plan->name }}</td>
                            <td>{{ $security_plan->description }}</td>
                            <td>{{ $security_plan->from }}</td>
                            <td>{{ $security_plan->to }}</td>
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