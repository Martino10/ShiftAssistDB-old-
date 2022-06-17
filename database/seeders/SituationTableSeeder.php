<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SituationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('situations')->insert([
            'title' => "AGGG... T",
            'description' => "Het AGT station vervoert te veel pakketten. De spin en uitloop raakt hierdoor te vol. Wat doe je?",
            'spin_volume' => 120,
            'AGT_workers' => 5,
            'AGT_output' => 300,
            'mail_workers' => 1,
            'mail_output' => 350,
            'pakket_workers' => 3,
            'pakket_output' => 340,
            'uitloop_workers' => 5,
            'uitloop_output' => 750,
        ]);
    }
}
