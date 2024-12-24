<div>

    <h1>{{ $title }}</h1>
    <h2>{{ count($users) }}</h2>

    {{-- button --}}
    <button
        wire:click="handleClick"
        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
    >
        Clicks Me
    </button>

</div>
