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
    </div>
</a>
