<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Stroke;

class StrokeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $strokes = ['Freestyle', 'Backstroke', 'Breaststroke', 'Butterfly'];

        foreach ($strokes as $stroke) {
            Stroke::create([
                'type' => $stroke
            ]);
        }
    }
}
