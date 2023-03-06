<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Mario Rossi',
                'email' => 'mariorossi@gmail.com',
                'password' => '123123123',
                'specialization' => '1',
            ],
            [
                'name' => 'Marco Rossi',
                'email' => 'marco.rossi@gmail.com',
                'password' => '123123123',
                'specialization' => '2',
            ],
            [
                'name' => 'Chiara Bianchi',
                'email' => 'chiara.bianchi@gmail.com',
                'password' => '123123123',
                'specialization' => '3',
            ],
            [
                'name' => 'Giulia Ricci',
                'email' => 'Giulia.Ricci@gmail.com',
                'password' => '123123123',
                'specialization' => '4',
            ],
            [
                'name' => 'Luca Ferrari',
                'email' => 'luca.ferrari@gmail.com',
                'password' => '123123123',
                'specialization' => '5',
            ],
            [
                'name' => 'Antonio Russo',
                'email' => 'antonio.russo@gmail.com',
                'password' => '123123123',
                'specialization' => '6',
            ],
            [
                'name' => 'Sara Conti',
                'email' => 'sara.conti@gmail.com',
                'password' => '123123123',
                'specialization' => '7',
            ],
            [
                'name' => 'Andrea Moretti',
                'email' => 'andrea.moretti@gmail.com',
                'password' => '123123123',
                'specialization' => '8'
            ],
            [
                'name' => 'Federica Rizzo',
                'email' => 'federica.rizzo@gmail.com',
                'password' => '123123123',
                'specialization' => '9'
            ],
            [
                'name' => 'Carlo Esposito',
                'email' => 'carlo.esposito@gmail.com',
                'password' => '123123123',
                'specialization' => '10'
            ],
            [
                'name' => 'Martina Fontana',
                'email' => 'martina.fontana@gmail.com',
                'password' => '123123123',
                'specialization' => '10'
            ],
            [
                'name' => 'Fabio Lombardi',
                'email' => 'fabio.lombardi@gmail.com',
                'password' => '123123123',
                'specialization' => '2'
            ],
            [
                'name' => 'Valentina Vitale',
                'email' => 'valentina.vitale@gmail.com',
                'password' => '123123123',
                'specialization' => '4'
            ],
            [
                'name' => 'Alessandro Gallo',
                'email' => 'alessandro.gallo@gmail.com',
                'password' => '123123123',
                'specialization' => '6'
            ],
            [
                'name' => 'Laura Neri',
                'email' => 'laura.neri@gmail.com',
                'password' => '123123123',
                'specialization' => '7'
            ],
            [
                'name' => 'Matteo Santoro',
                'email' => 'matteo.santoro@gmail.com',
                'password' => '123123123',
                'specialization' => '1'
            ],
            [
                'name' => 'Silvia Ferraro',
                'email' => 'silvia.ferraro@gmail.com',
                'password' => '123123123',
                'specialization' => '2'
            ],
            [
                'name' => 'Massimo De Luca',
                'email' => 'massimo.deluca@gmail.com',
                'password' => '123123123',
                'specialization' => '9'
            ],
            [
                'name' => 'Giulia Russo',
                'email' => 'giulia.russo@gmail.com',
                'password' => '123123123',
                'specialization' => '8'
            ],
            [
                'name' => 'Davide Leone',
                'email' => 'davide.leone@gmail.com',
                'password' => '123123123',
                'specialization' => '7'
            ],
            [
                'name' => 'Eleonora Greco',
                'email' => 'eleonora.greco@gmail.com',
                'password' => '123123123',
                'specialization' => '5'
            ],
            [
                'name' => 'Giuseppe Barbieri',
                'email' => 'giuseppe.barbieri@gmail.com',
                'password' => '123123123',
                'specialization' => '6'
            ],
            [
                'name' => 'Maria Esposito',
                'email' => 'maria.esposito@gmail.com',
                'password' => '123123123',
                'specialization' => '7'
            ],
            [
                'name' => 'Daniele Riva',
                'email' => 'daniele.riva@gmail.com',
                'password' => '123123123',
                'specialization' => '10'
            ],
            [
                'name' => 'Federica De Rosa',
                'email' => 'federica.derosa@gmail.com',
                'password' => '123123123',
                'specialization' => '2'
            ],
            [
                'name' => 'Giovanni Marino',
                'email' => 'giovanni.marino@gmail.com',
                'password' => '123123123',
                'specialization' => '1'
            ],
            [
                'name' => 'Sofia Conte',
                'email' => 'sofia.conte@gmail.com',
                'password' => '123123123',
                'specialization' => '3'
            ],
            [
                'name' => 'Simone Lombardo',
                'email' => 'simone.lombardo@gmail.com',
                'password' => '123123123',
                'specialization' => '4'
            ],
            [
                'name' => 'Elisa Marchetti',
                'email' => 'elisa.marchetti@gmail.com',
                'password' => '123123123',
                'specialization' => '5'
            ],
            [
                'name' => 'Giorgio Martini',
                'email' => 'giorgio.martini@gmail.com-',
                'password' => '123123123',
                'specialization' => '6'
            ],
            [
                'name' => 'Martina Pellegrino',
                'email' => 'martina.pellegrino@gmail.com',
                'password' => '123123123',
                'specialization' => '7'
            ],
            [
                'name' => 'Emanuele Bianco',
                'email' => 'emanuele.bianco@gmail.com',
                'password' => '123123123',
                'specialization' => '9'
            ],
            [
                'name' => 'Francesca Moretti',
                'email' => 'francesca.moretti@gmail.com',
                'password' => '123123123',
                'specialization' => '2'
            ],
            [
                'name' => 'Luca Ricci',
                'email' => 'luca.ricci@gmail.com',
                'password' => '123123123',
                'specialization' => '10'
            ],
            [
                'name' => 'Martina Caruso',
                'email' => 'martina.caruso@gmail.com',
                'password' => '123123123',
                'specialization' => '1'
            ],
            [
                'name' => 'Andrea Serra',
                'email' => 'andrea.serra@gmail.com',
                'password' => '123123123',
                'specialization' => '1'
            ],
            [
                'name' => 'Martina Ferrari',
                'email' => 'martina.ferrari@gmail.com',
                'password' => '123123123',
                'specialization' => '3'
            ],
            [
                'name' => 'Roberto Costa',
                'email' => 'roberto.costa@gmail.com',
                'password' => '123123123',
                'specialization' => '5'
            ],
            [
                'name' => 'Sofia Lombardi',
                'email' => 'sofia.lombardi@gmail.com',
                'password' => '123123123',
                'specialization' => '6'
            ],
            [
                'name' => 'Marco Greco',
                'email' => 'marco.greco@gmail.com',
                'password' => '123123123',
                'specialization' => '7'
            ],
            [
                'name' => 'Federica Bianchi',
                'email' => 'federica.bianchi@gmail.com',
                'password' => '123123123',
                'specialization' => '9'
            ],
        ];
        foreach ($users as $user) {
            $newUser = new User();
            $newUser->name = $user['name'];
            $newUser->email = $user['email'];
            $newUser->password = Hash::make($user['password']);
            $newUser->save();

            $newUser->specializations()->attach($user['specialization']);
        }
    }
}
