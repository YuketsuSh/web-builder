<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Page Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="page-container">
                <h1 class="text-2xl font-bold">{{ $page->title }}</h1>
                <p class="mt-4">{!! $page->content !!}</p>
                <a href="{{ route('pages.index') }}" class="page-button">Back</a>
            </div>
        </div>
    </div>
</x-app-layout>
