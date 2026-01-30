<dialog class="m-auto font-dosis rounded-xl pb-6" x-ref="createModal">
    <div class="grid grid-cols-3 text-center min-w-[1050px] px-6">
        <h1 class=" col-start-2 font-bold text-[40px]">Criar Conta</h1>

        <button type="button" class="flex items-center justify-end">
            <img src="{{ asset('/img/buttons/btn-exit.svg') }}" class="h-8 w-8 cursor-pointer"
                @click=" $refs.createModal.close()">
        </button>
    </div>

    <form action="min-w-[450px]" class="flex flex-col items-center gap-6"
        x-data= "{ preview: '/img/buttons/btn-account.svg' }">

        <div class="flex flex-col">
            <label for="account-avatar" class="flex justify-end">
                <img src="{{ asset('/img/buttons/btn-edit-pencil.svg') }}" class="fixed h-8 w-8 cursor-pointer">
                <input id="account-avatar" name="account-avatar" type="file" class="hidden"
                    @change="preview = URL.createObjectURL($event.target.files[0]) ">
            </label>

            <img :src="preview" class="flex h-62 w-62 border-2 border-primary rounded-full">
        </div>

        <div class="flex flex-col text-center">
            <label class="font-bold text-[30px]">Nome</label>
            <input type="text" class="w-62 p-2 text-center text-[25px] border-2 border-tertiary rounded-md"
                placeholder="Digite um nome">
        </div>

        <button class="px-6 text-[25px] text-secondary bg-primary rounded-md cursor-pointer">Salvar</button>
    </form>

</dialog>
