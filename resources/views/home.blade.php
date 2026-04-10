    <x-layout :title="$title">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900">Welcome to My Laravel Training</h1>
            <p class="mt-4 text-lg text-gray-600">This is the home page of your Laravel application. Use this space to
                introduce your site and provide links to important sections.</p>
            {{-- Blade Directives 'For()' , 'If()' Loop --}}
            <div class="flex space-x-3 mt-4">
                @for ($i = 1; $i <= 10; $i++)
                    @if ($i % 2 === 1)
                        <div class="w-8 h-8 bg-teal-500 text-white grid place-items-center p-0 me-1 text-xs">
                            {{ $i }}</div>
                    @endif
                @endfor
            </div>
    </x-layout>
