<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Collection;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            'title' => 'Lies, Damned Lies, and Marketing Statistics',
            'excerpt' => 'We tell stories in digital media using metrics like impressions and conversions. For brand building lots of impressions is linked with awareness. In performance media, conversion tracking links advertising with business results... or does it?',
            'published_at' => '2020-12-10',
            'category' => 'work',
            'body' => file_get_contents('database/seeders/posts/statistics-in-marketing.md')
        ]);
        Post::create([
            'title' => 'Grow Customer Loyalty the Unintuitive Way',
            'excerpt' => 'As marketers we like to think that our sophistacted loyalty schemes and targeted marketing messages help us to maintain loyal customers. The reality however, is less intuitive.',
            'published_at' => '2021-02-03',
            'category' => 'work',
            'body' => file_get_contents('database/seeders/posts/grow-customer-loyalty.md')
        ]);
        Post::create([
            'title' => 'Advertising Could be Apple\'s Next $50b',
            'excerpt' => 'Over the past three years Apple has taken a wrecking ball to digital advertising\'s data-industrial complex. Now there\'s speculation that they\'re coming to pick up some of the pieces.',
            'published_at' => '2022-08-19',
            'category' => 'work',
            'body' => file_get_contents('database/seeders/posts/apple-programmatic-advertising.md')
        ]);
        Post::create([
            'title' => 'Ad Supported Streaming Sucks for Everyone, Even Advertisers',
            'excerpt' => 'Streaming is the media party that advertising wasn\'t really invited to. Now streamers like Netflix and Disney+ are opening up the invite, but that doesn\'t mean it\'s a party worth showing up for.',
            'published_at' => '2022-09-21',
            'category' => 'work',
            'body' => file_get_contents('database/seeders/posts/ad-supported-streaming-sucks.md')
        ]);
        Post::create([
            'title' => 'Adjectives in a Job Title 🚩',
            'excerpt' => 'More adjectives in a job title don\'t make the job seem more exciting or important.',
            'published_at' => '2023-03-24',
            'category' => 'work',
            'body' => file_get_contents('database/seeders/posts/adjectives-in-job-titles.md')
        ]);

        $collection = Collection::create([
            'name' => 'Cancun 2022',
            'body' => 'Bringing in the New Year in Mexico!',
            'category' => 'travel',
        ]);
        Post::create([
            'title' => 'Getting to Cancun',
            'collection_id' => $collection->id,
            'excerpt' => 'Kicking off our trip to Cancun, our trip away since moving to Toronto! Lots of queues, and lots of taxis drivers.',
            'published_at' => '2023-01-15',
            'category' => 'travel',
            'body' => file_get_contents('database/seeders/posts/day-1.md')
        ]);
        Post::create([
            'title' => 'Gone Sailing!',
            'collection_id' => $collection->id,
            'excerpt' => 'Meeting up with Yif and Millie to go sailing! A day and night to bring the new year in with them on their boat.',
            'published_at' => '2023-01-15',
            'category' => 'travel',
            'body' => file_get_contents('database/seeders/posts/day-2.md')
        ]);
        Post::create([
            'title' => 'Lounging Around',
            'collection_id' => $collection->id,
            'excerpt' => 'After a full on day of sailing and New Years celebrations, we didn\'t really do anything except lie around. It was brilliant!',
            'published_at' => '2023-01-15',
            'category' => 'travel',
            'body' => file_get_contents('database/seeders/posts/day-3.md')
        ]);
        Post::create([
            'title' => 'Melting into the Pavement',
            'collection_id' => $collection->id,
            'excerpt' => 'We were meant to go to the museum, but we melted in the sun instead. The Iguana\'s were cool though!',
            'published_at' => '2023-01-15',
            'category' => 'travel',
            'body' => file_get_contents('database/seeders/posts/day-4.md')
        ]);
        Post::create([
            'title' => 'The El Classico Bus Tour',
            'collection_id' => $collection->id,
            'excerpt' => 'We really wanted to see Chichen Itza so we booked a tour. There were a few complications, but it was still a great excursion!',
            'published_at' => '2023-01-15',
            'category' => 'travel',
            'body' => file_get_contents('database/seeders/posts/day-5.md')
        ]);
        Post::create([
            'title' => 'A Quiet Day, and a Big Night',
            'collection_id' => $collection->id,
            'excerpt' => 'We have had a full on few days at this point and spent most of our time lying around before finishing off with a big night at Coco Bongo.',
            'published_at' => '2023-01-15',
            'category' => 'travel',
            'body' => file_get_contents('database/seeders/posts/day-6.md')
        ]);

    }
}
