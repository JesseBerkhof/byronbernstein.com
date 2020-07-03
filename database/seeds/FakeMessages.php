<?php

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FakeMessages extends Seeder
{
    public function run(): void
    {
        for($i = 0; $i < 1000; $i++) {
            DB::table('messages')->insert([
                'username' => '[TEST] ' . Factory::create('en')->userName,
                'body' => Factory::create('en')->text(200),
                'ip' => Factory::create('en')->ipv4,
                'approved_at' => now(),
            ]);
        }
    }
}
