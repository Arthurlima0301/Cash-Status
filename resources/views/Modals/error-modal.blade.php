<dialog class="fixed w-102 m-auto bg-red-500 text-center text-xl text-white border-3 border-red-200 rounded-xl" open
    x-ref="errorModal" @click.outside=" $refs.errorModal.close() ">
    <section class="flex flex-col items-center p-2">
        <button type="button" class="flex w-full justify-end">
            <img src="{{ asset('/img/buttons/btn-white-exit.svg') }}" class="h-4 w-4 cursor-pointer"
                @click=" $refs.errorModal.close()">
        </button>

        <div class="flex items-center gap-3 p-4">
            <img src="{{ asset('img/icons/icon-error.svg') }}" class="h-6 w-6">
            <p><b>Erro:</b> {{ $errors->first() }}</p>
        </div>
    </section>
</dialog>
