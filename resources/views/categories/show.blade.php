{{-- <x-layouts.app :title="__('Products | View')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <h1 class="">Detalle de Categoria{{ $category->name }}</h1>

        <p>
            @foreach ($category->products as $product)
                <a class="block" href="{{ route('products.show', $product->id) }}">{{ $product->name }}</a>
            @endforeach

        </p>

    </div>
</x-layouts.app> --}}
<x-layouts.app :title="'Category | ' . $category->name">
    <div class="flex flex-col gap-6">

        {{-- Botón para volver a la lista de categorías o productos --}}
        <a href="{{ route('products.index') }}"
            class="ml-auto w-42 inline-flex items-center gap-2 rounded-md bg-primary px-4 py-2 text-sm font-medium text-white hover:bg-primary/80">
            ← Volver a Productos
        </a>

        <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-100">
            Categoría: {{ $category->name }}
        </h2>
        <p class="text-sm text-gray-600 dark:text-gray-300 mb-4">
            {{ $category->description }}
        </p>

        {{-- Listado de productos de esta categoría --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            @forelse ($category->products as $product)
                <article class="border rounded-md p-4 shadow bg-white dark:bg-gray-800">
                    <img src="{{ $product->image_url }}" alt="{{ $product->name }}"
                        class="w-full h-40 object-cover rounded-md mb-3">

                    <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-100">
                        <a href="{{ route('products.show', $product) }}" class="hover:underline">
                            {{ $product->name }}
                        </a>
                    </h3>

                    <p class="text-sm text-gray-600 dark:text-gray-300 line-clamp-2">
                        {{ $product->description }}
                    </p>

                    <p class="mt-2 text-green-600 font-medium">
                        ${{ number_format($product->price, 2) }}
                    </p>
                </article>
            @empty
                <p class="col-span-3 text-gray-500">
                    No hay productos en esta categoría.
                </p>
            @endforelse
        </div>
    </div>
</x-layouts.app>
