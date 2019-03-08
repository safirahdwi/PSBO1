<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'fakhri@gmail.com',
            'password' => bcrypt('dwika123'),
        ]);
    }
}