<?php

namespace Database\Seeders;

use App\Models\Feedback;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class FeedbackSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('it_IT');

        $feedbackArray = [
            'Il tuo lavoro è stato eccellente. Hai dimostrato grande competenza e precisione nella tua attività, il che ha portato a risultati di altissima qualità. Continua così!',
            'Sono molto soddisfatto del lavoro che hai svolto. Hai dimostrato una grande attenzione ai dettagli e hai completato il lavoro in modo efficiente. Grazie per il tuo impegno.',
            'Il tuo contributo è stato molto apprezzato. Hai dimostrato di avere una grande creatività e di saper trovare soluzioni innovative ai problemi. Continua a pensare fuori dagli schemi!',
            'Hai dimostrato di essere un professionista molto competente e affidabile. Hai completato il lavoro entro i tempi previsti e con grande attenzione ai dettagli. Grazie per il tuo impegno.',
            'Sono rimasto molto colpito dal tuo approccio al lavoro. Hai dimostrato grande passione e dedizione per ciò che fai, il che si è riflesso nella qualità del lavoro prodotto. Continua così!',
            'Hai dimostrato di avere ottime capacità comunicative e di saper gestire con grande diplomazia situazioni difficili. Grazie per aver contribuito a mantenere un clima sereno e collaborativo.',
            'Il tuo lavoro è stato di altissima qualità. Hai dimostrato di avere una grande padronanza delle competenze richieste e di saperle applicare in modo efficace. Grazie per il tuo contributo prezioso.',
            'Hai dimostrato una grande flessibilità e adattabilità alle esigenze del progetto. Grazie per aver saputo gestire le situazioni di cambiamento in modo rapido ed efficace.',
            'Sono molto soddisfatto del lavoro che hai svolto. Hai dimostrato di avere una grande attenzione alle esigenze del cliente e di saper soddisfare le loro richieste in modo accurato e tempestivo.',
            'Hai dimostrato di avere una grande capacità di lavorare in team e di saper collaborare con gli altri in modo costruttivo. Grazie per aver contribuito a creare un ambiente di lavoro positivo e produttivo.',
        ];
        for ($i=0; $i < 100 ; $i++) { 

            $newFeedback = new Feedback();
            $newFeedback->name = $faker->name();
            $newFeedback->vote = $faker->numberBetween(1, 5);
            $newFeedback->feedback_description= $feedbackArray[$faker->numberBetween(0, 9)];
            $newFeedback->user_id = $faker->numberBetween(1, 41);
            $newFeedback->save();

        }
    }
}
