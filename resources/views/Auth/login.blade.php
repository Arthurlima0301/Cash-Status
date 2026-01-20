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

        <section class="flex flex-col w-[40%]">
            <div class="fixed w-full p-3">
                <a href="/">
                    <img src="{{ asset('img/buttons/btn-return.svg') }}" class="cursor-pointer">
                </a>
            </div>

            <form action="{{ route('login') }}" method="POST"
                class="flex flex-col justify-center items-center gap-4 h-full w-full">
                
                @csrf

                {{-- LOGO --}}
                <section class="flex flex-col items-center">
                    <img src="{{ asset('img/logo.svg') }}" class="h-15 w-15">
                    <span class="font-dosis text-primary md:text-[40px]">Cash Status</span>
                    <h1 class="font-dosis text-[30px]">Login</h1>
                    @if ($errors->isNotEmpty())
                        <p class="text-center text-red-500">{{ $errors->first() }}</p>
                    @endif
                </section>


                <div class="flex flex-col">
                    <label for="" class="text-xl">Email</label>
                    <input type="email"
                        name="email" class="h-10 w-92 p-3 text-lg border-2 border-tertiary rounded-xl"
                        placeholder="Email ">
                </div>

                <div class="flex flex-col">
                    <label for="" class="text-xl">Senha</label>
                    <input type="password" name="password"
                        class="h-10 w-92 p-3 text-lg border-2 border-tertiary rounded-xl" placeholder="Password">
                </div>

                <div class="flex gap-2 text-xl">
                    <input type="checkbox" class="cursor-pointer">
                    <p>Mostrar Senha</p>
                </div>

                <button
                    class="w-92 p-3 font-dosis text-secondary bg-primary rounded-md shadow-sm cursor-pointer" type="submit">Login</button>

                <p class="text-gray-500">Não tem uma conta? <a href="/register"
                        class="text-md text-blue-500 underline">Cadastro</a></p>
            </form>
        </section>
    </main>
</body>

</html>
