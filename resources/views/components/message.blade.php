<a href="{{ route('messages.show', $message->id) }}" class="group transform motion-reduce:transform-none hover:-translate-y-1 hover:scale-110 hover:bg-purple-600 transition ease-in-out duration-300 rounded-lg m-4 hover:text-white">
    <div class="px-4 py-5 sm:p-6">
        <h2 class="text-lg leading-6 font-bold text-white">
            {{ $message->username }}
            <br>
            <span class="text-xs">{{ $message->created_at->diffForHumans() }}</span>
            @isset($pinned)
                <span class="ml-2 mb-1 inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium leading-4 bg-purple-100 text-purple-800">
                  Pinned
                </span>
            @endisset
        </h2>
        <div class="mt-2 max-w-xl leading-5 text-gray-400 group-hover:text-white">
            <p>
                {{ Str::limit($message->body, 140) }}
            </p>
        </div>
        @auth
        <div class="mt-5">
            <span class="inline-flex rounded-md shadow-sm">
                <form action="{{ route('message.delete', $message) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="bg-gray-900 text-gray-600 hover:bg-gray-700 hover:text-gray-900 rounded p-2 mr-2 my-2"><i class="w-4 h-4" data-feather="trash"></i></button>
                </form>
            </span>
        </div>
        @endauth
    </div>
</a>
