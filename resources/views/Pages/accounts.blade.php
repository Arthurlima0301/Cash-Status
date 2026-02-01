@extends('Layout.Layout')


@section('title', 'Contas')

@section('content')
    @if ($errors->isNotEmpty())
        @include('Modals.error-modal')
    @elseif (session()->has('sucess'))
        @include('Modals.sucess-modal')
    @endif


    <section class="flex flex-col flex-1 gap-3 px-62 py-12  font-dosis" x-data="{ accountName: '', accountId: null }">

        {{-- Card --}}
        <div class="grid grid-cols-4 p-3 bg-secondary text-center rounded-xl shadow-md">
            <h2 class="col-start-2 col-span-2 font-bold text-[30px]">Todas as Contas</h2>

            <div class="flex flex-col items-center justify-center gap-2 col-start-1">
                <span class="flex items-center gap-2 text-[25px] font-bold"><img
                        src="{{ asset('img/icons/icon-balance.svg') }}">Saldo
                    Total</span>
                <span class="text-green-500 text-[30px]">R${{ $total_balance }}</span>
            </div>

            <div class="flex flex-col items-center justify-center gap-2">
                <span class="font-bold">Entradas</span>
                <span class="text-green-500 text-[20px]">+ R$2.000</span>
            </div>

            <div class="flex flex-col items-center justify-center gap-2">
                <span class="font-bold">Saídas</span>
                <span class="text-red-500 text-[20px]">- R$2.000</span>
            </div>


            <div class="flex flex-col items-center justify-center row-start-2 col-start-4">
                <span class="font-bold text-[20px]">Criar</span>
                <button class="cursor-pointer">
                    <img src="{{ asset('img/buttons/btn-create.svg') }}" class=""
                        @click=" $refs.createModal.showModal() ">
                </button>
            </div>
        </div>

        <div class="max-h-[calc(100vh-350px)] overflow-y-auto rounded-xl shadow-md scrollbar-custom">
            <table class="w-full text-center bg-secondary rounded-xl">
                <thead class="sticky inset-0 bg-white">
                    <tr class="text-[25px]">
                        <th class="py-4">Conta</th>
                        <th>Nome</th>
                        <th>Saldo</th>
                        <th colspan="2">Ações
                        <th>
                    </tr>
                </thead>
                <tbody>
                    @if ($accounts->isNotEmpty())
                        @foreach ($accounts as $account)
                            <tr class="text-xl">
                                <td class="py-4"><img class="h-20 w-20 m-auto border-1 rounded-full"></td>
                                <td><a href="" class="hover:text-gray-500">{{ $account->name }}</a></td>
                                <td>{{ $account->balance }}</td>
                                <td><img src="{{ asset('img/buttons/btn-edit-pencil.svg') }}"
                                        class="h-6 m-auto cursor-pointer"
                                        @click=" accountName = '{{ $account->name }}'; accountId = '{{ $account->id }}'; $refs.editModal.showModal() ">
                                </td>
                                <td>
                                    <form action="{{route('account-delete', $account->id )}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit">
                                            <img src="{{ asset('img/buttons/btn-bin.svg') }}" class="h-6  m-auto cursor-pointer">
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="4" class="p-6 text-xl"> Nenhuma conta foi criada</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
        @include('Modals.edit-account-pop-up')
    </section>
    @include('Modals.create-account-pop-up')
@endsection
