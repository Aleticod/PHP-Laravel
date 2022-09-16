@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col">
        <h1>Confirmar envio de email</h1>
    </div>
</div>
<div class="row">
    <div class="col">
        <a href="{{ route('gastos.show', $gasto) }}" class="btn btn-secondary">Atras</a>
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
                <form action="{{ route('gastos.enviarEmail', $gasto) }}" method="POST">
                    <div class="form-row">
                        <div class="col-sm-3 mb-4">
                            <input type="text" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
                        </div>
                        <div class="auto">
                            @csrf
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection