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
                'title' => 'Questions and answers about the tricks',
                'text' => 'This is where you will find answers to general questions and queries regarding our tricks.',

            ],
            [
                'title' => 'Questions and answers about the system',
                'text' => 'Here you can generally discuss the CasinoCode system. If you find any bugs on our platform, you can also report them here.',

            ],
            [
                'title' => 'Questions and answers about the casinos',
                'text' => 'Any issues with the registration, the casino platform, the games or provider in general? This is the right place to post.',

            ],
            [
                'title' => 'Miscellaneous questions',
                'text' => 'Any other topic can be posted here.
',

            ],

        ];

        




        foreach ($forums as $forum){
            DB::table('forums')->insert($forum);
        }
    }
}
