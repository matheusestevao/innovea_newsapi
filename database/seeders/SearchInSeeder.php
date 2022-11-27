<?php

namespace Database\Seeders;

use App\Models\SearchIn;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SearchInSeeder extends Seeder
{
    protected $seachIns = [
        'title',
        'description',
        'content',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->seachIns as $value) {
            SearchIn::create([
                'name' => $value
            ]);
        }
    }
}
