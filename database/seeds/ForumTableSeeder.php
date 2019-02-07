<?php

use Illuminate\Database\Seeder;

class ForumTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $forums = [
            [
                'title' => [
                    'en'=>'Questions and answers about the tricks',
                    'dk'=>'Spørgsmål og problemer vedr. tricks',
                    'de'=>'Fragen & Probleme zu den Tricks',
                    'fr'=>'Questions et problèmes concernant les astuces',
                    'it'=>'Domande e problemi sui trucchi',
                    'nl'=>'Vragen & problemen over de trucs',
                    'no'=>'Spørsmål og problemer om triksene',
                    'fi'=>'Kysymyksiä & ongelmia koskien kikkoja',
                    'se'=>'Frågor & problem hos trick',

                    ],
                'text'=>[
                    'en' => 'This is where you will find answers to general questions and queries regarding our tricks.',
                    'dk' => 'Her kan det diskuteres generelt om tricks. Uanset om du har spørgsmål om eller problemer med gennemførelsen af et trick.',
                    'de' => 'Hier darf allgemein über die Tricks diskutiert werden. Egal ob du Fragen oder Probleme bei der Umsetzung eines Tricks hast.',
                    'fr' => 'Ici, vous pouvez discuter des astuces de manière générale. Que vous ayez des questions ou des problèmes concernant la mise en application d\'une astuce.',
                    'it' => 'Qui si può discutere sui trucchi in generale. Non importa se hai domande o problemi con la conversione di un trucco.',
                    'nl' => 'Hier kan in het algemeen over de trucs worden gediscussieerd. Het maakt niet uit of je vragen of problemen hebt met de conversie van een truc.',
                    'no' => 'Her kan det generelt diskuteres om triksene. Enten du har spørsmål eller problemer med gjennomføringen av et triks.',
                    'fi' => 'Täällä voidaan keskustella kikoista yleisellä tasolla. Onpa sinulla sitten kysymys tai ongelma jonkin kikan toteuttamiseen liittyen.',
                    'se' => 'Här kan trick diskuteras i allmänhet. Oavsett om du har frågor eller problem med genomförandet av ett trick.',

                ]

            ],
            [
                'title' => [
                    'en'=>'Questions and answers about the tricks',
                    'dk'=>'Spørgsmål og problemer om systemet',
                    'de'=>'Fragen & Probleme zum System',
                    'fr'=>'Questions et problèmes concernant le système',
                    'it'=>'Domande e problemi sul sistema',
                    'se'=>'Frågor & problem i systemet',
                    'fi'=>'Kysymyksiä & ongelmia koskien järjestelmää',
                    'no'=>'Spørsmål og problemer om systemet',
                    'nl'=>'Vragen & problemen over het systeem',

                ],
                'text'=>[
                    'en' => 'This is where you will find answers to general questions and queries regarding our tricks.',
                    'dk' => 'Her kan der diskuteres generelt om CasinoCode-systemet. Hvis du finder fejl på vores platform, kan du også rapportere dem her.',
                    'de' => 'Hier darf allgemein über das CasinoCode System diskutiert werden. Solltest du Fehler bei uns auf der Plattform finden, kannst du diese hier auch gerne melden.',
                    'fr' => 'Ici, vous pouvez discuter du système CasinoCode de manière générale. Si vous trouvez des erreurs sur notre plateforme, vous pouvez également les signaler ici.',
                    'it' => 'Qui si può discutere in generale sul sistema CasinoCode. Se trovi dei bug sulla nostra piattaforma, puoi segnalarli anche qui.',
                    'se' => 'Här kan CasinoCode-systemet diskuteras i allmänhet. Om du hittar fel på vår plattform kan du även rapportera dem här.',
                    'fi' => 'Täällä voidaan keskustella CasinoCode-järjestelmästä yleisellä tasolla. Jos löydät virheitä alustastamme, voit myös ilmoittaa niistä täällä.',
                    'no' => 'Her kan det generelt diskuteres om CasinoCode-systemet. Hvis du finner feil på plattformen, kan du også rapportere dem her.',
                    'nl' => 'Hier kan in het algemeen over het CasinoCode System worden gediscussieerd. Als je fouten op ons platform vindt, kan je deze hier ook melden.',

                ]

            ],
            [
                'title' => [
                    'en'=>'Questions and answers about the tricks',
                    'dk'=>'Spørgsmål og problemer på casinoer',
                    'de'=>'Fragen & Probleme bei Casinos',
                    'fr'=>'Questions et problèmes concernant les casinos',
                    'it'=>'Domande e problemi sui casinò',
                    'nl'=>' Vragen & Problemen bij Casino\'s',
                    'no'=>' Spørsmål og problemer på kasinoer',
                    'fi'=>' Kysymyksiä & ongelmia koskien kasinoita',
                    'se'=>' Frågor & problem hos kasinon',

                ],
                'text'=>[
                    'en' => 'This is where you will find answers to general questions and queries regarding our tricks.',
                    'dk' => 'Hvis du oplever problemer med et casino, kan du få hjælp her.',
                    'de' => 'Solltest du Probleme mit einem Casino haben kannst du hier Hilfe bekommen.',
                    'fr' => 'Si vous avez des problèmes avec un casino, vous pouvez obtenir de l\'aide ici.',
                    'it' => 'Se hai problemi con un casinò puoi chiedere aiuto qui.',
                    'nl' => 'Als je problemen ondervindt met een Casino kan je hier hulp krijgen.',
                    'no' => 'Hvis du har problemer med et kasino, kan du få hjelp her.',
                    'fi' => 'Jos sinulla on ongelmia jonkin kasinon kanssa, saat apua täältä.',
                    'se' => 'Om du har problem med ett kasino kan du få hjälp här.',

                ]
            ],
            [
                'title' => [
                    'en'=>'Questions and answers about the tricks',
                    'dk'=>'Andre spørgsmål',
                    'de'=>'Sonstige Fragen',
                    'fr'=>'Autres questions',
                    'it'=>'Altre domande',
                    'nl'=>'Andere vragen',
                    'no'=>'Flere spørsmål',
                    'fi'=>'Muita kysymyksiä',
                    'se'=>'Övriga frågor',
                ],
                'text'=>[
                    'en' => 'This is where you will find answers to general questions and queries regarding our tricks.',
                    'dk' => 'Alt andet, der ikke passer til andre steder, kommer ind her.',
                    'de' => 'Alles andere was sonst nirgends reinpasst, kommt hier rein.',
                    'fr' => 'Tout ce qui ne rentre pas dans les autres catégories peut être signalé ici.',
                    'it' => 'Qui trovi qualsiasi cosa che non si adatta a nessun\'altra discussione.',
                    'nl' => 'Alles wat nergens anders past, komt hier te staan.',
                    'no' => 'Alt som ikke passer noe annet sted, kommer inn her.',
                    'fi' => 'Kaikki aiheet, jotka eivät sovi muualle, tulevat tänne.',
                    'se' => 'Allt annat som inte passar någon annanstans kommer in här.',
                ]

            ],
    ];




        foreach ($forums as $forum){
            \App\Forum::create($forum);
//            DB::table('forums')->insert($forum);
        }
    }
}
