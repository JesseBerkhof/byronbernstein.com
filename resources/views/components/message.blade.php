<div class="bg-gray-900 sm:rounded-lg m-2">
    <div class="px-4 py-5 sm:p-6">
        <h3 class="text-lg leading-6 font-semibold text-purple-400">
            {{ $message->username }} @isset($pinned)
                <span class="ml-2 mb-1 inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium leading-4 bg-purple-100 text-purple-800">
                  Pinned
                </span>
            @endisset
        </h3>
        <div class="mt-2 max-w-xl text-sm leading-5 text-purple-200">
            <p>
                {{ $message->body }}
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
</div>
