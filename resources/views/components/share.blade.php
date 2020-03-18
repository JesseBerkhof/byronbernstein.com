<div class="flex mt-24">
    <div class="w-full">
        <div class="flex lg:w-1/2 xl:w-1/2 mx-auto text-center">
            <div class="w-full">
                <h1 class="text-2xl sm:text-3xl md:text-3xl lg:text-3xl xl:text-3xl text-orange-900 mb-4">
                    @lang('texts.home.cta_social')
                </h1>
            </div>
        </div>
        <div class="flex lg:w-1/2 xl:w-1/2 mx-auto">
            <div class="w-1/4 sm:w-1/4 md:w-1/4 lg:w-1/4 xl:w-1/4 mx-auto text-center">
                <a href="https://www.facebook.com/sharer/sharer.php?u={{ config('app.url') }}" class="block bg-orange-500 mx-2 sm:mr-2 lg:mr-4 xl:mr-4 p-4 sm:p-4 xl:p-4 font-bold text-orange-900 hover:bg-blue-700 hover:text-white mx-auto">
                    Facebook
                </a>
            </div>
            <div class="w-1/4 sm:w-1/4 md:w-1/4 lg:w-1/4 xl:w-1/4 mx-auto text-center">
                <a href="https://twitter.com/intent/tweet?text={{ trans('socials.twitter.message') . config('app.url') }}&amp;url={{ config('app.url') }}" class="block bg-orange-500 mx-2 sm:mr-2 lg:mr-4 xl:mr-4 p-4 sm:p-4 xl:p-4 font-bold text-orange-900 hover:bg-blue-500 hover:text-white mx-auto">
                    Twitter
                </a>
            </div>
            <div class="w-1/4 sm:w-1/4 md:w-1/4 lg:w-1/4 xl:w-1/4 mx-auto text-center">
                <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url={{ config('app.url') }}&amp;title={{ trans('socials.linkedin.title') }}&amp;summary={{ trans('socials.linkedin.message') . config('app.url') }}" class="block bg-orange-500 mx-2 sm:mr-2 lg:mr-4 xl:mr-4 p-4 sm:p-4 xl:p-4 font-bold text-orange-900 hover:bg-blue-600 hover:text-white mx-auto">
                    LinkedIn
                </a>
            </div>
            <div class="w-1/4 sm:w-1/4 md:w-1/4 lg:w-1/4 xl:w-1/4 mx-auto text-center">
                <a href="https://wa.me/?text={{ trans('socials.whatsapp.message') . config('app.url') }}" class="block bg-orange-500 mx-2 sm:mr-2 lg:mr-4 xl:mr-4 p-4 sm:p-4 xl:p-4 font-bold text-orange-900 hover:bg-green-700 hover:text-white mx-auto">
                    WhatsApp
                </a>
            </div>
        </div>
    </div>
</div>
