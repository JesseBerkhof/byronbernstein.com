<div class="bg-gray-900 sm:rounded-lg m-2 {{ $unapproved === true ? 'border-2 border-purple-500' : '' }}">
    <div class="px-4 py-5 sm:p-6">
        <h3 class="text-lg leading-6 font-medium text-gray-400">
            {{ $message->username }}
        </h3>
        <div class="mt-2 max-w-xl text-sm leading-5 text-gray-500">
            <p>
                {{ $message->body }}
            </p>
        </div>
        @if(in_array(\Illuminate\Support\Facades\Request::ip(), config('admins'), true))
        <div class="mt-5">
            <span class="inline-flex rounded-md shadow-sm">
                @if($unapproved === true)
                    <form action="{{ route('message.approve', $message) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <button class="bg-purple-400 text-purple-800 hover:bg-purple-300 hover:text-purple-600 rounded p-2 mr-2 my-2"><i class="w-4 h-4" data-feather="check"></i></button>
                    </form>
                @endif
                <form action="{{ route('message.delete') }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <input hidden name="message_id" value="{{ $message->id }}">
                    <button class="bg-gray-900 text-gray-600 hover:bg-gray-700 hover:text-gray-900 rounded p-2 mr-2 my-2"><i class="w-4 h-4" data-feather="trash"></i></button>
                </form>
                <form action="{{ route('ip.store') }}" method="POST">
                    @csrf
                    <input hidden name="ip" value="{{ $message->ip }}">
                    <button class="bg-gray-900 text-gray-600 hover:bg-gray-700 hover:text-gray-900 rounded p-2 mr-2 my-2"><i class="w-4 h-4" data-feather="lock"></i></button>
                </form>
            </span>
        </div>
        @endif
    </div>
</div>
