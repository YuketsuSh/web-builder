<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Page') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="page-container">
                <form method="POST" action="{{ route('pages.update', $page->id) }}" class="page-form">
                    @csrf
                    @method('PUT')
                    <label for="title">{{ __('Title') }}</label>
                    <input id="title" type="text" name="title" value="{{ $page->title }}" required autofocus />

                    <label for="content">{{ __('Content') }}</label>
                    <textarea id="content" name="content" required>{{ $page->content }}</textarea>

                    <label for="display_in_nav">{{ __('Display in Navigation') }}</label>
                    <input id="display_in_nav" type="checkbox" name="display_in_nav" {{ $page->display_in_nav ? 'checked' : '' }}/>

                    <button type="submit" class="page-button create">Update</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('content');
    </script>
</x-app-layout>
