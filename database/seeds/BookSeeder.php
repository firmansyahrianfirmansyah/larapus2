<?php

use Illuminate\Database\Seeder;
use App\Author;
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
        //
    	$author1 = Author::create(['name'=>'Ali Arifin']);
    	$author2 = Author::create(['name'=>'Rian Firmansyah']);
    	$author3 = Author::create(['name'=>'Fikri Furkon Azis']);

    	$book1 = Book::create(['title'=>'Aceng Si Anak Munding', 'amount'=>3, 'author_id'=>$author1->id]);
    	$book2 = Book::create(['title'=>'Jadilah Legenda', 'amount'=>2, 'author_id'=>$author2->id]);
    	$book3 = Book::create(['title'=>'City Run', 'amount'=>4, 'author_id'=>$author3->id]);
    	$book4 = Book::create(['title'=>'Assalaam Home Run', 'amount'=>3, 'author_id'=>$author3->id]);
    }
}
