<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Ticket;
use Faker\Factory as Faker;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 0; $i < 100; $i++) {
            DB::table('tickets')->insert([
               // 'id' => $faker->unique(),
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'cnic' => '31000-'.$faker->unique()->numberBetween(1000000, 9999999).'-8',
                'contact_no' => $faker->unique()->numberBetween(1000000000, 9999999999),
            ]);
        }
    }
}