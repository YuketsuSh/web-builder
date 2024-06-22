<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="flex">
        @include('admin.components.sidebar');

        <div class="w-3/4 p-6">
            @if ($message = Session::get('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                    <span class="block sm:inline">{{ $message }}</span>
                </div>
            @endif
            <h3 class="font-semibold text-xl text-gray-800 dark:text-gray-200">{{ __('Welcome to Admin Dashboard') }}</h3>
        </div>
    </div>
</x-app-layout>
