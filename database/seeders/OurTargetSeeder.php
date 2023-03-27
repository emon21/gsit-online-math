<?php

namespace Database\Seeders;

use App\Models\ourTarget;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OurTargetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ourTarget = [
            'our_mission' => 'Our Mission is to perform and deliver knowledge about Tourism which was the Biggest DreamBangabandhuSheikh Mujibur Rahman. In that way young generation can learn about BangabandhuSheikh Mujibur Rahman and tourism and sports sector in Bangladesh.',
            'our_vision' => 'Our vision is tocreate innovators and leaders and in the concepts of Bangladesh tourism and sports for Bangladeshi nation.',
            'our_goal' => 'By Traveling whole Bangladesh we can let young students/generation know about tourism, sports and Bangabandhu – The Great Philosopher, Nature Lover and Tourist Champion will glorify Tourism in Bangladesh as “Father of Tourism Industry”.',
        ];

        ourTarget::insert($ourTarget);
    }
}
