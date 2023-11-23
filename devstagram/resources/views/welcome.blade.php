<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>Devstagram</title>
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body class="antialiased">
    <header class="w-100 h-20  bg-slate-400" >
        <h1 class="text-red-500 py-7 px-5">DEVSTAGRAM</h1>
        <a href="./iniciosesion" class="hover:font-bold">inicio de sesion</a>

    </header>
    <div class="w-100 grid grid-cols-2  gap-9 px-12 relative top-16" >
        <div class="col-start-1 col-end-7">
            <h1 class="font-extrabold text-lg flex justify-center">Registate en Devstagram</h1>
        </div>
        <div class="w-50 py-4">
            <img src="{{ asset ('img/registrar___5365563673deb11___.jpg')}}" class="w-100% h-100%  boder rounded-lg">
        </div>
        <div class="ml-1 rounded 50 shadow-2xl border-gray-400 w-100%" >
            <label  class="text-xl">NOMBRE</label>
            <br>
            <input type="text" placeholder="INGRESE SU NOMBRE" class="border p-2 w-full mt-4 mb-4  rounded-lg" name="name">
            <br>
            <label class="text-xl absolute top-100">CORREO</label>

            <br>
            <input type="email" id="email" name="email" placeholder="E-mail" class="border p-3 w-full rounded-lg @error('email') border-red-500 @enderror">
            <br>
            <label class="text-xl">CLAVE</label>
            <br>
            <input class="border p-2 w-full mt-4 mb-4  rounded-lg " name="password" type="password" placeholder="INGRESE EL CLAVE">
            @error('clave')
             <p class="bg-red-200 text-white my-2 rounded-lg text-sm p-2 text-center">debe ingresar</p>
             @enderror
            <br>
            <input type="submit" class="w-full h-10 bg-cyan-700 cursor-pointer  rounded-lg  absoluto-100">
        </div>
    </div>
</body>
</html>
