
<div class="row">
    <div class="col">
        <h1>Resumen: {{ $gasto->title }}</h1>
    </div>
</div>
<div>
    <div class="card border-0 shadow">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Descripcion</th>
                        <th>Costo</th>
                        <th>Fecha</th>
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
                        <td>
                            {{ $detalleGasto->costo }}
                        </td>
                        <td>
                            {{ $detalleGasto->created_at }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>