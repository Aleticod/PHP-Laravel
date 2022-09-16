@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col">
        <h1>Crear detalles de gasto: {{ $gasto->title }}</h1>
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
                    @foreach($errors->all()  as $error)
                    - {{ $error }} <br>
                    @endforeach
                </div>
                @endif
                <form action="{{ route('detalleGastos.store', $gasto) }}" method="POST">
                    <div class="form-row">
                        <div class="col-sm-3 mb-4">
                            <label for="">Descripcion</label>
                            <textarea name="descripcion" rows="10" class="form-control">
                            </textarea>
                        </div>
                        <div class="col-sm-3 mb-3">
                            <input type="text" name="costo" class="form-control" placeholder="Costo" value="{{ old('costo') }}">
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