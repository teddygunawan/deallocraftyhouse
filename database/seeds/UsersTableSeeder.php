<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'fname' => 'Deallo',
            'lname' => 'Craft House',
            'email' => 'deallo@hello.com',
            'password' => bcrypt('123456'),
            'shop_id' => 1,
        ]);

        DB::table('users')->insert([
            'fname' => 'Jason',
            'lname' => 'Nguyen',
            'email' => 'jason@hello.com',
            'password' => bcrypt('123456'),
            'address1' => 'Ground Floor, Block A',
            'address2' => 'B409 – B410 Jalan Simpang Tiga',
            'zip' => '93350',
            'city' => 'Kuching',
            'state' => 'Sarawak',
            'phone' => '0173827987',
        ]);

        
    }
}
