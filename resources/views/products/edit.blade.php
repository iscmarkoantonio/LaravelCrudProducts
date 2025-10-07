<x-layouts.app :title="__('Products | Edit')">
    <h2 class="text-xl font-semibold">Edit Product: {{ $product->name }}</h2>
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">

        {{-- regresar --}}
        <a href="{{ route('products.index') }}"
            class=" ml-auto w-42 inline-flex justify-center items-center gap-2 whitespace-nowrap rounded-radius bg-primary border border-primary dark:border-primary-dark px-4 py-2 text-sm font-medium tracking-wide text-on-primary transition hover:opacity-75 text-center focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed dark:bg-primary-dark dark:text-on-primary-dark dark:focus-visible:outline-primary-dark">
            <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                class="size-5 fill-on-primary dark:fill-on-primary-dark" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M12 3.75a.75.75 0 01.75.75v6.75h6.75a.75.75 0 010 1.5h-6.75v6.75a.75.75 0 01-1.5 0v-6.75H4.5a.75.75 0 010-1.5h6.75V4.5a.75.75 0 01.75-.75z"
                    clip-rule="evenodd" />
            </svg>
            Regresar
        </a>


        {{-- Form --}}
        <form method="POST" action="{{ route('products.update', $product) }}" class="mt-8 space-y-4">
            @csrf
            @method('PATCH')

            <div class="flex w-full max-w-md flex-col gap-1 text-on-surface dark:text-on-surface-dark">
                <label for="name" class="w-fit pl-0.5 text-sm">Name</label>
                <input id="name" type="text"
                    class="w-full rounded-radius border border-outline bg-surface-alt px-2 py-2 text-sm focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary disabled:cursor-not-allowed disabled:opacity-75 dark:border-outline-dark dark:bg-surface-dark-alt/50 dark:focus-visible:outline-primary-dark"
                    name="name" value="{{ old('name', $product->name) }}" placeholder="Enter product's name"
                    autocomplete="name" />
                @error('name')
                    <small class="pl-0.5 text-danger">Error: {{ $message }}</small>
                @enderror
            </div>

            <div class="flex w-full max-w-md flex-col gap-1 text-on-surface dark:text-on-surface-dark">
                <label for="price" class="w-fit pl-0.5 text-sm">Price</label>
                <input id="price" type="text"
                    class="w-full rounded-radius border border-outline bg-surface-alt px-2 py-2 text-sm focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary disabled:cursor-not-allowed disabled:opacity-75 dark:border-outline-dark dark:bg-surface-dark-alt/50 dark:focus-visible:outline-primary-dark"
                    name="price" value="{{ old('price', $product->price) }}" placeholder="Enter productś name"
                    autocomplete="price" />
                @error('price')
                    <small class="pl-0.5 text-danger">Error: {{ $message }}</small>
                @enderror
            </div>

            <div class="flex w-full max-w-md flex-col gap-1 text-on-surface dark:text-on-surface-dark">
                <label for="description" class="w-fit pl-0.5 text-sm">Description</label>
                <textarea id="description" name="description"
                    class="w-full rounded-radius border border-outline bg-surface-alt px-2.5 py-2 text-sm focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary disabled:cursor-not-allowed disabled:opacity-75 dark:border-outline-dark dark:bg-surface-dark-alt/50 dark:focus-visible:outline-primary-dark"
                    rows="3" placeholder="Type the products description">{{ old('description', $product->description) }}</textarea>
                @error('description')
                    <small class="pl-0.5 text-danger">Error: {{ $message }}</small>
                @enderror
            </div>


            <button type="submit"
                class="whitespace-nowrap rounded-radius bg-primary border border-primary px-4 py-2 text-sm font-medium tracking-wide text-on-primary transition hover:opacity-75 text-center focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed dark:bg-primary-dark dark:border-primary-dark dark:text-on-primary-dark dark:focus-visible:outline-primary-dark">Edit
                Products</button>



        </form>
    </div>
</x-layouts.app>
