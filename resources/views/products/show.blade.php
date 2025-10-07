<x-layouts.app :title="__('Products | View')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">

        {{-- Home --}}
        <a href="{{ route('products.index') }}"
            class=" ml-auto w-42 inline-flex justify-center items-center gap-2 whitespace-nowrap rounded-radius bg-primary border border-primary dark:border-primary-dark px-4 py-2 text-sm font-medium tracking-wide text-on-primary transition hover:opacity-75 text-center focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed dark:bg-primary-dark dark:text-on-primary-dark dark:focus-visible:outline-primary-dark">
            <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                class="size-5 fill-on-primary dark:fill-on-primary-dark" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M12 3.75a.75.75 0 01.75.75v6.75h6.75a.75.75 0 010 1.5h-6.75v6.75a.75.75 0 01-1.5 0v-6.75H4.5a.75.75 0 010-1.5h6.75V4.5a.75.75 0 01.75-.75z"
                    clip-rule="evenodd" />
            </svg>
            Home
        </a>


        <article
            class="group rounded-radius flex max-w-md flex-col border border-outline bg-surface-alt p-6 text-on-surface dark:border-outline-dark dark:bg-surface-dark-alt dark:text-on-surface-dark">
            <span
                class="ml-auto w-fit rounded-radius bg-primary px-2 py-1 text-xs font-medium text-on-primary dark:bg-primary-dark dark:text-on-primary-dark">TOP
                CHOICE</span>
            <h3 class="text-xl text-balance md:text-2xl font-bold text-on-surface-strong dark:text-on-surface-dark-strong"
                aria-describedby="planDescription">{{ $product->name }}</h3>
            <p id="planDescription" class="mt-2 text-pretty text-xs font-medium">{{ $product->description }}</p>
            <span
                class="mt-8 text-balance text-3xl md:text-4xl font-medium text-on-surface dark:text-on-surface-dark">${{ number_format($product->price, 2) }}</span>
            <span class="mt-2 text-pretty text-xs font-medium">Price Product</span>
            <!-- avatar & rating -->
            <div class="flex flex-col-reverse md:flex-row md:items-center mt-8 justify-between gap-6">
                <!-- avatar & title -->
                <div class="flex items-center gap-2">
                    <img src="https://penguinui.s3.amazonaws.com/component-assets/avatar-1.webp"
                        class="size-10 rounded-full object-cover" alt="avatar" />
                    <div class="flex flex-col gap-1">
                        <h3 class="font-bold leading-4 text-on-surface-strong dark:text-on-surface-dark-strong">
                            {{ $product->name }}</h3>
                        <span class="text-xs">{{ $product->updated_at->diffForHumans() }}</span>
                    </div>
                </div>
                <!-- Rating -->
                <div class="flex items-center gap-1">
                    <span class="sr-only">Rated 4 stars</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        class="size-4 text-amber-500" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                            clip-rule="evenodd" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        class="size-4 text-amber-500" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                            clip-rule="evenodd" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        class="size-4 text-amber-500" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                            clip-rule="evenodd" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        class="size-4 text-amber-500" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                            clip-rule="evenodd" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        class="size-4 text-on-surface/50 dark:text-on-surface-dark/50" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
            </div>
            <div class="flex items-center mt-4 space-x-3">
                <a href="{{ route('products.edit', $product) }}"
                    class="font-medium text-primary underline-offset-2 hover:underline focus:underline focus:outline-hidden dark:text-primary-dark">Edit</a>
                <form method="POST" action="{{ route('products.destroy', $product) }}"
                    onsubmit="return confirm('Are you sure  want to delete this article')">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                        class="cursor-pointer font-medium text-danger underline-offset-2 hover:underline focus:underline focus:outline-hidden dark:text-primary-dark">
                        Delete
                    </button>
                </form>
            </div>
        </article>



        {{-- Category --}}
        {{-- <p>
            @foreach ($product->categories as $category)
                <a href="{{ route('category.show', $category->id) }}">{{ $category->name }}</a>
            @endforeach

        </p> --}}

        {{-- Categorías asociadas --}}
        <div class="mt-3 flex flex-wrap gap-2">
            @forelse ($product->categories as $category)
                <a href="{{ route('category.show', $category->id) }}"
                    class="inline-block px-2 py-1 text-xs font-medium bg-blue-100 text-blue-700 rounded-full hover:bg-blue-200">
                    {{ $category->name }}
                </a>
            @empty
                <span class="text-xs text-gray-400">Sin categorías</span>
            @endforelse
        </div>


    </div>
</x-layouts.app>
