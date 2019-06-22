<?php

use Illuminate\Database\Seeder;

class PublishersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('ja_JP');
        $now   = \Carbon\Carbon::now();
        for ($i = 0; $i < 10; $i++)
        {
            $publisher = [
                'name' => $faker->company,
                'address' => $faker->address,
                'created_at' => $now,
                'updated_at' => $now,
            ];
            DB::table('publishers')->insert($publisher);
        }
    }
}
