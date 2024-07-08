<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Empleado</title>
</head>
<body>
    <h1>Editar Empleado</h1>
    <form action="{{ route('empleados.update', $empleado->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" value="{{ $empleado->nombre }}" required>
        <br>
        <label for="tfno">Teléfono:</label>
        <input type="text" name="tfno" id="tfno" value="{{ $empleado->tfno }}" required>
        <br>
        <label for="num_hijos">Número de Hijos:</label>
        <input type="text" name="num_hijos" id="num_hijos" value="{{ $empleado->num_hijos }}" required>
        <br>
        <label for="NIF">NIF:</label>
        <input type="text" name="NIF" id="NIF" value="{{ $empleado->NIF }}" required>
        <br>
        label for="departamento_id">Departamento:</label>
         <select name="departamento_id" id="departaemnto_id">
        <option value="">Seleccione un depatrtamento</option>
        @foreach ($departamentos as $departamento)
            <option value="{{ $departamento->id }}">{{ $deparatamento->codigo }}</option>
        @endforeach
        </select>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>
