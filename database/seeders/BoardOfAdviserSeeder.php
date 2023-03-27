<?php

namespace Database\Seeders;

use App\Models\board_of_adviser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BoardOfAdviserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $adviser = new board_of_adviser();
        // $adviser->name = 'Justice NizamulHaqueNasim';
        // $adviser->desination = 'Advisor in Chief';
        // $adviser->work = 'Bangladesh Press Council';
        // $adviser->our_dauty = 'Chairman';
        // $adviser->img_upload = 'https://kaverisias.com/wp-content/uploads/2018/01/catalog-default-img.gif';
        // $adviser->save();

        $id = rand(30, 600);
        $image = 'https://picsum.photos/id/' . $id . '/700/600';

        $board_of_adviser= [

            [
                'name' => 'R. A. M. Obaidul Muktadir Chowdhury',
                'desination' => 'Chairman',
                'our_dauty' => 'Patron in Chief',
                'work' => 'Parliamentary Standing Committee on Ministry of Civil Aviation and Tourism',
                'img_upload' => $image
            ],
            [
                'name' => 'Justice Nizamul Haque Nasim',
                'desination' => 'Chairman',
                'our_dauty' => 'Advisor in Chief',
                'work' => 'Bangladesh Press Council',
                'img_upload' => $image
            ],
            [
                'name' => 'Mr. R. M. G. Nasir Majumder',
                'desination' => 'Chairman',
                'our_dauty' => 'Director, FBCCI',
                'work' => 'Century Group',
                'img_upload' => $image
            ],
            [
                'name' => 'Mr. Rafiuzzaman',
                'desination' => 'Honorary President of TOAB and Member of Bangladesh Tourism Board',
                'our_dauty' => '',
                'work' => 'Proprietor of Straightway Tours and Travels',
                'img_upload' => $image
            ],


        ];

        board_of_adviser::insert($board_of_adviser);
    }
}
