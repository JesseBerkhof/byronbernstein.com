@extends('master')

@section('content')
	<div class="container mx-auto">
            <div class="flex mt-24">
                <div class="w-full text-center">
                    <h1 class="text-6xl text-orange-900">
                        #CoronaDab
                    </h1>
                    <h2 class="text-4xl text-orange-900">Fighting Corona one dab at a time.</h2>
                </div>
            </div>
            <div class="flex mt-24">
                <div class="w-2/4 text-center">
                    <h2 class="text-2xl text-orange-900">
                        Cough? <span class="font-bold">DAB!</span>
                    </h2>
                </div>
                <div class="w-2/4 text-center">
                    <h2 class="text-2xl text-orange-900">
                        Sneeze? <span class="font-bold">DAB!</span>
                    </h2>
                </div>
            </div>
            <div class="flex mt-24">
                <div class="w-1/6 mx-auto text-center">
                    <a href="{{ route('preview') }}" class="block bg-yellow-600 p-4 font-bold text-yellow-900 hover:bg-yellow-700 mx-auto">
                        Tell your friends!
                    </a>
                </div>
            </div>

            <div class="flex mt-24">
                <div class="w-full text-center">
                    <h1 class="text-6xl text-orange-900">
                        Upload your dab
                    </h1>
                    <h2 class="text-4xl text-orange-900">Show us your best corona killer move.</h2>
                </div>
            </div>

            <div class="flex mt-6">
                <div class="w-2/3 mx-auto bg-red-100 p-8 shadow-md">
                    @if($errors->isNotEmpty())
                    <div class="flex mb-8">
                        <div class="w-full bg-red-400 text-red-900 p-4">
                            <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                            </ul>
                        </div>
                    </div>
                    @endif
                    <form class="w-full" action="{{ route('complaint') }}" method="POST">
                        @csrf
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full md:w-1/2 px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                                    Firstname
                                </label>
                                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="first_name" placeholder="Jane" type="text">
                            </div>
                            <div class="w-full md:w-1/2 px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                                    Lastname
                                </label>
                                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="last_name" placeholder="Doe" type="text">
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-4">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                                    City
                                </label>
                                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="city" placeholder="Schiedam" type="text">
                            </div>
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                                    Country
                                </label>
                                <div class="relative">
                                    <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="province_id">

                                    </select>
                                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                        <svg class="fill-current h-4 w-4" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-wrap mt-12 mb-2">
                            <button class="block w-full bg-gray-500 p-4 font-bold text-gray-900 hover:bg-gray-600" type="submit" disabled>
                                We are still working on this feature!
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="flex my-24">
            <div class="w-full">
                <h1 class="text-6xl text-orange-900 text-center mb-8">
                    FAQ (coming soon)
                </h1>
                <div class="w-1/3 mx-auto">
                    <ul class="list-inside sm:list-outside md:list-inside lg:list-outside xl:list-inside text-yellow-900 text-lg">
{{--                        <li class="font-bold">Why is it so important?</li>--}}
{{--                        <li class="mb-4">Er zijn veel klachten over de bezorgingen van DHL. Pakketjes die te laat of helemaal niet aankomen, bezorgers die aggressief zijn, noem het maar op. Klagen bij DHL zelf heeft niet veel zin, maar als we de webshops zelf kunnen laten weten hoe vervelend online bestellen is door de bezorgdienst die de webshop heeft gekozen. Wellicht dat zij overwegen om zich aan te sluiten bij een andere bezorgdienst.</li>--}}
{{--                        <li class="font-bold">De webshop waar ik heb besteld staat er niet bij, wat nu?</li>--}}
{{--                        <li class="mb-4">Je kunt een webshop die DHL als bezorg optie heeft <a href="{{ route('webshop.create') }}" class="font-bold hover:text-yellow-800">hier</a> gemakkelijk toevoegen</li>--}}
{{--                        <li class="font-bold">Waarom moet ik zoveel gegevens opgeven?</li>--}}
{{--                        <li class="mb-4">De gegevens gebruiken we alleen voor onze statistieken. Om aan te kunnen tonen hoeveel klachten er zijn, en waar deze vandaan komen. De gegevens worden niet vermeld in de e-mail die naar de webshop gaat.</li>--}}
                    </ul>
                </div>
            </div>
        </div>
@endsection
