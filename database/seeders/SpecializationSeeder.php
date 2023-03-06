<?php

namespace Database\Seeders;

use App\Models\Specialization;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SpecializationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $specializarionArray = ['Cardiologo', 'Immunologo', 'Dermatologo', 'Nefrologo', 'Gastroenterologo', 'Urologo', 'Malattie Infettive', 'Oculista', 'Ginecologo', 'Endocrinologo'];

        foreach($specializarionArray as $specialization){
            
            $newSpecialization = new Specialization();
            $newSpecialization->title = $specialization;
            $newSpecialization->slug = Str::slug($specialization);
            $newSpecialization->save();
        }

    }
}
