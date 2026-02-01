<dialog class="fixed w-102 m-auto bg-green-500 text-center text-xl text-white border-3 border-green-200 rounded-xl" open
    x-ref="sucessModal" @click.outside=" $refs.sucessModal.close() ">
    <section class="flex flex-col items-center p-2">
        <button type="button" class="flex w-full justify-end">
            <img src="{{ asset('/img/buttons/btn-white-exit.svg') }}" class="h-4 w-4 cursor-pointer"
                @click=" $refs.sucessModal.close()">
        </button>

        <div class="flex items-center gap-3 p-4">
            <img src="{{ asset('img/icons/icon-sucess.svg') }}" class="h-6 w-6">
            <p><b>Sucesso:</b> {{ session('sucess') }}</p>
        </div>
    </section>
</dialog>
