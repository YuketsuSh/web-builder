<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Page') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="page-container">
                <form method="POST" action="{{ route('pages.store') }}" class="page-form">
                    @csrf
                    <label for="title">{{ __('Title') }}</label>
                    <input id="title" type="text" name="title" required autofocus />

                    <label for="content">{{ __('Content') }}</label>
                    <textarea id="content" name="content" required></textarea>

                    <label for="display_in_nav">{{ __('Display in Navigation') }}</label>
                    <input id="display_in_nav" type="checkbox" name="display_in_nav" />

                    <button type="submit" class="page-button create">Save</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('content');
    </script>
</x-app-layout>
