<div class="modal opacity-0 pointer-events-none absolute w-screen h-screen top-0 left-0 flex items-center justify-center">
    <div class="modal-overlay absolute w-screen h-screen bg-black opacity-25 top-0 left-0 cursor-pointer"></div>
    <div class="absolute w-1/4 p-8 bg-white rounded-sm shadow-lg flex items-center justify-center">
        <form class="w-full mb-4" action="{{ route('thanks.store') }}" method="POST">
            @csrf
            <div class="flex flex-wrap mb-6">
                <div class="flex mb-8">
                    <h1>Laat een bedankje achter</h1>
                </div>
                <div class="w-full mb-6">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="first_name">
                        @lang('fields.first_name')
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="first_name" placeholder="@lang('fields.placeholders.first_name')" type="text">
                </div>
                <div class="w-full mb-6 md:mb-4">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="last_name">
                        @lang('fields.last_name') (@lang('fields.optional'))
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="last_name" placeholder="@lang('fields.placeholders.last_name')" type="text">
                </div>
                <div class="w-full mb-6 md:mb-4">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="city">
                        @lang('fields.city') (@lang('fields.optional'))
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="city" placeholder="@lang('fields.placeholders.city')" type="text">
                </div>
            </div>
            <div class="flex flex-wrap mb-2">
                <button class="block w-full bg-gray-500 p-4 font-bold text-gray-900 hover:bg-red-600 hover:text-white" type="submit">
                    @lang('buttons.thanks.submit')
                </button>
            </div>
        </form>
    </div>
</div>
