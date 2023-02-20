<?php

namespace Database\Seeders;

use App\Models\AboutUS;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutUSSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $About_us = [
            'about_olympiad' => 'About Olympiad',
            'about_olympiad_desc' => "Father of the Nation Bangabandhu and the country called Bangladesh on the map are each other’s compliment all over the world. Therefore, the image of Bangabandhu is called the legendary image of tourism. Tourism is the world's second largest industrial sector, after petroleum and chemicals, contributing about 10% of the world's gross domestic product. In terms of global employment, 1 in every 10 people is engaged in tourism and 30% of total service exports are from this sector. But the huge potential sector is unknown to the youth of Bangladesh. Needlessly to say",
            'about_btea' => 'About BTEA',
            'about_btea_desc' => "Bangladesh Tourism Explorers Association (BTEA), was formed in the year of 2019. This was the time when a handful of agencies operating tours inside Bangladesh, felt the need of such an association or trade body to overcome immense problems and difficulties being faced by themregularly. Besides this, the other main objective or aim of the organization was to develop and nourish tourism in Bangladesh and to promote tourism products of Bangladesh in the international arena. In tourism, all over the world tourist's expectations are very high for a hazard less traveling, secured food & lodging, efficient spot-visits, economically cost-effective transaction in every step whether it is a business or a personal recreational tour. To fulfill these demands of an individual or group of tourists the tour operators come into picture and provide all the services they need. They are like one-stop service provider starting from their arrival to departure in case of the overseas tourists and from your house back to your house in case of local tourist either it is inside the country or to a foreign land. In Bangladesh where the infrastructure of this industry is not well developed it is always recommended that a tourist should arrange his travel here through a member of BTEA, which will be more safe and authentic. BTEA maintains excellent relationship with Ministry of Civil Aviation and Tourism, Bangladesh Parjatan Corporation, Bangladesh Tourism board, Bangladesh Tourist police, Bangladesh Tourism Foundation and other trade bodies. Since the beginning of BTEA, its members have been actively participating in different national trade fairs in Bangladesh.",
         
        ];
        
        AboutUS::insert($About_us);
    }
}
