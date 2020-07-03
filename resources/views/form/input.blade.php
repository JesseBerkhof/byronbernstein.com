<div class="w-full mb-6">
    <label class="block uppercase tracking-wide text-gray-600 text-xs font-bold mb-2" for="{{ $name }}">
        @lang('form.fields.' . $name)
    </label>
    <input class="appearance-none block w-full bg-gray-800 text-gray-500 border border-gray-900 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-gray-700 focus:border-gray-600" name="{{ $name }}" type="text">
</div>
