<?php

use Illuminate\Database\Seeder;

class WebshopSeeder extends Seeder
{
	private $webshops = [
        'Bax-shop',
        'Primera',
	];

    public function run()
    {
        foreach ($this->webshops as $webshop) {
        	if (App\Webshop::query()->where('name', $webshop)->exists()) {
        		continue;
        	}

        	DB::table('webshops')->insert([
        		'name' => $webshop,
                'active' => true
        	]);
        }
    }
}
