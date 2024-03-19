<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Busqueda Estudiante</title>
    @vite('resources/css/app.css')
</head>

<body class="w-full h-screen flex justify-center items-center bg-[#E5E5E5]">
    <div class="w-[40%] px-5 pt-5 pb-5 bg-white flex flex-col justify-center items-start text-center rounded-[20px]">

        <form action="{{ route('estudiante.readingUserSearch') }}" method="GET"
            class="w-full flex justify-between items-center">
            @csrf
            <div class="">
                <input type="number" placeholder="Buscar ID Estudiante" name="busqueda"
                    class="border-2 border-black rounded-[5px] px-1">
                <button type="submit" class="border-2 border-black px-4 rounded-[5px]">Buscar</button>
            </div>

            <a href="{{ route('estudiantes.home') }}"
                class="hover:underline hover:decoration-2 font-semibold text-[20px] px-6">Regresar</a>
        </form>

        @if ($estudiante->estado === 'E')
            <h1 class="w-full text-center pt-4 font-bold text-[25px]">Este Registro Fue Eliminado</h1>
        @else
            <h1 class="w-full text-center pt-4 font-bold text-[28px]">La Información del Estudiante Seleccionado</h1>
            <div class="w-full flex flex-col justify-start items-center py-3">
                <h3 class="text-[18px] py-1 font-semibold">Nombre: {{ $estudiante->nombre }} </h3>
                <h3 class="text-[18px] py-1 font-semibold">Edad: {{ $estudiante->edad }}</h3>
                <h3 class="text-[18px] py-1 font-semibold">Grado: {{ $estudiante->grado }}</h3>
                <h3 class="text-[18px] py-1 font-semibold">Email: {{ $estudiante->email }}</h3>
            </div>
        @endif
    </div>
</body>

</html>
