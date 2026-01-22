@extends('layout.layout')

@section('title', 'Perfil')

@section('content')
    <section class="flex items-center justify-center h-full w-full py-22" x-data="{ img: '/img/buttons/btn-logout.svg' }">

        {{-- Card --}}
        <div class="flex flex-col h-full min-w-[30%] p-6 font-dosis bg-secondary rounded-xl shadow-md">
            {{-- Botão de Retorno --}}
            <a  class="fixed cursor-pointer">
                <img src="{{ asset('img/buttons/btn-return.svg') }}">
            </a>


            {{-- Formulário de Logout --}}
            <form action="" method="" class="flex flex-col justify-center items-center gap-3 h-full ">
                {{-- Avatar --}}
                <img src="{{ asset('img/icons/icon-dark-default-avatar.svg') }}" class="h-52 w-52">

                {{-- Informações de Usuários --}}
                <div class="text-center text-[25px]">
                    <p>Usuário</p>
                    <p class="text-[#8C8C8C]">email@gmail.com</p>
                </div>

                {{-- Botão de Logout --}}
                <button
                    class="
                        flex items-center justify-center gap-2 
                        w-[60%] p-3 border-2 
                        rounded-md 
                        cursor-pointer 
                        hover:bg-primary hover:text-secondary"
                    @mouseenter=" img = '/img/buttons/btn-white-logout.svg'"
                    @mouseleave=" img = '/img/buttons/btn-logout.svg' ">

                    <img :src="img" class="h-6">

                    Sair
                </button>
            </form>
        </div>
    </section>
@endsection
