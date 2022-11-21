<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TasksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    $user = DB::table('users')
        ->select(['id'])
        ->first();
    $user = Array($user);
    DB::table('tasks')->insert([
        'user_id' => array_rand($user),
        'title' => Str::random(10),
        'completed' =>rand(0,10),
    ]);
    }
}
