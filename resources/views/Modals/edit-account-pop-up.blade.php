<dialog class="m-auto font-dosis rounded-xl pb-6" x-ref="editModal" >
    <div class="grid grid-cols-3 text-center min-w-[1050px] px-6">
        <h1 class=" col-start-2 font-bold text-[40px]">Editar Conta</h1>

        <button type="button" class="flex items-center justify-end">
            <img src="{{ asset('/img/buttons/btn-exit.svg') }}" class="h-8 w-8 cursor-pointer"
                @click=" $refs.editModal.close()">
        </button>
    </div>

    <form action="" method="" class="flex flex-col items-center gap-6">

        @csrf        

        {{--
                Mexer Futuramente na Edição de Imagens da Conta
        <div class="flex flex-col">
            <label for="account-avatar" class="flex justify-end">
                <img src="{{ asset('/img/buttons/btn-edit-pencil.svg') }}" class="fixed h-8 w-8 cursor-pointer">
                <input id="account-avatar" name="account-avatar" type="file" class="hidden">
            </label>
            <img :src="preview" class="flex h-62 w-62 border-2 border-primary rounded-full">
        </div>
        --}}

        <input type="text" name="id" class="hidden" x-model="accountId">

        <div class="flex flex-col text-center">
            <label class="font-bold text-[30px]">Nome</label>
            <input type="text" name="name" id="name" class="w-62 p-2 text-center text-[25px] border-2 border-tertiary rounded-md"
                placeholder="Digite um nome" x-model="accountName">
        </div>

        <button class="px-6 text-[25px] text-secondary bg-primary rounded-md cursor-pointer" type="submit">Salvar</button>
    </form>

</dialog>
