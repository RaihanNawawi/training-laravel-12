    <x-layout :title="$title">
        <div class="bg-white rounded-lg shadow-lg p-6">
            <article>
                <h2 class="text-2xl font-semibold text-gray-800">Berita Terbaru</h2>

                <ul class="mt-4 space-y-4">
                    @foreach ($posts as $post)
                        <li class="p-4 bg-white border-b border-gray-200 flex gap-4">
                            <!-- IMAGE -->
                            <img src="{{ $post['img'] }}" alt="Thumbnail" class="w-48 h-28 object-cover rounded-lg">

                            <!-- TEXT -->
                            <div class="flex-1">
                                <a href="#" class="text-xl font-bold text-blue-600 hover:underline">
                                    {{ $post['title'] }}
                                </a>
                                <p class="mt-2 text-gray-600">
                                    {{ $post['content'] }}
                                </p>
                                <span class="mt-2 block text-xs text-gray-400">
                                    {{ $post['author'] }} | {{ $post['date'] }}
                                </span>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </article>
        </div>

    </x-layout>
