<div class="max-w-md mx-auto mt-10">
    <h1 class="text-lg font-semibold mt-4 text-center mb-3">Create Post</h1>

    <form wire:submit="save" class="p-4 border rounded shadow bg-white mt-3">
        <input type="text" wire:model.change="title" class="w-full p-2 mb-4 border rounded" placeholder="Enter Title">
        <div class="text-red-500 mb-4">
            @error('title')
                {{ $message }}
            @enderror
        </div>

        <textarea wire:model.change="content" class="w-full p-2 mb-4 border rounded" placeholder="Enter Content"></textarea>
        <div class="text-red-500 mb-4">
            @error('content')
                {{ $message }}
            @enderror
        </div>

        <button type="submit" class="bg-green-500 text-white py-2 px-4 rounded hover:bg-green-600">Save</button>
    </form>

</div>
