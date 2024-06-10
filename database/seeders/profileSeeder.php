<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
// use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Str;
// use Illuminate\Support\Facades\Hash;

use App\Models\profile;
use Illuminate\Database\Seeder;

class profileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        profile::factory(300)->create();


        
        // DB::table('profiles')->insert([
        //     'fname'     => Str::random(16),
        //     'lname'     => Str::random(16),
        //     'email'     => Str::random(16) . '@gmail.com',
        //     'password'  => Hash::make('password123!'),
        //     'bio'       => Str::random(300),
        // ]);
    }
}
