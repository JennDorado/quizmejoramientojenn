<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Empleado</title>
</head>
<body>
    <h1>Crear Empleado</h1>
    <form action="{{ route('empleados.store') }}" method="POST">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required>
        <br>
        <label for="tfno">Teléfono:</label>
        <input type="text" name="tfno" id="tfno" required>
        <br>
        <label for="num_hijos">Número de Hijos:</label>
        <input type="text" name="num_hijos" id="num_hijos" required>
        <br>
        <label for="NIF">NIF:</label>
        <input type="text" name="NIF" id="NIF" required>

        <label for="departamento_id">Departamento:</label>
        <select name="departamento_id" id="departamento_id">
        <option value="">Seleccione un depatrtamento</option>
        @foreach ($departamentos as $departamento)
            <option value="{{ $departamento->id }}">{{ $departamento->codigo }}</option>
        @endforeach
        </select>

        <br>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>
