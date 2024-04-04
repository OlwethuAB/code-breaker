@props(['letters'])

<!-- I begin to speak only when I am certain what I will say is not better left unsaid. - Cato the Younger -->

<div class="mt-auto">
    <h1 class="text-center mb-2 print:hidden"> The legend is here </h1>
    <div class="flex flex-wrap">
        @foreach ( $letters as $letter => $symbol)
        <div class="flex flex-col items-center border border-white/10 p-2 print:border-gray-400">
            <span class="mb-2 font-bold">{{ ucwords($letter)  }}</span>
            <span class="material-symbols-outlined character">{{$symbol}}</span>
        </div>
        @endforeach
    </div>
</div>
