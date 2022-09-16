@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col">
        <h1>Crear un nuevo registro de gasto</h1>
    </div>
</div>
<div class="row">
    <div class="col">
        <a href="{{ route('gastos.index') }}" class="btn btn-secondary">Atras</a>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="card border-0 shadow">
            <div class="card-body">
                @if($errors->any())
                <div class="alert-danger alert">
                    @foreach($errors->all()  as $error)
                    - {{ $error }} <br>
                    @endforeach
                </div>
                @endif
                <form action="{{ route('gastos.store') }}" method="POST">
                    <div class="form-row">
                        <div class="col-sm-3 mb-4">
                            <input type="text" name="title" class="form-control" placeholder="Titutlo" value="{{ old('title') }}">
                        </div>
                        <div class="auto">
                            @csrf
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection