<div class="p-16 flex justify-center gap-6 items-center">
    <div>
        <h1 class="font-bold text-2xl">Counter</h1>
        <p> The huge differencial here is that you are able to <strong>increase and decrease values</strong> of a PHP variable of property <strong>without reload the page</strong>.</p>
        <p class="mb-6"> Actually, that is exactly the <strong>differential of Livewire</strong>, that make it possible without coding any lines of JavaScript.</p>
        <div class="flex justify-center">
            <button wire:click="increment" class="py-2 px-4 bg-indigo-500 hover:bg-indigo-600 rounded text-white">+</button>
            <span class="py-2 px-4 ">{{$count}}</span>
            <button wire:click="decrement" class="py-2 px-4 bg-indigo-500 hover:bg-indigo-600 rounded text-white">-</button>
        </div>
    </div>
</div>
