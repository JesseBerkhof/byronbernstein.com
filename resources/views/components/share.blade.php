<div class="flex mt-24">
    <div class="w-1/2 mx-auto">
        <div class="flex">
            <div class="sm:w-1/6 md:w-1/4 lg:w-1/4 xl:w-1/4 mx-auto text-center">
                <a href="https://www.facebook.com/sharer/sharer.php?u={{ config('app.url') }}" class="block bg-orange-500 sm:mr-2 xl:mr-4 sm:p-1 xl:p-4 font-bold text-orange-900 hover:bg-blue-700 hover:text-white mx-auto">
                    Facebook
                </a>
            </div>
            <div class="sm:w-1/6 md:w-1/4 lg:w-1/4 xl:w-1/4 mx-auto text-center">
                <a href="https://twitter.com/intent/tweet?text={{ trans('socials.twitter.message') }}&amp;url={{ config('app.url') }}" class="block bg-orange-500 sm:mr-2 xl:mr-4 sm:p-1 xl:p-4 font-bold text-orange-900 hover:bg-blue-500 hover:text-white mx-auto">
                    Twitter
                </a>
            </div>
            <div class="sm:w-1/6 md:w-1/4 lg:w-1/4 xl:w-1/4 mx-auto text-center">
                <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url={{ config('app.url') }}&amp;title={{ trans('socials.linkedin.title') }}&amp;summary={{ trans('socials.linkedin.message') }}" class="block bg-orange-500 sm:mr-2 xl:mr-4 sm:p-1 xl:p-4 font-bold text-orange-900 hover:bg-blue-600 hover:text-white mx-auto">
                    LinkedIn
                </a>
            </div>
            <div class="sm:w-1/6 md:w-1/4 lg:w-1/4 xl:w-1/4 mx-auto text-center">
                <a href="https://wa.me/?text={{ trans('socials.whatsapp.message') }}" class="block bg-orange-500 sm:mr-2 xl:mr-4 sm:p-1 xl:p-4 font-bold text-orange-900 hover:bg-green-700 hover:text-white mx-auto">
                    WhatsApp
                </a>
            </div>
        </div>
    </div>
</div>
