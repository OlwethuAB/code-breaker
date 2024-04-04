@props([
    'message',
    'letters'
])

<div {{ $attributes->class(['text-center flex flex-wrap gap-6 text-white print:text-blue-900 mt-auto']) }}>
    @foreach (explode(' ', $message) as $word )
        <div class="word flex gap-x-1">
            @foreach (str_split($word) as $character)
            <div>
                <span class="material-symbols-outlined character !text-3xl ">
                    {{ $letters[strtolower($character)] ?? $character }}
                </span>
                <div class="bg-gray-200 border border-black w-8 h-8"></div>
            </div>
            @endforeach
        </div>
    @endforeach
</div>

