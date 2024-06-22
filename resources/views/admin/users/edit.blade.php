<x-app-layout>
    <div class="flex">
        @include('admin.components.sidebar')

        <div class="flex-1 p-6">
            <div class="max-w-4xl mx-auto bg-white dark:bg-gray-800 shadow-md rounded-lg p-6">
                <h2 class="text-2xl font-semibold text-gray-800 dark:text-gray-200">{{ __('Edit User') }}</h2>

                <form action="{{ route('admin.users.update', $user->id) }}" method="POST" class="mt-4">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('Name') }}</label>
                        <input type="text" name="name" id="name" class="block w-full mt-1 border-gray-300 dark:border-gray-600 rounded-md shadow-sm" value="{{ $user->name }}" required>
                    </div>

                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('Email') }}</label>
                        <input type="email" name="email" id="email" class="block w-full mt-1 border-gray-300 dark:border-gray-600 rounded-md shadow-sm" value="{{ $user->email }}" required>
                    </div>

                    <div class="mb-4">
                        <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('Password') }}</label>
                        <input type="password" name="password" id="password" class="block w-full mt-1 border-gray-300 dark:border-gray-600 rounded-md shadow-sm">
                        <small class="text-gray-500 dark:text-gray-400">{{ __('Leave blank to keep current password') }}</small>
                    </div>

                    <div class="mb-4">
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('Confirm Password') }}</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="block w-full mt-1 border-gray-300 dark:border-gray-600 rounded-md shadow-sm">
                    </div>

                    <div class="mb-4">
                        <label for="role" class="block text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('Role') }}</label>
                        <select name="role" id="role" class="block w-full mt-1 border-gray-300 dark:border-gray-600 rounded-md shadow-sm">
                            @foreach($roles as $role)
                                <option value="{{ $role->name }}" @if($user->roles->pluck('name')->first() == $role->name) selected @endif>{{ $role->name }}</option>
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
