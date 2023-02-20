<?php

namespace Database\Seeders;

use App\Models\board_of_director;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BoardOfDirectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $board_of_director = [
            'name' => 'Mr.Shohidul Islam Sagor',
            'desination' => 'Chairman',
            'work' => 'Bangladesh Tourism Explorers Association'
        ];

        board_of_director::insert($board_of_director);
    }
}
