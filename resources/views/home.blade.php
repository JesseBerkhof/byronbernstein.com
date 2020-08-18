@extends('layouts.dashboard')

@section('content')
    <div class="relative pb-20 lg:pb-28">
        <div class="relative max-w-7xl mx-auto">
            <div class="mt-12 grid gap-5 max-w-lg mx-auto lg:grid-cols-2 lg:max-w-none">
                @foreach($messages as $message)
                <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                    <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                        <div class="flex-1">
                            <h3 class="mt-2 text-xl leading-7 font-semibold text-gray-900">
                                {{ $message->username }}
                            </h3>
                            <p class="mt-3 text-base leading-6 text-gray-500">
                                {{ $message->body }}
                            </p>
                        </div>
                        <div class="mt-6 flex items-center">
                            <div class="mt-5 max-w-md mx-auto sm:flex sm:justify-center md:mt-8">
                                <form action="{{ route('message.approve', $message) }}" method="POST" class="mt-3 rounded-md shadow sm:mt-0 sm:mr-3">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="w-full flex items-center justify-center px-4 py-1 border border-transparent text-base leading-6 font-medium rounded-md text-green-600 bg-white hover:text-green-500 focus:outline-none focus:border-green-300 focus:shadow-outline-green transition duration-150 ease-in-out md:py-2 md:px-4">
                                        Approve
                                    </button>
                                </form>
                                <form action="{{ route('message.delete', $message) }}" method="POST" class="rounded-md shadow">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="w-full flex items-center justify-center px-4 py-1 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-red-600 hover:bg-red-500 focus:outline-none focus:border-red-700 focus:shadow-outline-red transition duration-150 ease-in-out md:py-2 md:px-4">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
