<?php

namespace Database\Seeders;

use App\Models\Message;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('it_IT');
        $messages = [
            "Salve dottore, sono stato colpito da un forte mal di schiena e vorrei prenotare un appuntamento per una visita specialistica. Potrebbe dirmi quale sarebbe il percorso terapeutico più adatto in questo caso? Ho letto di terapie manuali, fisioterapia e farmaci ma non so quale sia il migliore. Grazie in anticipo per la sua risposta.",
            "Buongiorno dottore, sono affetto da una patologia dermatologica cronica che si sta aggravando. Vorrei prenotare una visita per una consulenza specialistica al fine di valutare la situazione e capire come trattare il problema. Potrebbe anche suggerirmi qualche prodotto specifico che potrebbe aiutare a lenire i sintomi? La ringrazio in anticipo per la sua attenzione.",
            "Buongiorno dottore, ho notato dei disturbi alla vista e mi preoccupa che possano essere sintomi di una patologia oculare. Vorrei prenotare un appuntamento per una visita specialistica e per un eventuale controllo della vista. Potrebbe anche indicarmi se è necessario portare con me qualche documento o referto? Grazie mille per la sua gentilezza.",
            "Buongiorno dottore, sono affetto da diabete di tipo 2 e vorrei prenotare una visita specialistica per verificare come sta evolvendo la mia condizione e se è necessario adottare eventuali accorgimenti. Potrebbe cortesemente indicarmi anche quali sono gli esami del sangue da effettuare per monitorare la mia situazione? La ringrazio per la sua disponibilità.",
            "Buonasera dottore, sono una giovane donna che soffre di forti dolori addominali durante il ciclo mestruale. Vorrei prenotare una visita ginecologica per capire se ci sono patologie sottostanti che stanno causando questi disturbi e per valutare la possibilità di assumere qualche farmaco per attenuare il dolore. Potrebbe anche suggerirmi qualche rimedio naturale che potrebbe aiutare? La ringrazio tanto per la sua cortesia.",
            "Salve dottore, sono affetto da un disturbo del sonno che sta influendo sulla mia qualità di vita. Vorrei prenotare una visita specialistica per capire quale sia la causa del problema e se è possibile adottare qualche terapia farmacologica o comportamentale per risolverlo. Potrebbe anche indicarmi qualche consiglio generale per migliorare la qualità del sonno? Grazie mille per la sua attenzione.",
            "Buongiorno dottore, sono affetto da ipertensione arteriosa e vorrei prenotare una visita specialistica per capire come sta evolvendo la mia situazione e per verificare l'efficacia della terapia farmacologica che sto seguendo. Potrebbe anche indicarmi se ci sono degli accorgimenti da adottare nella vita quotidiana per mantenere la pressione sotto controllo? La ringrazio in anticipo per la sua disponibilità.",
            "Gentile dottore, ho bisogno di prenotare una visita neurologica per mia madre che soffre di forti mal di testa da diversi giorni. Vorrei chiederle se è possibile effettuare una visita a breve termine e quali sono le possibili cause di questi mal di testa. Grazie in anticipo per la sua disponibilità",
            "Buongiorno dottore, ho bisogno di effettuare una visita cardiologica per un controllo generale. Vorrei chiederle quali sono gli esami che dovrò effettuare e se è possibile effettuare la visita entro la fine del mese. Grazie per l'attenzione.",
            "Salve dottore, vorrei prenotare una visita per un controllo oculistico in quanto ho notato di avere qualche problema di vista. Vorrei chiederle se è necessario portare degli esami e quando è possibile prenotare la visita. Grazie per l'aiuto.",
            "Buongiorno dottore, ho bisogno di prenotare una visita dermatologica per una possibile dermatite. Vorrei chiederle quali sono i sintomi della dermatite e se è necessario effettuare degli esami specifici. Inoltre, vorrei sapere quando è possibile prenotare la visita. Grazie in anticipo.",
            "Salve dottore, ho bisogno di effettuare una visita ginecologica. Vorrei chiederle quali sono i controlli che dovrò effettuare e se è possibile effettuare la visita entro la fine del mese. Grazie per l'attenzione.",
            "Gentile dottore, ho bisogno di effettuare una visita ortopedica in quanto soffro di dolori alla schiena da diversi mesi. Vorrei chiederle quali sono le possibili cause di questi dolori e se è necessario effettuare degli esami specifici. Inoltre, vorrei sapere quando è possibile prenotare la visita. Grazie in anticipo.",
            "Buongiorno dottore, ho bisogno di effettuare una visita pneumologica in quanto soffro di problemi respiratori da diversi mesi. Vorrei chiederle quali sono i controlli che dovrò effettuare e se è possibile effettuare la visita entro la fine del mese. Grazie per l'attenzione.",
            "Salve, ho bisogno di informazioni riguardo ad una visita oculistica. Quali sono le prossime date disponibili e il costo? e mi servirebbero informazioni riguardo ad un esame del sangue che devo fare. Potrebbe cortesemente indicarmi il costo e se necessita di prenotazione? ",
        ];
        
        for ($i=0; $i < 100 ; $i++) { 
            $newMessage = new Message();
            $newMessage->name = $faker->name();
            $newMessage->accountholder = $faker->email();
            $newMessage->message = $messages[$faker->numberBetween(0, 14)];
            $newMessage->is_read = false;
            $newMessage->user_id = $faker->numberBetween(1, 41);
            $newMessage->save();            
        }
    }
}
