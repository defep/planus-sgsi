@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                        <form method="post" action="{{ route('threats.update', $threat) }}">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <label for="name">Nombre de la amenaza:</label>
                            <input type="text" class="form-control" name="name" value="{{$threat->name}}" />
                            </div>

                            <div class="form-group">
                                <label for="price">Descripción:</label>
                                <textarea class="form-control" name="description">{{$threat->description}}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection