<?php

namespace Database\Seeders;

use App\Models\OrganizMember;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrganizMemberSeeder extends Seeder
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

        $OrganizMember = [

            [
                'organiz_name' => 'R. A. M. ObaidulMuktadir Chowdhury',
                'organiz_desination' => ' Chairman',
                'desination_title' => 'Patron in Chief',
                'work' => 'Parliamentary Standing Committee on Ministry of Civil Aviation and Tourism.',
                'organiz_picture' => $image
            ],
            [
                'organiz_name' => 'Justice Nizamul Haque Nasim',
                'organiz_desination' => 'Chairman',
                'desination_title' => 'Advisor in Chief',
                'work' => 'Bangladesh Press Council',
                'organiz_picture' => $image
            ],
            [
                'organiz_name' => 'Mr. M. G. R.  Nasir Majumdar',
                'organiz_desination' => 'Parichak',
                'desination_title' => 'Advisor',
                'work' => 'Federation of Bangladesh Chambers of Commerce and Industry (FBCCI)',
                'organiz_picture' => $image
            ],
            [
                'organiz_name' => 'Mr. Khabir Uddin Ahmed',
                'organiz_desination' => 'Member',
                'desination_title' => 'Advisor',
                'work' => 'Bangladesh Tourism Board and President, TRIAB.',
                'organiz_picture' => $image
            ],


        ];

        OrganizMember::insert($OrganizMember);
    }
}
