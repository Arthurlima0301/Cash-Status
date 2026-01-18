<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="shortcut icon" href="{{asset('img/logo.svg')}}">
    <title>Cash Status</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="w-full">

    {{-- HEADER --}}
    <header class="fixed flex justify-between w-full p-2 z-10 bg-primary">
        {{-- LOGO --}}
        <section class="flex items-center gap-2">
            <img src="{{ asset('img/logo.svg') }}" class="h-15 w-15">
            <span class="font-dosis text-secondary md:text-[40px]">Cash Status</span>
        </section>

        {{-- OPTIONS --}}
        <nav class="flex items-center gap-3">
            <a href="" class="font-dosis text-secondary text-md p-3 rounded-md border-2 hover:bg-tertiary hover:text-primary">Sobre</a>
            <a href="/login" class="font-dosis text-secondary text-md p-3 rounded-md border-2 hover:bg-tertiary hover:text-primary">Login</a>
        </nav>
    </header>
    <main>

        {{-- HOME --}}
        <section
            class="flex flex-col min-h-screen bg-[url('/public/img/home-page/background.png')] bg-cover bg-center bg-no-repeat">

            {{-- SLOGAN --}}
            <header class="flex flex-1 justify-center items-center">
                <h1 class="text-secondary font-dosis md:text-[60px] font-bold text-center">Aqui na Cash Status <br>
                    suas finanças importam</h1>
            </header>

            {{-- REDIRECT REGISTER PAGE --}}
            <section class="flex flex-1 flex-col justify-center items-center gap-6">
                <p class="font-dosis font-bold text-secondary md:text-[20px] ">Comece a gerenciar seu dinheiro</p>
                <a href="/register"
                    class="font-dosis text-secondary text-md rounded-md border-2 border-secondary p-3 w-[150px] text-center 
                    hover:bg-secondary hover:text-primary">Cadastrar-se</a>
            </section>
        </section>

        {{-- SAVE --}}
        <section class="flex place-items-center min-h-screen">

            {{-- IMAGE --}}
            <div class="flex flex-1 place-items-center p-6">
                <img src="{{ asset('img/home-page/save.png') }}" class="rounded-md"
                    alt="Economia e controle financeiro">
            </div>

            {{-- TEXT --}}
            <div class="flex flex-col flex-1 justify-center items-center h-full">
                <h2 class="text-primary font-dosis md:text-[40px] font-bold">Economize</h2>

                <p class="font-dosis text-primary text-center md:text-[20px]">
                    Visualize seus gastos com clareza.
                    Identifique excessos.
                    Transforme pequenos ajustes em economia real.
                </p>
            </div>
        </section>

        {{-- REGISTER --}}
        <section class="flex place-items-center min-h-screen bg-primary">

            {{-- IMAGE --}}
            <div class="flex flex-col flex-1 justify-center items-center h-full">
                <h2 class="text-secondary font-dosis md:text-[40px] font-bold">Registre</h2>

                {{-- TEXT --}}
                <p class="font-dosis text-secondary text-center md:text-[20px]">
                    Anote cada entrada e saída em segundos.
                    Controle total sem planilhas confusas.
                    Informação organizada gera decisão correta.
                </p>
            </div>


            <div class="flex flex-1 place-items-center h-full p-6">
                <img src="{{ asset('img/home-page/register.png') }}" class="rounded-md">
            </div>
        </section>

        {{-- THRIVE --}}
        <section class="flex place-items-center min-h-screen bg-other">

            {{-- IMAGE --}}
            <div class="flex flex-1 place-items-center h-full p-6">
                <img src="{{ asset('img/home-page/thrive.png') }}" class="rounded-md">
            </div>

            {{-- TEXT --}}
            <div class="flex flex-col flex-1 justify-center items-center h-full">
                <h2 class="text-primary font-dosis md:text-[40px] font-bold">Propespere</h2>

                <p class="font-dosis text-primary text-center md:text-[20px]">
                    Planeje melhor.
                    Evolua financeiramente com consistência.
                    Crescimento é consequência de controle.
                </p>
            </div>

        </section>
    </main>
    {{-- FOOTER --}}
    <footer class="flex items-center gap-3 justify-center w-full p-3 bg-primary">

        {{-- LOGO --}}
        <section class="flex items-center gap-2">
            <img src="{{ asset('img/logo.svg') }}" class="h-10 w-10">
            <h2 class="text-secondary font-dosis text-md font-bold">Cash Status</h2>
        </section>

        {{-- COPYRIGHT --}}
        <p class="font-bold font-dosis text-secondary">© 2026 - Cash Status</p>
    </footer>
</body>

</html>
