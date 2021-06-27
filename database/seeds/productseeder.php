<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [ 
            'name'=>'LG c4 Mobile',
            'price'=>'12000',
            'description'=>'A smartphone with 4gb ram',
            'category'=>'Mobile',
            'gallery'=>''
            ],
            [
            'name'=>'Realme Mobile',
            'price'=>'15000',
            'description'=>'A smartphone with 16gb ram',
            'category'=>'Mobile',
            'gallery'=>''
            ],
            [
            'name'=>'Motorola Mobile',
            'price'=>'10000',
            'description'=>'A smartphone with 2gb ram',
            'category'=>'Mobile',
            'gallery'=>''
            ]
        ]);
    }
}
