<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Empleados</title>
</head>
<body>
    <h1>Listado de Empleados</h1>
    <a href="{{ route('empleados.create') }}">Crear Nuevo Empleado</a>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Teléfono</th>
                <th>Número de Hijos</th>
                <th>NIF</th>
                <th>Habilidades</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($empleados as $empleado)
            <tr>
                <td>{{ $empleado->nombre }}</td>
                <td>{{ $empleado->tfno }}</td>
                <td>{{ $empleado->num_hijos }}</td>
                <td>{{ $empleado->NIF }}</td>
                <td>
                    @foreach($empleado->habilidades as $habilidad)
                        {{ $habilidad->desc }}<br>
                    @endforeach
                </td>
                <td>
                    <a href="{{ route('empleados.show', $empleado->id) }}">Ver</a>
                    <a href="{{ route('empleados.edit', $empleado->id) }}">Editar</a>
                    <form action="{{ route('empleados.destroy', $empleado->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
