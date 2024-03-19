<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro</title>
    @vite('resources/css/app.css')
</head>

<body class="w-full h-screen flex justify-center items-center bg-[#E5E5E5]">

    <div class="w-[30%] px-5 pt-5 pb-5 bg-white flex flex-col justify-center items-start text-center rounded-[20px]">
        <h1 class="text-[40px] font-bold">Registro de Nuevo Estudiante</h1>

        <form action="{{ route('estudiantes.create_new_user') }}" method="post" class="w-full">
            @csrf

            <div class="w-full flex flex-col justify-around items-start">
                <input type="text" name="nombre" placeholder="Nombre" class="w-full border-2 border-black px-1 py-1 mt-2" value="{{old('nombre')}}">
                @error('nombre')
                    <p class="text-red-600 font-bold text-[15px]">Nombre es Requerido</p>
                @enderror

                <div class="flex justify-center w-full mt-2">
                    <div class="flex flex-col justify-center items-start">
                        <input type="text" name="edad" placeholder="Edad" class="w-full border-2 border-black px-1 py-1 mr-1" value="{{old('edad')}}">
                        @error('edad')
                            <p class="text-red-600 font-bold text-[15px]">Edad es Requerido</p>
                        @enderror
                    </div>

                    <div class="flex flex-col justify-center items-start">
                        <input type="text" name="grado" placeholder="Grado" class="w-full border-2 border-black px-1 py-1 ml-1" value="{{old('grado')}}">
                        @error('grado')
                            <p class="text-red-600 font-bold text-[15px]">Grado es Requerido</p>
                        @enderror
                    </div>
                </div>

                <input type="text" name="email" placeholder="Correo Electrónico" class="w-full border-2 border-black px-1 py-1 mt-2" value="{{old('email')}}">
                @error('email')
                    <p class="text-red-600 font-bold text-[15px]">Email es Requerido</p>
                @enderror
            </div>

            <div class="flex flex-col mt-4">
                <button type="submit" class="w-full bg-green-500 rounded-[10px] py-2 text-white font-bold text-[20px]">Registrar</button>
                <a href="{{ route('estudiantes.home') }}" class="underline decoration-2 py-2 font-bold text-[20px]">Regresar</a>
            </div>
        </form>
    </div>

</body>

</html>
