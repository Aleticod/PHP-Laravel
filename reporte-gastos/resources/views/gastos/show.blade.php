@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col">
        <h1>Detalles de: {{ $gasto->title }}</h1>
    </div>
</div>
<div class="row">
    <div class="col">
        <a href="{{ route('gastos.index') }}" class="btn btn-secondary">Atras</a>
    </div>
</div>
<div class="row">
    <div class="col">
        <a href="{{ route('gastos.confirmarEnvioEmail', $gasto) }}" class="btn btn-primary">Enviar email</a>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="card border-0 shadow">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Descripcion</th>
                            <th>Fecha</th>
                            <th>Monto</th>
                            <th>&nbsp;</th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($gasto->detalleGastos as $detalleGasto)
                        <tr>
                            <td>
                                {{ $detalleGasto->id }}
                            </td>
                            <td>
                                {{ $detalleGasto->descripcion }}
                            </td>
                            <td>{{ $detalleGasto->created_at }}</td>
                            <td>
                                {{ $detalleGasto->costo }}
                            </td>
                            <td>
                                <form action="{{ route('detalleGastos.store', $gasto) }}" method="GET">
                                    <input type="submit" value="Editar" class="btn btn-sm btn-secondary">
                                </form>
                            </td>
                            <td>
                                <form action="{{ route('detalleGastos.store', $gasto) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <input type="submit" value="Eliminar" class="btn btn-sm btn-danger" onclick="return confirm('Desea Eliminar..?')">
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="row">
                    <div class="col">
                        <a href="{{ route('detalleGastos.create', $gasto) }}" class="btn btn-primary">Nuevo detalle</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection