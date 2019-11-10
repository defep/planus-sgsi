@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Planes de seguridad activos</div>
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <td>Nombre</td>
                            <td>Descripción</td>
                            <td>Fecha inicio</td>
                            <td>Fecha fin</td>
                        </tr>
                        @foreach ($plans as $plan)
                        <tr>
                            <td>{{$plan->name}}</td>
                            <td>{{$plan->description}}</td>
                            <td>{{$plan->from}}</td>
                            <td>{{$plan->to}}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
