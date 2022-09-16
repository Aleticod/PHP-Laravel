@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col">
        <h1>Modificar registro de gasto</h1>
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
                    @foreach($errors as $error)
                    - {{ $error }} <br>
                    @endforeach
                </div>
                @endif
                <form action="{{ route('gastos.update', $gasto) }}" method="POST">
                    <div class="form-row">
                        <div class="col-sm-3 mb-4">
                            <input type="text" name="title" class="form-control" placeholder="Titutlo" value="{{ old('title', $gasto->title) }}">
                        </div>
                        <div class="auto">
                            @method('PUT')
                            @csrf
                            <button type="submit" class="btn btn-primary">Editar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection