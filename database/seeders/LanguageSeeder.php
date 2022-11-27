<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    protected $languages = [
        'ar' => 'arabic',
        'de' => 'german',
        'en' => 'english',
        'es' => 'spanish',
        'fr' => 'french',
        'he' => 'hebrew',
        'it' => 'italian',
        'nl' => 'dutch',
        'no' => 'norwegian',
        'pt' => 'portuguese',
        'ru' => 'russian',
        'sv' => 'swedish',
        'ud' => 'urdu',
        'zh' => 'chinese',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->languages as $key => $value) {
            Language::create([
                'abbreviation' => $key,
                'name' => $value
            ]);
        }
    }
}
