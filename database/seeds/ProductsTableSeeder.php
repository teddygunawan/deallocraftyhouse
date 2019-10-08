<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Turquoise Chain',
            'description' => 'A beautiful chain necklace with an inset turquoise.',
            'price' => 10,
            'file_id' => 1,
            'shop_id' => 1,
            'sub_category_id' => 7,
        ]);
        DB::table('products')->insert([
            'name' => 'Amber Necklace',
            'description' => 'A delicate amber necklace.',
            'price' => 15,
            'file_id' => 2,
            'shop_id' => 1,
            'sub_category_id' => 7,
        ]);
        DB::table('products')->insert([
            'name' => 'Marble Necklace',
            'description' => 'Heavy stone necklace.',
            'price' => 25,
            'file_id' => 3,
            'shop_id' => 1,
            'sub_category_id' => 7,
        ]);
        DB::table('products')->insert([
            'name' => 'Wooden Bracelet',
            'description' => 'Simple wooden bracelet which for some reason is one of the most popular items on this website.',
            'price' => 20,
            'file_id' => 4,
            'shop_id' => 1,
            'sub_category_id' => 10,
        ]);
        DB::table('products')->insert([
            'name' => 'Brass Kettle',
            'description' => 'Kettle made of brass, excellent in making coffee.',
            'price' => 18,
            'file_id' => 5,
            'shop_id' => 2,
            'sub_category_id' => 17,
        ]);
        DB::table('products')->insert([
            'name' => 'Copper Kettle',
            'description' => 'Kettle made of copper perfect for brewing that special blend of joe in the morning.',
            'price' => 30,
            'file_id' => 6,
            'shop_id' => 2,
            'sub_category_id' => 17,
        ]);
        DB::table('products')->insert([
            'name' => 'Classic Kettle',
            'description' => 'Ye olde kettle to boil water without any of that fancy electricity stuff just like the good old days!',
            'price' => 32,
            'file_id' => 7,
            'shop_id' => 2,
            'sub_category_id' => 17,
        ]);
        DB::table('products')->insert([
            'name' => 'Bronze Cups',
            'description' => 'Two bronze cups perfect for the daring couple who wants to up the ante at their friends drinking parties.',
            'price' => 15,
            'file_id' => 8,
            'shop_id' => 2,
            'sub_category_id' => 17,
        ]);
        DB::table('products')->insert([
            'name' => 'How I Met Your Mother',
            'description' => 'Spoiler alert she dies at the end of this story.',
            'price' => 19,
            'file_id' => 9,
            'shop_id' => 3,
            'sub_category_id' => 11,
        ]);
        DB::table('products')->insert([
            'name' => 'I Love You & I Like You',
            'description' => 'But I cannot be with you, insert tragic love song here.',
            'price' => 20,
            'file_id' => 10,
            'shop_id' => 3,
            'sub_category_id' => 11,
        ]);
        DB::table('products')->insert([
            'name' => 'You Looked It Up',
            'description' => 'Made you look up didnt it?',
            'price' => 22,
            'file_id' => 11,
            'shop_id' => 3,
            'sub_category_id' => 11,
        ]);
        DB::table('products')->insert([
            'name' => 'Harry Potter',
            'description' => 'This picture/poster actually has nothing to do with Harry Potter.',
            'price' => 25,
            'file_id' => 12,
            'shop_id' => 3,
            'sub_category_id' => 11,
        ]);
    }
}
