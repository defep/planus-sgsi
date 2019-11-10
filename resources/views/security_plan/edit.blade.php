@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Security Plans</div>

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

                    <form method="post" action="{{ route('security-plans.update', $security_plan) }}">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="name">Nombre:</label>
                            <input type="text" class="form-control" name="name" value="{{ $security_plan->name }}" />
                        </div>

                        <div class="form-group">
                            <label for="price">Descripción:</label>
                            <textarea class="form-control" name="description">{{ $security_plan->description }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="price">Observaciones:</label>
                            <textarea class="form-control" name="observation">{{ $security_plan->observation }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection