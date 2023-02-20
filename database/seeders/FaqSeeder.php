<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faq = [
            [
                'faq_name' => 'this title',
                'faq_description' => 'this Description',
            ]     
           
        ];

        // $faq->save();
        faq::insert($faq);

       
    }
}
