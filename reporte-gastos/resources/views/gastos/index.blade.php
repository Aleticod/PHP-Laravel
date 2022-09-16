@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col">
        <h1>Reporte de gastos</h1>
    </div>
</div>
<div class="row">
    <div class="col">
        <a href="{{ route('gastos.create') }}" class="btn btn-primary">Nuevo reporte</a>
    </div>
</div>
<div>
    <div class="card border-0 shadow">
        <div class="card-body">
            @if($errors->any())
            <div class="alert-danger alert">
                @foreach($errors->all() as $error)
                - {{ $error }} <br>
                @endforeach
            </div>
            @endif
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Titulo</th>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($gastos as $gasto)
                    <tr>
                        <td>
                            {{ $gasto->id }}
                        </td>
                        <td>
                            <a href="{{ route('gastos.show', $gasto) }}">
                                {{ $gasto->title }}
                            </a>    
                        </td>
                        <td>
                            <form action="{{ route('gastos.edit', $gasto) }}" method="GET">
                                <input type="submit" value="Editar" class="btn btn-sm btn-secondary">
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('gastos.destroy', $gasto) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <input type="submit" value="Eliminar" class="btn btn-sm btn-danger" onclick="return confirm('Desea Eliminar..?')">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection