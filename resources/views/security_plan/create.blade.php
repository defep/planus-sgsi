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

                    <form method="post" action="{{ route('security-plans.store') }}">
                        <div class="form-group">
                            @csrf
                            <label for="name">Nombre:</label>
                            <input type="text" class="form-control" id="name" name="name" />
                        </div>
                        <div class="form-group">
                            <label for="description">Descripción:</label>
                            <textarea class="form-control" name="description"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="description">Desde:</label>
                            <input class="form-control" type="date" value="" name="from">
                        </div>

                        <div class="form-group">
                            <label for="description">Hasta:</label>
                            <input class="form-control" type="date" value="" name="to">
                        </div>

                        <button type="submit" class="btn btn-primary">Crear plan</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection