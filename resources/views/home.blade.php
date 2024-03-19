<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    @vite('resources/css/app.css')
</head>

<body class="w-full h-full flex justify-center items-start bg-[#E5E5E5]">

    <div class="w-[80%] px-5 pt-5 pb-10 bg-white">

        <form action="{{ route('estudiante.readingUserSearch') }}" method="GET" class="w-full flex justify-between items-center py-3">
            @csrf

            <div class="">
                <input type="number" placeholder="Buscar ID Estudiante" name="busqueda" class="border-2 border-black rounded-[5px] px-1">
                <button type="submit" class="border-2 border-black px-4 rounded-[5px]">Buscar</button>
            </div>

            <div>
                <a href="{{ route('estudiantes.register') }}" class="text-green-800 font-bold hover:underline hover:decoration-2 px-2">Crear Nuevo Estudiante</a>
                <a href="{{ route('estudiante.readingDeletedUsers') }}" class="text-red-600 font-bold hover:underline hover:decoration-2 px-2">Eliminados</a>
            </div>
        </form>


        <div class="flex justify-center items-start">
            <table class="w-full">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Edad</th>
                        <th>Grado</th>
                        <th>Correo Electronico</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($estudiantes as $estudiante)
                        @if ($estudiante->estado === 'A')
                            <tr class="text-center hover:bg-gray-200">
                                <td>{{ $estudiante->id }}</td>
                                <td>{{ $estudiante->nombre }}</td>
                                <td>{{ $estudiante->edad }}</td>
                                <td>{{ $estudiante->grado }}</td>
                                <td>{{ $estudiante->email }}</td>
                                <td class="flex justify-around">
                                    <a href="{{ route('estudiantes.viewUpdateUser', $estudiante) }}" class="text-blue-600 font-semibold hover:underline hover:decoration-2">Editar</a>
                                    <form action="{{ route('estudiante.deleteUser', $estudiante->id) }}" method="POST">
                                        @csrf
                                        @method('put')
                                        <button type="submit" class="text-red-600 font-semibold hover:underline hover:decoration-2">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>

</body>

</html>
