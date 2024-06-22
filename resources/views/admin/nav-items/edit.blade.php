<x-app-layout>
    <div class="flex">
        @include('admin.components.sidebar')

        <div class="flex-1 p-6">
            <div class="max-w-4xl mx-auto bg-white dark:bg-gray-800 shadow-md rounded-lg p-6">
                <h2 class="text-2xl font-semibold text-gray-800 dark:text-gray-200">{{ __('Edit Nav Item') }}</h2>

                <form action="{{ route('admin.nav-items.update', $navItem->id) }}" method="POST" class="mt-4">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label for="title" class="block text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('Title') }}</label>
                        <input type="text" name="title" id="title" class="block w-full mt-1 border-gray-300 dark:border-gray-600 rounded-md shadow-sm" value="{{ $navItem->title }}" required>
                    </div>

                    <div class="mb-4">
                        <label for="url" class="block text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('URL') }}</label>
                        <input type="text" name="url" id="url" class="block w-full mt-1 border-gray-300 dark:border-gray-600 rounded-md shadow-sm" value="{{ $navItem->url }}" required>
                    </div>

                    <div class="mb-4">
                        <label for="parent_id" class="block text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('Parent Item') }}</label>
                        <select name="parent_id" id="parent_id" class="block w-full mt-1 border-gray-300 dark:border-gray-600 rounded-md shadow-sm">
                            <option value="">{{ __('None') }}</option>
                            @foreach($navItems as $item)
                                <option value="{{ $item->id }}" @if($navItem->parent_id == $item->id) selected @endif>{{ $item->title }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="flex items-center justify-end">
                        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            {{ __('Save') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
