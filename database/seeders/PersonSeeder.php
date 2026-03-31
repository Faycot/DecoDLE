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
                'first_name' => 'Lucas',
                'last_name' => 'Martin',
                'description' => 'Passionné de cybersécurité, il passe ses weekends à participer à des CTF. Toujours un hoodie noir sur le dos.',
                'class' => 'B3 Dev',
                'gender' => 'Homme',
                'age' => 21,
                'height' => 182,
                'hair_color' => 'Brun',
                'city' => 'Strasbourg',
                'hobby' => 'CTF / Hacking',
                'specialization' => 'Dev',
            ],
            [
                'first_name' => 'Emma',
                'last_name' => 'Dupont',
                'description' => 'Toujours la première arrivée en cours. Elle ne se sépare jamais de son carnet de croquis.',
                'class' => 'B2 Design',
                'gender' => 'Femme',
                'age' => 20,
                'height' => 165,
                'hair_color' => 'Blond',
                'city' => 'Colmar',
                'hobby' => 'Dessin',
                'specialization' => 'Design',
            ],
        ];
    foreach ($people as $person) {
            Person::create($person);
        }
    }
}