<div>

    <h1>{{ $title }}</h1>
    <h2>{{ $username }}</h2>

    {{-- button --}}
    <button
        wire:click="createNewUser"
        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
    >
        Create new User
    </button>

</div>
