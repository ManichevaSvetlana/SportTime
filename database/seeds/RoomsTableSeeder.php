<?php

use Illuminate\Database\Seeder;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    DB::table('rooms')->insert([
['name'=>'Тренажерна зала'],
['name'=>'Фітнес зала'],
['name'=>'Дитяча зала'],
    ]);}    
}
