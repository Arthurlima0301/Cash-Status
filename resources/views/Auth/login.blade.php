<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="shortcut icon" href="{{ asset('img/logo.svg') }}">
    <title>Login</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="w-screen">
    <main class="flex flex-1 min-h-screen">
        <section class="flex flex-1 bg-[url('/public/img/home-page/background2.png')] bg-cover bg-center bg-no-repeat">

        </section>

        <section class="flex w-[40%]">
            <form action="" method="" class="flex flex-col items-center gap-6 h-full w-full">
                <div class="sticky w-full p-6">
                    <a href="/">
                        <img src="{{ asset('img/buttons/btn-return.svg') }}" class="cursor-pointer">
                    </a>
                </div>

                {{-- LOGO --}}
                <section class="flex flex-col items-center gap-3">
                    <img src="{{ asset('img/logo.svg') }}" class="h-15 w-15">
                    <span class="font-dosis text-primary md:text-[40px]">Cash Status</span>
                    <h1 class="font-dosis text-[30px]">Login</h1>
                </section>


                <div class="flex flex-col">
                    <label for="" class="text-xl">Email</label>
                    <input type="text" class="h-10 w-92 p-3 text-lg bg-tertiary rounded-xl shadow-sm">
                </div>

                <div class="flex flex-col">
                    <label for="" class="text-xl">Senha</label>
                    <input type="password" class="h-10 w-92 p-3 text-lg bg-tertiary rounded-xl shadow-sm">
                </div>

                <a href="/register" class="text-md text-blue-500">Não tem uma conta?</a>

                <div class="flex gap-2 text-xl">
                    <input type="checkbox" class="cursor-pointer">
                    <p>Mostrar Senha</p>
                </div>

                <button
                    class="p-3 font-dosis text-secondary bg-primary rounded-md shadow-sm cursor-pointer">Registrar-Se</button>
            </form>
        </section>
    </main>
</body>

</html>
