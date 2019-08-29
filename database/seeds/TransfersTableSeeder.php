<?php

use Illuminate\Database\Seeder;

class TransfersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transfers')->insert([
            'description' => 'Lorem ipsum dolor sit.',
            'amount' => 100,
            ''
        ]);
    }
}
