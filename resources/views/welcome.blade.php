<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    @vite('resources/css/app.css')
</head>

<body>
    <div class="w-screen h-screen flex flex-col items-center">
        <header class="w-full h-24 flex justify-between items-center px-5">
            <h3 class="font-semibold text-zinc-600">Agregar Usuarios</h3>
            <a href="{{ route('list') }}" class="bg-blue-800 text-white rounded-md p-2 px-4"> Volver al Listado</a>
        </header>

        <form class="w-[70%] h-[500px] mt-20" method="POST" action="{{ route('crear_usuario') }}">
            @csrf <!-- Agrega el token CSRF para la protección contra ataques CSRF -->

            <div class="w-full flex">
                <div class="w-[50%] flex flex-col gap-2">
                    <span class="text-zinc-500 font-semibold">Nombre</span>
                    <input class="border border-zinc-400  h-10 px-2 w-[90%]" type="text"
                        placeholder="Ingrese el nombre" name="nombre">
                </div>
                <div class="w-[50%] flex flex-col gap-2">
                    <span class="text-zinc-500 font-semibold">Apellido</span>
                    <input class="border border-zinc-400  h-10 px-2 w-[90%]" type="text"
                        placeholder="Ingrese el apellido" name="apellido">
                </div>
            </div>

            <div class="flex flex-col gap-2 mt-8">
                <span class="text-zinc-500 font-semibold">E-mail</span>
                <input class="border border-zinc-400 h-10 px-2 w-[95%]" type="email" placeholder="Ingrese el E-mail"
                    name="email">
            </div>

            <div class="flex flex-col gap-2 mt-8">
                <span class="text-zinc-500 font-semibold">Contraseña</span>
                <input class="border border-zinc-400 h-10 px-2 w-[50%]" type="password"
                    placeholder="Ingrese una Contraseña" name="contrasena">
            </div>

            <div class="w-full flex justify-center mt-20">
                <button class="w-[40%] bg-blue-800 text-white rounded-md p-2 px-4" type="submit">Guardar</button>
            </div>
        </form>
    </div>
</body>

</html>
