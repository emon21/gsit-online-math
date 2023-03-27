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

        $id = rand(30, 600);
        $image = 'https://picsum.photos/id/' . $id . '/700/600';

        $board_of_director = [
            [
                'name' => 'Mr.Shohidul Islam Sagor',
                'desination' => 'Chairman',
                'work' => 'Bangladesh Tourism Explorers Association',
                'img_upload' => $image
            ],
            [
                'name' => 'Mr. Abul Faisal Mohammad Sayem',
                'desination' => 'First Vice Chairman',
                'work' => 'Holiday Shipping Lines',
                'img_upload' => $image
            ],
            [
                'name' => 'Mr. Masudul Hasan Zayedi',
                'desination' => 'Vice Chairman',
                'work' => 'Cloud Bistro',
                'img_upload' => $image
            ],
            [
                'name' => 'Mr. Zahidur Rahman Shawon',
                'desination' => 'Vice Chairman',
                'work' => 'Travelers Hub',
                'img_upload' => $image
            ],




        ];

        // $director = new board_of_director();
        // $director->name = 'Justice NizamulHaqueNasim';
        // $director->work = 'Bangladesh Press Council';
        // $director->our_dauty = 'Chairman';
        // $director->img_upload = 'https://kaverisias.com/wp-content/uploads/2018/01/catalog-default-img.gif';
        // $director->save();

        board_of_director::insert($board_of_director);
    }
}
