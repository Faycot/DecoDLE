<?php
 
namespace Database\Seeders;
 
use App\Models\Person;
use Illuminate\Database\Seeder;
 
class PersonSeeder extends Seeder
{
    public function run(): void
    {
        $people = [
            [
                'first_name' => 'Enzo',
                'last_name' => 'Moita',
                'photo_path' => 'photos/Enzo.png',
                'description' => 'Passionné de course à pied.',
                'class' => '3A Dev',
                'gender' => 'Homme',
                'age' => 23,
                'height' => 184,
                'hair_color' => 'Brun',
                'city' => 'Paris',
                'hobby' => 'Sport / Gaming',
                'specialization' => 'Dev',
            ],
            [
                'first_name' => 'Axel',
                'last_name' => 'Barbellion',
                'photo_path' => 'photos/Axel.png',
                'description' => 'Quasiment plus rien sur le caillou',
                'class' => '3A Dev',
                'gender' => 'Homme',
                'age' => 22,
                'height' => 174,
                'hair_color' => 'Brun',
                'city' => 'Campagne',
                'hobby' => 'One piece / Faire des crêpes',
                'specialization' => 'Dev',
            ],
        ];
    foreach ($people as $person) {
            Person::create($person);
        }
    }
}