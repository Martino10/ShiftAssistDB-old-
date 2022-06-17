<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class OptionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('options')->insert([
            'situation_id' => 1,
            'option_text' => "Loopband stilzetten",
            'feedback' => "Incorrect. In deze situatie is het probleem nog niet heel groot. De loopband stilzetten is dus een erg exteme oplossing, die veel tijd kost.",
        ]);

        DB::table('options')->insert([
            'situation_id' => 1,
            'option_text' => "Minder werkers bij AGT",
            'feedback' => "Correct. Er komen te veel pakketten uit de AGT afdeling. Het verminderen van de werkers kan er voor zorgen dat dit minder wordt.",
            'correct' => 1,
        ]);

        DB::table('options')->insert([
            'situation_id' => 1,
            'option_text' => "Meer werkers bij Mail",
            'feedback' => "Incorrect. Meer werkers zorgen voor meer uitvoer, en de mail afdeling heeft dat momenteel niet nodig. Sterker nog, dit zou ervoor zorgen dat de uitloop nog voller raakt.",
        ]);
    }
}
