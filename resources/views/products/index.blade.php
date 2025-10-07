<x-layouts.app :title="__('Products | List')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">






        {{-- create --}}
        <a href="{{ route('products.create') }}"
            class=" ml-auto w-42 inline-flex justify-center items-center gap-2 whitespace-nowrap rounded-radius bg-primary border border-primary dark:border-primary-dark px-4 py-2 text-sm font-medium tracking-wide text-on-primary transition hover:opacity-75 text-center focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed dark:bg-primary-dark dark:text-on-primary-dark dark:focus-visible:outline-primary-dark">
            <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                class="size-5 fill-on-primary dark:fill-on-primary-dark" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M12 3.75a.75.75 0 01.75.75v6.75h6.75a.75.75 0 010 1.5h-6.75v6.75a.75.75 0 01-1.5 0v-6.75H4.5a.75.75 0 010-1.5h6.75V4.5a.75.75 0 01.75-.75z"
                    clip-rule="evenodd" />
            </svg>
            Create Products
        </a>



        <div
            class="overflow-hidden w-full overflow-x-auto rounded-radius border border-outline dark:border-outline-dark">
            <table class="w-full text-left text-sm text-on-surface dark:text-on-surface-dark">
                <thead
                    class="border-b border-outline bg-surface-alt text-sm text-on-surface-strong dark:border-outline-dark dark:bg-surface-dark-alt dark:text-on-surface-dark-strong">
                    <tr>
                        <th scope="col" class="p-4">ID</th>
                        <th scope="col" class="p-4">Image</th>
                        <th scope="col" class="p-4">Name</th>
                        <th scope="col" class="p-4">Price</th>
                        <th scope="col" class="p-4">Description</th>
                        <th scope="col" class="p-4">Created_at</th>
                        <th scope="col" class="p-4">Updated_at</th>
                        <th scope="col" class="p-4">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-outline dark:divide-outline-dark">
                    @forelse ($products as $product)
                        <tr>
                            <td class="p-4">{{ $product->id }}</td>
                            <td class="p-4"><img src="{{ $product->image_url }}" /></td>
                            <td class="p-4">{{ $product->name }}</td>
                            <td class="p-4">{{ $product->price }}</td>
                            <td class="p-4">{{ $product->description }}</td>
                            <td class="p-4">{{ $product->created_at->diffForHumans() }}</td>
                            <td class="p-4">{{ $product->updated_at->diffForHumans() }}</td>
                            <td class="p-4">
                                <a href="{{ route('products.edit', $product) }}"
                                    class="font-medium text-primary underline-offset-2 hover:underline focus:underline focus:outline-hidden dark:text-primary-dark">Edit</a>

                            </td>
                        </tr>
                    @empty
                        <tr class="text-center">
                            <td class="p-4">No Data</td>
                        </tr>
                    @endforelse



                </tbody>
            </table>
        </div>
        <div>
            {{ $products->links() }}
        </div>

    </div>
</x-layouts.app>
