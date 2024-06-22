<footer class="bg-gray-800 text-gray-200 py-6">
    <div class="container mx-auto px-4">
        <div class="flex justify-between">
            <div class="w-1/4">
                @if($footer && $footer->logo)
                    <img src="{{ $footer->logo }}" alt="Logo" class="h-12">
                @endif
                <p class="mt-2">{{ $footer->description ?? 'Default description' }}</p>
            </div>
            <div class="w-1/4">
                <h3 class="text-lg font-semibold">{{ __('Social Media') }}</h3>
                <ul class="mt-2">
                    @foreach($footer->social_media_links ?? [] as $link)
                        <li><a href="{{ $link['url'] }}" class="text-blue-500 hover:underline">{{ $link['name'] }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="w-1/4">
                <h3 class="text-lg font-semibold">{{ __('Useful Links') }}</h3>
                <ul class="mt-2">
                    @foreach($footer->useful_links ?? [] as $link)
                        <li><a href="{{ $link['url'] }}" class="text-blue-500 hover:underline">{{ $link['name'] }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="text-center mt-6">
            <p>&copy; 2024 - Yuketsu. All rights reserved.</p>
        </div>
    </div>
</footer>
