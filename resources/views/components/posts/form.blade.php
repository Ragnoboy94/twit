@props(['posts'])
    <div class="card">
        <form>
            <textarea class="form-control"></textarea>
        </form>
    </div>
@forelse ($posts as $post)
    <div>
        <a href="#" class="block hover:bg-gray-50">
            <div class="px-4 py-4 sm:px-6">
                <div class="flex items-center justify-between">
                    <p class="text-sm font-medium text-indigo-600 truncate">
                        {{ $post->text }}
                    </p>
                </div>
            </div>
        </a>
    </div>
@endforeach
