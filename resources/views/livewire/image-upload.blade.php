<div class="p-6">
    <form wire:submit.prevent="save" class="flex flex-col w-[400px] mx-auto py-16">

        <input type="file" wire:model="image" class="mb-4" multiple>
        @error('image') <span class="error">{{ $message }}</span> @enderror

        <button type="submit" class="py-2 px-4 bg-indigo-500 hover:bg-indigo-600 rounded text-white">Save Image</button>
    </form>

    <div class="flex flex-wrap gap-7">
        @foreach($images as $image)
            <img src="{{$image}}" class="w-[128] h-[120] object-cover">
        @endforeach
    </div>
</div>
