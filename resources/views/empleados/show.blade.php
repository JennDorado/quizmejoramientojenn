<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle del Empleado</title>
</head>
<body>
    <h1>Detalle del Empleado</h1>
    <p>Nombre: {{ $empleado->nombre }}</p>
    <p>Teléfono: {{ $empleado->tfno }}</p>
    <p>Número de Hijos: {{ $empleado->num_hijos }}</p>
    <p>NIF: {{ $empleado->NIF }}</p>
    <p>Habilidades:</p>
    <ul>
        @foreach($empleado->habilidades as $habilidad)
            <li>{{ $habilidad->desc }}</li>
        @endforeach
    </ul>
    <a href="{{ route('empleados.index') }}">Volver al listado</a>
</body>
</html>
