<?php

namespace Database\Seeders;

use App\Models\DailyPerson;
use App\Enums\GameType;
use Illuminate\Database\Seeder;

class DailyPersonSeeder extends Seeder
{
    public function run(): void
    {
        DailyPerson::create([
            'person_id' => 1,
            'game_type' => GameType::CLASSIC->value,
            'date' => now()->toDateString(),
        ]);

        DailyPerson::create([
            'person_id' => 2,
            'game_type' => GameType::DESCRIPTION->value,
            'date' => now()->toDateString(),
        ]);

        DailyPerson::create([
            'person_id' => 1,
            'game_type' => GameType::PHOTO->value,
            'date' => now()->toDateString(),
        ]);
    }
}

