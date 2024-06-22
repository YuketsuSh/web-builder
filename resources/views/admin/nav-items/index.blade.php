<x-app-layout>
    <div class="flex">
        @include('admin.components.sidebar')

        <div class="flex-grow p-6 bg-gray-900 text-gray-200">
            <div class="max-w-7xl mx-auto">
                <div class="bg-gray-800 shadow overflow-hidden sm:rounded-lg">
                    <div class="px-4 py-5 sm:px-6">
                        <h2 class="font-semibold text-xl leading-tight">
                            {{ __('Manage Navbar') }}
                        </h2>
                        <a href="{{ route('admin.nav-items.create') }}" class="btn btn-primary mb-4 mt-4 inline-flex items-center px-4 py-2 bg-blue-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-600 active:bg-blue-700 focus:outline-none focus:border-blue-700 focus:ring ring-blue-300 disabled:opacity-25 transition ease-in-out duration-150 page-button create">
                            Create Nav Item
                        </a>
                    </div>

                    <div class="border-t border-gray-200">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-700">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">Title</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">URL</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">Actions</th>
                            </tr>
                            </thead>
                            <tbody class="bg-gray-800 divide-y divide-gray-700">
                            @foreach($navItems as $navItem)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-200">{{ $navItem->title }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-300">{{ $navItem->url }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <a href="{{ route('admin.nav-items.edit', $navItem->id) }}" class="text-indigo-400 hover:text-indigo-600">Edit</a>
                                        <form action="{{ route('admin.nav-items.destroy', $navItem->id) }}" method="POST" class="inline-block ml-2">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-400 hover:text-red-600">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @if($navItem->children)
                                    @foreach($navItem->children as $child)
                                        <tr>
                                            <td class="px-6 py-4 pl-12 whitespace-nowrap text-sm font-medium text-gray-200">{{ $child->title }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-300">{{ $child->url }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                                <a href="{{ route('admin.nav-items.edit', $child->id) }}" class="text-indigo-400 hover:text-indigo-600">Edit</a>
                                                <form action="{{ route('admin.nav-items.destroy', $child->id) }}" method="POST" class="inline-block ml-2">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="text-red-400 hover:text-red-600">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
