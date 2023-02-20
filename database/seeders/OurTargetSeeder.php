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
            'target_name' => 'our mission',
            'target_desc' => 'our mission',
        ];

        ourTarget::insert($ourTarget);
    }
}
