<div class="text-center mt-5">
    <button wire:click="increment" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">+</button>
    <button wire:click="decrement" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">-</button>
    <h1 class="text-4xl font-bold">{{ $count }}</h1>
</div>
