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
        $OrganizMember = [
            'organiz_name' => 'R. A. M. ObaidulMuktadir Chowdhury',
            'organiz_dezation' => 'Chairman',
            'organiz_desc' => 'Parliamentary Standing Committee on Ministry of Civil Aviation and Tourism.',
            'organiz_picture' => 'default.jpg',
         
        ];

        OrganizMember::insert($OrganizMember);
    }
}
