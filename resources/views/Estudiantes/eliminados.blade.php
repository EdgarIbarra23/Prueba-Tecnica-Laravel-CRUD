<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Estudiantes Eliminados</title>
    @vite('resources/css/app.css')
</head>

<body class="w-full h-full flex justify-center items-start bg-[#E5E5E5]">
    <div class="w-[80%] px-5 pt-5 pb-10 bg-white">

        <div class="flex justify-between items-center">
            <h1 class="text-[40px] font-bold">Estudiante Eliminados</h1>

            <a href="{{ route('estudiantes.home') }}" class="hover:underline hover:decoration-2 font-semibold text-[20px] px-6">Regresar</a>
        </div>

        <div class="flex justify-center items-start pt-6">
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
                        @if ($estudiante->estado === 'E')
                            <tr class="text-center hover:bg-gray-200">
                                <td>{{ $estudiante->id }}</td>
                                <td>{{ $estudiante->nombre }}</td>
                                <td>{{ $estudiante->edad }}</td>
                                <td>{{ $estudiante->grado }}</td>
                                <td>{{ $estudiante->email }}</td>
                                <td>
                                    <form action="{{ route('estudiante.restoreDeletedUser', $estudiante->id) }}"
                                        method="POST">
                                        @csrf
                                        @method('put')
                                        <button type="submit" class="text-blue-600 font-semibold hover:underline hover:decoration-2">Restaurar</button>
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
