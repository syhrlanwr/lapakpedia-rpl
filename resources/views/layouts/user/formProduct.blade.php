<form  class="shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST" action="{{ route('add.product') }}">
    @csrf
    <div class="mb-4">
        <label class="block text-white text-sm font-bold mb-2" for="name">
            Product Name </label>
        <input
            class="shadow appearance-none border rounded w-full py-2 px-3 text-white bg-zinc-800 leading-tight focus:outline-none focus:shadow-outline"
            id="name" type="text" name="name" required>
    </div>
    <div class="mb-4">
        <label class="block text-white text-sm font-bold mb-2" for="price">
            Price </label>
        <input
            class="shadow appearance-none border rounded w-full py-2 px-3 text-white bg-zinc-800 leading-tight focus:outline-none focus:shadow-outline"
            id="price" type="number" name="price" required>
    </div>
    <div class="mb-4">
        <label class="block text-white text-sm font-bold mb-2" for="description">
            Description </label>
        <textarea
            class="shadow appearance-none border rounded w-full py-2 px-3 text-white bg-zinc-800 leading-tight focus:outline-none focus:shadow-outline"
            id="description" type="text" name="description" required></textarea>
    </div>
    <div class="mb-4">
        <label class="block text-white text-sm font-bold mb-2" for="stock">
            Stock </label>
        <input
            class="shadow appearance-none border rounded w-full py-2 px-3 text-white bg-zinc-800 leading-tight focus:outline-none focus:shadow-outline"
            id="stock" type="number" name="stock" required>
    </div>
    <div class="flex items-center justify-end">
        <x-button>
            
            {{ __('Add') }}
        </x-button>
    </div>
</form>