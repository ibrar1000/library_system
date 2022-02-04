<?php

use Illuminate\Database\Seeder;
use App\Rack;
class RacksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rack::create([
            'name' => 'History ',
            'books_count' => '2'


        ]);
        Rack::create([
            'name' => 'Geography',
            'books_count' => '1'

        ]);
    }
}
