<div class="w-1/4 bg-gray-800 text-white h-screen">
    <div class="p-4">
        <h3 class="font-semibold text-lg">{{ __('Admin Menu') }}</h3>
        <ul class="mt-4">
            <li class="py-2">
                <a href="{{ route('admin.dashboard') }}" class="text-gray-200 hover:text-white" data-section="dashboard">{{ __('Dashboard') }}</a>
            </li>
            <li class="py-2">
                <a href="{{ route('pages.index') }}" class="text-gray-200 hover:text-white" data-section="manage-pages">{{ __('Manage Pages') }}</a>
            </li>
            <li class="py-2">
                <a href="{{ route('admin.nav-items.index') }}" class="text-gray-200 hover:text-white" data-section="manage-navbar">{{ __('Manage Navbar') }}</a>
            </li>
            <li class="py-2">
                <a href="{{ route('admin.users.index') }}" class="text-gray-200 hover:text-white" data-section="manage-navbar">{{ __('Manage Users') }}</a>
            </li>
        </ul>
    </div>
</div>
