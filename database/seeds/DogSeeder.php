<?php

use Illuminate\Database\Seeder;

class DogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dogs')->insert([
            [
                'name'=>'firulas',
                'age'=>3
            ],
            [
                'name'=>'scoob',
                'age'=>6
            ]
            ,
            [
                'name'=>'mohe',
                'age'=>1
            ]
        ]);
    }
}
