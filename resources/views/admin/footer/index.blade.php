<x-app-layout>
    <div class="flex">
        @include('admin.components.sidebar')

        <div class="flex-grow p-6 bg-gray-900 text-gray-200">
            <div class="max-w-7xl mx-auto">
                <!-- Form to update footer content -->
                <div class="bg-gray-800 shadow overflow-hidden sm:rounded-lg">
                    <div class="px-4 py-5 sm:px-6">
                        <h2 class="font-semibold text-xl leading-tight">
                            {{ __('Manage Footer') }}
                        </h2>
                    </div>
                    <div class="px-4 py-5 sm:p-6">
                        <form action="{{ route('admin.footer.update', $footer->id ?? 1) }}" method="POST">
                            @csrf
                            @method('POST')

                            <div class="mb-4">
                                <label for="logo" class="block text-sm font-medium text-gray-300">{{ __('Logo URL') }}</label>
                                <input type="text" name="logo" id="logo" value="{{ old('logo', $footer->logo ?? '') }}" class="mt-1 block w-full bg-gray-700 text-gray-200 border-gray-600 rounded-md shadow-sm">
                            </div>

                            <div class="mb-4">
                                <label for="description" class="block text-sm font-medium text-gray-300">{{ __('Description') }}</label>
                                <textarea name="description" id="description" class="mt-1 block w-full bg-gray-700 text-gray-200 border-gray-600 rounded-md shadow-sm">{{ old('description', $footer->description ?? '') }}</textarea>
                            </div>

                            <div class="mt-6">
                                <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-600 active:bg-blue-700 focus:outline-none focus:border-blue-700 focus:ring ring-blue-300 disabled:opacity-25 transition ease-in-out duration-150">
                                    {{ __('Update Footer') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Form to add social media link -->
                <div class="bg-gray-800 shadow overflow-hidden sm:rounded-lg mt-6">
                    <div class="px-4 py-5 sm:px-6">
                        <h2 class="font-semibold text-xl leading-tight">
                            {{ __('Manage Social Media Links') }}
                        </h2>
                    </div>
                    <div class="px-4 py-5 sm:p-6">
                        <form action="{{ route('admin.footer.storeSocialMediaLink') }}" method="POST">
                            @csrf

                            <div class="flex items-center mb-4">
                                <input type="text" name="name" placeholder="Name" class="mt-1 block w-1/3 bg-gray-700 text-gray-200 border-gray-600 rounded-md shadow-sm mr-2">
                                <input type="url" name="url" placeholder="URL" class="mt-1 block w-2/3 bg-gray-700 text-gray-200 border-gray-600 rounded-md shadow-sm mr-2">
                                <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-600 active:bg-blue-700 focus:outline-none focus:border-blue-700 focus:ring ring-blue-300 disabled:opacity-25 transition ease-in-out duration-150">
                                    {{ __('Add') }}
                                </button>
                            </div>
                        </form>

                        <ul>
                            @foreach($socialMediaLinks as $link)
                                <li class="flex items-center mb-2">
                                    <span class="mr-2">{{ $link->name }}: </span>
                                    <a href="{{ $link->url }}" class="text-blue-500 hover:underline">{{ $link->url }}</a>
                                    <form action="{{ route('admin.footer.destroySocialMediaLink', $link->id) }}" method="POST" class="inline-block ml-2">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 hover:text-red-700 ml-2">{{ __('Delete') }}</button>
                                    </form>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <!-- Form to add useful link -->
                <div class="bg-gray-800 shadow overflow-hidden sm:rounded-lg mt-6">
                    <div class="px-4 py-5 sm:px-6">
                        <h2 class="font-semibold text-xl leading-tight">
                            {{ __('Manage Useful Links') }}
                        </h2>
                    </div>
                    <div class="px-4 py-5 sm:p-6">
                        <form action="{{ route('admin.footer.storeUsefulLink') }}" method="POST">
                            @csrf

                            <div class="flex items-center mb-4">
                                <input type="text" name="name" placeholder="Name" class="mt-1 block w-1/3 bg-gray-700 text-gray-200 border-gray-600 rounded-md shadow-sm mr-2">
                                <input type="text" name="url" placeholder="URL" class="mt-1 block w-2/3 bg-gray-700 text-gray-200 border-gray-600 rounded-md shadow-sm mr-2">
                                <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-600 active:bg-blue-700 focus:outline-none focus:border-blue-700 focus:ring ring-blue-300 disabled:opacity-25 transition ease-in-out duration-150">
                                    {{ __('Add') }}
                                </button>
                            </div>
                        </form>

                        <ul>
                            @foreach($usefulLinks as $link)
                                <li class="flex items-center mb-2">
                                    <span class="mr-2">{{ $link->name }}: </span>
                                    <a href="{{ $link->url }}" class="text-blue-500 hover:underline">{{ $link->url }}</a>
                                    <form action="{{ route('admin.footer.destroyUsefulLink', $link->id) }}" method="POST" class="inline-block ml-2">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 hover:text-red-700 ml-2">{{ __('Delete') }}</button>
                                    </form>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
