<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Pages') }}
        </h2>
    </x-slot>
<div class="flex">

    @include('admin.components.sidebar');
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="page-container">
                <a href="{{ route('pages.create') }}" class="page-button create">Create New Page</a>
                @if ($message = Session::get('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                        <span class="block sm:inline">{{ $message }}</span>
                    </div>
                @endif
                <div class="overflow-x-auto">
                    <table class="page-table">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Content</th>
                            <th width="280px">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php $i = 1; @endphp
                        @foreach ($pages as $page)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $page->title }}</td>
                                <td>{!! Str::limit($page->content, 100) !!}</td>
                                <td>
                                    <form action="{{ route('pages.destroy', $page->id) }}" method="POST" class="inline-block">
                                        <a href="{{ route('pages.show', $page->slug) }}" class="page-button show">Show</a>
                                        <a href="{{ route('pages.edit', $page->id) }}" class="page-button edit">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="page-button delete">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
