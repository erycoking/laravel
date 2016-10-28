<?php

use App\Book;
use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->delete();

        Book::create(array(
        	'title'=>'Requiem',
		    'isbn'=>'9780062014535',
		    'price'=>'13.40',
		    'cover'=>'file:///C://Users//Erycoking//Downloads//Epic_pics/buggatti.jpg',
		    'author_id'=>1
        	));
        Book::create(array(
        	'title'=>'Twilight',
		    'isbn'=>'9780316015844',
		    'price'=>'15.40',
		    'cover'=>'file:///C://Users//Erycoking//Downloads//Epic_pics/nclepic.jpg',
		    'author_id'=>2
        	));
        Book::create(array(
        	'title'=>'Deception Point',
		    'isbn'=>'9780671027384',
		    'price'=>'16.40',
		    'cover'=>'file:///C://Users//Erycoking//Downloads//Epic_pics/sexy.jpg',
		    'author_id'=>3
        	));
    }
}
