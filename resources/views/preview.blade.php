@extends('master')

@section('content')
	<div class="container mx-auto">
            <div class="flex mt-24">
                <div class="w-full text-center">
                    <h1 class="text-6xl text-orange-900">
                        Voorbeeld e-mail
                    </h1>
                </div>
            </div>
            <div class="flex mt-12">
                <div class="w-1/6 mx-auto text-center">
                    <a href="{{ route('home') }}" class="block bg-yellow-600 p-4 font-bold text-yellow-900 hover:bg-yellow-700 mx-auto">
                        Terug
                    </a>
                </div>
            </div>
            <flex class="flex mt-12">
                <div class="w-2/3 mx-auto bg-red-100 p-8 shadow-md text-gray-800">
                    <p class="mb-8">
                        Jane <br>
                        info@wegmetdhl.nl <br>
                    </p>

                    <p class="mb-8">
                        <b>Primera</b> <br>
                    </p>

                    <p class="mb-8">
                        Verstuurd op: {{ Carbon\Carbon::now()->format('m-d-Y') }}
                    </p>

                    <p class="mb-8">
                        <b>Onderwerp: Ik heb een klacht over uw DHL bezorgoptie</b>
                    </p>

                    <p class="mb-8">
                        Geachte heer of mevrouw,
                    </p>

                    <p class="mb-8">
                        Ik heb een klacht over de bezorgoptie van DHL op uw webshop.
                    </p>

                    <p class="mb-8">
                        <b>Wat is het probleem?</b> <br>
                        Ik ervaar problemen met de bezorging van mijn bestellingen op uw webshop via de DHL bezorgoptie.
                    </p>

                    <p class="mb-8">
                        <b>Wat verwacht ik van u?</b> <br>
                    Ik vraag u vriendelijk om te overwegen om alternatieve bezorgopties aan te bieden op uw webshop. Aangezien de slechte ervaringen die ik heb met DHL, beïnvloed dit mijn koop gedrag op uw webshop.
                    </p>

                    <p class="mb-8">
                        <b>Extra toevoeging:</b> <br>
                        [Uw extra beschrijving]
                    </p>

                    <p class="mb-8">
                        <b>Biedt u geen oplossing?</b> <br>
                    Als u geen oplossing kan bieden kan dit invloed hebben in de bestellingen die ik bij u doe en ben ik wellicht geneigd om mijn bestellingen te plaatsen bij de concurrent die wel degelijke bezorgopties aanbiedt.
                    </p>

                    <p class="mb-8">
                        Met vriendelijke groet,
                    </p>

                    <p class="mb-8">
                        Jane, via wegmetdhl.nl
                    </p>

                    <p class="text-center text-xs text-gray-600">
                        Dit bericht is deels automatisch gegeneerd via <b>wegmetdhl.nl</b>
                    </p>
                </div>
            </div>
        </div>
@endsection