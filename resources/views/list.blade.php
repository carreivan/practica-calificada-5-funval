<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List</title>
    @vite('resources/css/app.css')
</head>

<body>

    <div class="w-screen h-screen flex flex-col items-center">
        <header class="w-full h-24 flex justify-between items-center px-5">
            <h3 class="font-semibold text-zinc-600">Gestión de Usuarios</h3>
            <a href="/" class="bg-blue-800 text-white rounded-md p-2 px-4">+ Agregar</a>
        </header>

        <div class="w-[90%] overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200">
                <thead>
                    <tr>
                        <th
                            class="px-6 py-3 border-b border-gray-200 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Usuarios</th>
                        <th
                            class="px-6 py-3 border-b border-gray-200 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Email</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Aquí puedes generar dinámicamente las filas de la tabla -->

                    @foreach ($usuarios as $usuario)
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <div class="text-sm leading-5 text-gray-900">{{ $usuario->nombre }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <div class="text-sm leading-5 text-gray-900">{{ $usuario->email }}</div>
                            </td>
                        </tr>
                    @endforeach
                    <!-- Puedes agregar más filas aquí según tus datos -->
                </tbody>
            </table>
        </div>


    </div>

</body>

</html>
