<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'imagePath' => 'https://images.gr-assets.com/books/1389929874l/140671.jpg',
            'title' => 'The Black Company',
            'description' => 'Follow the Black Company destiny',
            'price' => 12
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/511RvCsDsTL._SX322_BO1,204,203,200_.jpg',
            'title' => 'The Black Company',
            'description' => 'Follow the Black Company destiny',
            'price' => 12
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/51uRYOKULuL.jpg',
            'title' => 'Book of the South',
            'description' => 'Follow the Black Company destiny',
            'price' => 12
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://images.gr-assets.com/books/1389929874l/140671.jpg',
            'title' => 'The Black Company',
            'description' => 'Follow the Black Company destiny',
            'price' => 12
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/511RvCsDsTL._SX322_BO1,204,203,200_.jpg',
            'title' => 'The Black Company',
            'description' => 'Follow the Black Company destiny',
            'price' => 12
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://images.gr-assets.com/books/1389929874l/140671.jpg',
            'title' => 'The Black Company',
            'description' => 'Follow the Black Company destiny',
            'price' => 12
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/51uRYOKULuL.jpg',
            'title' => 'Book of the South',
            'description' => 'Follow the Black Company destiny',
            'price' => 12
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/511RvCsDsTL._SX322_BO1,204,203,200_.jpg',
            'title' => 'The Black Company',
            'description' => 'Follow the Black Company destiny',
            'price' => 12
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/71kPcNyqHHL.jpg',
            'title' => 'The many deaths of the Black Company',
            'description' => 'Follow the Black Company destiny',
            'price' => 12
        ]);
        $product->save();

    }
}
