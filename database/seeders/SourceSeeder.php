<?php

namespace Database\Seeders;

use App\Models\Source;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SourceSeeder extends Seeder
{
    protected $sources = [
        'ar' => 'argentina',
        'gr' => 'greece',
        'nl' => 'netherlands',
        'za' => 'south_africa',
        'au' => 'australia',
        'hk' => 'hong_kong',
        'nz' => 'new_zealand',
        'kr' => 'south_korea',
        'at' => 'austria',
        'hu' => 'hungary',
        'ng' => 'nigeria',
        'se' => 'sweden',
        'be' => 'belgium',
        'in' => 'india',
        'no' => 'norway',
        'ch' => 'switzerland',
        'br' => 'brazil',
        'id' => 'indonesia',
        'ph' => 'philippines',
        'tw' => 'taiwan',
        'bg' => 'bulgaria',
        'ie' => 'ireland',
        'pl' => 'poland',
        'th' => 'thailand',
        'ca' => 'canada',
        'il' => 'israel',
        'pt' => 'portugal',
        'tr' => 'turkey',
        'cn' => 'china',
        'it' => 'italy',
        'ro' => 'romania',
        'ae' => 'uae',
        'co' => 'colombia',
        'jp' => 'japan',
        'ru' => 'russia',
        'ua' => 'ukraine',
        'cu' => 'cuba',
        'lv' => 'latvia',
        'sa' => 'saudi_arabia',
        'gb' => 'united_kingdon',
        'cz' => 'czech_republic',
        'lt' => 'lithuania',
        'rs' => 'serbia',
        'us' => 'united_states',
        'eg' => 'egypt',
        'my' => 'malaysia',
        'sg' => 'singapore',
        've' => 'venuzuela',
        'fr' => 'france',
        'mx' => 'mexico',
        'sk' => 'slovakia',
        'de' => 'germany',
        'ma' => 'morocco',
        'si' => 'slovenia'
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->sources as $key => $value) {
            Source::create([
                'abbreviation' => $key,
                'name' => $value
            ]);
        }
    }
}
