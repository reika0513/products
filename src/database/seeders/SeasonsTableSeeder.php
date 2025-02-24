<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SeasonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seasons = [
        'name' => '春',
        ];
        DB::table('seasons')->insert($seasons);
        $seasons = [
        'name' => '夏',
        ];
        DB::table('seasons')->insert($seasons);
        $seasons = [
        'name' => '秋',
        ];
        DB::table('seasons')->insert($seasons);
        $seasons = [
        'name' => '冬',
        ];
        DB::table('seasons')->insert($seasons);
    }
}
