<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RouteSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('routes')->insert([
            ['name' => 'JR西日本', 'sort_no' => 1],
            ['name' => '地下鉄空港線', 'sort_no' => 2],
            ['name' => '地下鉄七隈線', 'sort_no' => 3],
        ]);
    }
}
