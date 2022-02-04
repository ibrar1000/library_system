<?php

use Illuminate\Database\Seeder;
use App\Book;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::create([
            'title' => 'History of Asia',
            'author' => 'john',
            'published_year' => '2015',
            'rack_id' => '1'

        ]);

         Book::create([
            'title' => 'Geography of Africa',
            'author' => 'dave',
            'published_year' => '1990',
             'rack_id' => '2'
        ]);
         Book::create([
            'title' => 'History of S.America',
            'author' => 'alice',
            'published_year' => '2000',
             'rack_id' => '1'

         ]);

    }
}
