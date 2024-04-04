<div class="my-6 flex flex-col items-center gap-8 flex-1">
    {{-- Care about people's approval and you will be their prisoner. --}}

    <form action="" class="print:hidden w-full">
        <textarea wire:model.live="message" class="bg-white/20 p-4 text-white rounded-xl w-full"></textarea>

        <div class="mt-2 flex justify-end">
            <button type="button" @disabled(! $message) @click="window.print()" class="bg-green-400 px-4 py-1 font-semibold rounded-md disabled:bg-slate-500">Print</button>
        </div>
    </form>

    <x-output :message="$message" :letters="$this->letters"/>

    @if ($message)
    <x-legend :letters="$this->letters"/>
    @endif

</div>
