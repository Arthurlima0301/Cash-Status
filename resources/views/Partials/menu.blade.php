<div class="fixed z-4 h-full w-full bg-black/60 backdrop-blur-sm" x-show="open" x-transition.opacity>
    <aside class="h-full w-[30%] bg-secondary">

        <nav class="flex flex-col h-full w-full font-dosis text-xl">
            <ul>
                <li>
                    <a href="{{route('dashboard')}}" class="flex items-center h-full w-full p-6 hover:bg-tertiary">
                        <img src="{{ asset('img/buttons/btn-dashboard.svg') }}" class="h-10 w-10">
                        <span class="m-auto">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="#" class="flex items-center w-full p-6 hover:bg-tertiary">
                        <img src="{{ asset('img/buttons/btn-statement.svg') }}" class="h-10 w-10">
                        <span class="m-auto">Extrato</span>
                    </a>
                </li>

                <li>
                    <a href="#" class="flex items-center w-full p-6 hover:bg-tertiary">
                        <img src="{{ asset('img/buttons/btn-account.svg') }}" class="h-10 w-10">
                        <span class="m-auto">Contas</span>
                    </a>
                </li>
            </ul>
        </nav>

    </aside>
</div>
