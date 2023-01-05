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
                'faq_title' => 'this title',
                'faq_desc' => 'this title',
            ],
            [
                'faq_title' => 'this title',
                'faq_desc' => 'this title',
            ],
            [
                'faq_title' => 'this title',
                'faq_desc' => 'this title',
            ]
           
           
        ];

        // $faq->save();
        faq::insert($faq);

       
    }
}
