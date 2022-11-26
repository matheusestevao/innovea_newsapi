<?php

namespace Database\Seeders;

use App\Models\ArticleClassification;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleClassificationSeeder extends Seeder
{
    protected $classification = [
        'relevancy' => 'articles_more_closely_related_to_subject_term_come_first',
        'popularity' => 'articles_from_popular_sources_and_publishers_come_first',
        'publishedAt' => 'newest_articles_come_first',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach($this->classification as $key => $value) {
            ArticleClassification::create([
                'name' => $key,
                'reference' => $value
            ]);
        }
    }
}
