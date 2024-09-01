<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class seedtoteachers extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('teachers')->insert([
            
            'id'=>3,
            'name'=>Str::random(10),
            'subject'=>Str::random(10),
            'sallary'=>20000,
            
        ]);
    }
}
