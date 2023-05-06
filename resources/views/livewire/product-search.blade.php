<div class="container mx-auto py-16 px-8">
    <div class="mb-4">
        <input type="text" wire:model.lazy="search" placeholder="Search for Products">
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
        @foreach($products as $product)
            <div class="max-w-xs bg-white rounded-lg overflow-hidden drop-shadow-lg drop-shadow-2xla">
                <img class="h-48 w-full object-cover" src="{{$product->image}}" alt="Product Image">
                <div class="p-4">
                    <h2 class="text-gray-900 font-bold text-xl">{{$product->title}}</h2>
                    <p class="mt-2 text-gray-600">{{$product->description}}</p>
                    <div class="mt-2 flex items-center justify-between">
                        <span class="text-gray-400 font-bold">Price:</span>
                        <span class="text-green-500 font-bold text-xl">R${{$product->price}}</span>
                    </div>
                    <div class="mt-4">
                        <button class="bg-green-500 text-white py-2 px-4 rounded-md hover:bg-green-600 focus:outline-none">Add to Cart</button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    {{$products->links()}}
</div>
