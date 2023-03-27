<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Admin
        $admin = new Admin();
        $admin->name = 'Admin';
        $admin->email = 'admin@admin.com';
        $admin->email_verified_at = Carbon::now();
        $admin->password = bcrypt('12345678');
        $admin->save();


        //User
        $user = new User();
        $user->email = "user@mail.com";
        $user->password = bcrypt('12345678');
        $user->email_verified_at = Carbon::now();
        $user->remember_token = Str::random(10);
        $user->photo = "default.png";
        $user->save();
    }
}
