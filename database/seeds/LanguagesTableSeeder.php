<?php

use Illuminate\Database\Seeder;

class LanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $languages = [
            [
                'country' => 'English',
                'code' => 'en',
            ],
            [
                'country' => 'Dansk',
                'code' => 'dk',
            ],
            [
                'country' => 'Deutch',
                'code' => 'de',
            ],
            [
                'country' => 'Francias',
                'code' => 'fr',
            ],
            [
                'country' => 'Italiano',
                'code' => 'it',
            ],
            [
                'country' => 'Nederlands',
                'code' => 'nl',
            ],
            [
                'country' => 'Norsk',
                'code' => 'no',
            ],
            [
                'country' => 'Suomi',
                'code' => 'fi',
            ],
            [
                'country' => 'Svenska',
                'code' => 'se',
            ],


        ];

        foreach($languages as $language){
            DB::table('languages')->insert($language);
        }
    }
}
