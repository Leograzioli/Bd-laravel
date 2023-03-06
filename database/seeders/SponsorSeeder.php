<?php

namespace Database\Seeders;

use App\Models\Sponsor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SponsorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sponsors = [
            [
                'title' => 'Bronzo',
                'description' => 'Il piano Bronzo offre una giornata intera in evidenza nella home page e in piu comparirai per primo nella ricercha',
                'price' => '$2,99/mese'
            ],
            [
                'title' => 'Argento',
                'description' => 'Con il piano Argento potrai godere di 3 giorni nella sessione dedicata ai medici in evidenza e in piu comparire per primo nelle ricerche',
                'price' => '$5,99/mese'
            ],
            [
                'title' => 'Oro',
                'description' => 'Il piano Oro offre 6 giorni di sponsorizzazione per il prezzo di 3, apparendo per primo nelle ricerche e anche nella sessione di medici in evidenza',
                'price' => '$9,99/mese'
            ],

        ];
        
        foreach ($sponsors as $sponsor) {
            $newSponsor = new Sponsor();
            $newSponsor->title = $sponsor['title'];
            $newSponsor->description = $sponsor['description'];
            $newSponsor->price = $sponsor['price'];
            $newSponsor->save();
        }
    }
}
