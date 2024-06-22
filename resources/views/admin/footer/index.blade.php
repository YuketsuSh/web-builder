<x-app-layout>
    <div class="flex">
        @include('admin.components.sidebar')

        <div class="flex-grow p-6 bg-gray-900 text-gray-200">
            <div class="max-w-7xl mx-auto">
                <div class="bg-gray-800 shadow overflow-hidden sm:rounded-lg">
                    <div class="px-4 py-5 sm:px-6">
                        <h2 class="font-semibold text-xl leading-tight">
                            {{ __('Manage Footer') }}
                        </h2>
                    </div>
                    <div class="px-4 py-5 sm:p-6">
                        <form action="{{ route('admin.footer.update', $footer->id ?? 1) }}" method="POST">
                            @csrf

                            <div class="mb-4">
                                <label for="title" class="block text-sm font-medium text-gray-300">{{ __('Title') }}</label>
                                <input type="text" name="title" id="title" value="{{ old('title', $footer->title ?? '') }}" class="mt-1 block w-full bg-gray-700 text-gray-200 border-gray-600 rounded-md shadow-sm">
                            </div>

                            <div class="mb-4">
                                <label for="content" class="block text-sm font-medium text-gray-300">{{ __('Content') }}</label>
                                <textarea name="content" id="content" class="mt-1 block w-full bg-gray-700 text-gray-200 border-gray-600 rounded-md shadow-sm">{{ old('content', $footer->content ?? '') }}</textarea>
                            </div>

                            <div class="mb-4">
                                <label for="social_media_links" class="block text-sm font-medium text-gray-300">{{ __('Social Media Links (JSON format)') }}</label>
                                <textarea name="social_media_links" id="social_media_links" class="mt-1 block w-full bg-gray-700 text-gray-200 border-gray-600 rounded-md shadow-sm">{{ old('social_media_links', json_encode($footer->social_media_links ?? [])) }}</textarea>
                            </div>

                            <div class="mb-4">
                                <label for="useful_links" class="block text-sm font-medium text-gray-300">{{ __('Useful Links (JSON format)') }}</label>
                                <textarea name="useful_links" id="useful_links" class="mt-1 block w-full bg-gray-700 text-gray-200 border-gray-600 rounded-md shadow-sm">{{ old('useful_links', json_encode($footer->useful_links ?? [])) }}</textarea>
                            </div>

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
            </div>
        </div>
    </div>
</x-app-layout>
