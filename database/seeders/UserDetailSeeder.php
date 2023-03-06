<?php

namespace Database\Seeders;

use App\Models\user_detail;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserDetailSeeder extends Seeder
{
    
    public function run(): void
    {
        $faker = Faker::create('it_IT');
        $descriptions = [
            "Sono un cardiologo specializzato nella diagnosi e nel trattamento delle malattie cardiovascolari, come l'ipertensione e l'infarto. Utilizzo le ultime tecniche diagnostiche e terapeutiche per garantire la migliore assistenza ai miei pazienti.",
            "Sono un immunologo che si concentra sulla diagnosi e sulla gestione delle malattie del sistema immunitario, come l'asma e le allergie. Utilizzo terapie innovative per migliorare la qualità della vita dei miei pazienti.",
            "Sono un dermatologo esperto nella diagnosi e nel trattamento delle malattie della pelle, come l'acne e il melanoma. Utilizzo le più recenti tecnologie per offrire ai miei pazienti i migliori risultat",
            "Sono un nefrologo specializzato nella diagnosi e nel trattamento delle malattie renali, come la nefrite e l'insufficienza renale. Utilizzo approcci personalizzati per garantire una cura ottimale ai miei pazient",
            "Sono un gastroenterologo che si occupa della diagnosi e della gestione delle malattie dell'apparato digerente, come la colite e il reflusso gastroesofageo. Fornisco ai miei pazienti cure individualizzate e di alta qualità.",
            "Sono un urologo che si concentra sulla diagnosi e sulla gestione delle malattie dell'apparato urinario, come la prostatite e il cancro alla vescica. Offro ai miei pazienti soluzioni innovative e personalizzate per ogni esigenza.",
            "Sono un esperto in malattie infettive che si dedica alla diagnosi e alla cura di infezioni virali e batteriche, come l'HIV e l'epatite. Utilizzo una vasta gamma di trattamenti per garantire la migliore assistenza ai miei pazienti.",
            "Sono un oculista specializzato nella diagnosi e nella cura delle malattie degli occhi, come la cataratta e il glaucoma. Utilizzo tecniche all'avanguardia per migliorare la vista dei miei pazienti.",
            "Sono un ginecologo che si concentra sulla salute della donna, dalla prevenzione alla diagnosi e al trattamento di malattie come il cancro al seno e l'endometriosi. Offro ai miei pazienti una cura attenta e personalizzata.",
            "Sono un endocrinologo che si dedica alla diagnosi e alla cura delle malattie ormonali, come il diabete e l'ipotiroidismo. Utilizzo le più recenti tecnologie per offrire ai miei pazienti un trattamento efficace e personalizzato."
        ];
        $performances = [
            'Anestesista',
            'Eletrocardiograma',
            'Chirurgo',
            'Ecografia',
            'Raggi',
            'Visita Sportiva',
        ];

        for ($i=0; $i < 41; $i++) { 
            $newUserDetail = new user_detail();
            $newUserDetail->address = $faker->address();
            $newUserDetail->phone = $faker->phoneNumber();
            $newUserDetail->description = $descriptions[$faker->numberBetween(0, 9)];
            $newUserDetail->performance = $performances[$faker->numberBetween(0, 5)];
            $newUserDetail->user_id = $i+1;
            $newUserDetail->save();
        }
    }
}
