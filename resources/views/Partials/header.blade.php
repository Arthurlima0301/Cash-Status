<header class="flex items-center justify-between p-4 z-10 bg-primary">
    <button class="cursor-pointer" @click=" open =! open">
        <img src="{{ asset('img/buttons/btn-menu.svg') }}">
    </button>

    <div class="flex items-center gap-2 font-dosis text-white">
        <span>{{Auth::user()->name}}</span>
        <img src="{{ asset('img/icons/icon-default-avatar.svg') }}" alt="">
    </div>
</header>
