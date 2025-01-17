<div>

    <form action="" class="m-3 p-3">

        {{-- input name --}}
        <div class="mb-2">
            <input type="text" wire:model="name" placeholder="name" class="border-2 border-gray-700 p-2 rounded-lg">
        </div>

        {{-- input email --}}

        <div class="mb-2">
            <input type="email" wire:model="email" placeholder="email" class="border-2 border-gray-700 p-2 rounded-lg">
        </div>

        {{-- password --}}
        <div class="mb-2">
            <input type="password" wire:model="password" placeholder="password" class="border-2 border-gray-700 p-2 rounded-lg">
        </div>

        <div class="mb-2">
            <button wire:click.prevent="createNewUser" class="border-2 border-gray-700 p-2 rounded-lg">Create</button>
        </div>

    </form>

</div>
