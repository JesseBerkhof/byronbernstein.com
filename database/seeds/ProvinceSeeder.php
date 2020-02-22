<?php

use Illuminate\Database\Seeder;

class ProvinceSeeder extends Seeder
{

	private $provinces = [
        'Groningen',
        'Friesland',
        'Drenthe',
        'Overijssel',
        'Flevoland',
        'Gelderland',
        'Utrecht',
        'Noord-Holland',
        'Zuid-Holland',
        'Zeeland',
        'Noord-Brabant',
        'Limburg',
	];

    public function run()
    {
        foreach ($this->provinces as $province) {
        	if (App\Province::query()->where('name', $province)->exists()) {
        		continue;
        	}

        	DB::table('provinces')->insert([
        		'name' => $province
        	]);
        }
    }
}
