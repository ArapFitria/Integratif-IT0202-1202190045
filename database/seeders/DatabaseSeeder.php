<?php

namespace Database\Seeders;

use DOMXPath;
use DOMDocument;
use App\Models\Rss;
use App\Models\Post;
use App\Models\Image;
use App\Models\Category;
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

        Rss::create([
            'name' => 'Headline News',
            'username' => 'headlinenews',
            'url' => 'https://www.voaindonesia.com/api/z-jqtevyoq'
        ]);


        Rss::create([
            'name' => 'Islam',
            'username' => 'islam',
            'url' => 'https://www.voaindonesia.com/api/z_rmqverumqt'
        ]);

        Rss::create([
            'name' => 'Indonesia',
            'username' => 'indonesia',
            'url' => 'https://www.voaindonesia.com/api/zmgo_ebmiy'
        ]);
        


        $myXMLData = file_get_contents("https://www.voaindonesia.com/api/z-jqtevyoq");
        $myXMLData2 = file_get_contents("https://www.voaindonesia.com/api/z_rmqverumqt");
        $myXMLData3 = file_get_contents("https://www.voaindonesia.com/api/zmgo_ebmiy");
        $xml = simplexml_load_string($myXMLData) or die("Error : Cannot create object");
        $xml2 = simplexml_load_string($myXMLData2) or die("Error : Cannot create object");
        $xml3 = simplexml_load_string($myXMLData3) or die("Error : Cannot create object");
        
        foreach ($xml3->channel->item as $item) {
            Post::create([
                'title' => $item->title,
                'category' => $item->category,
                'url' => $item->link,
                'img' => $item->enclosure['url'],
                'description' => $item->description,
                'rss_id' => 3
            ]);
        }

        foreach ($xml2->channel->item as $item) {
            Post::create([
                'title' => $item->title,
                'category' => $item->category,
                'url' => $item->link,
                'img' => $item->enclosure['url'],
                'description' => $item->description,
                'rss_id' => 2
            ]);
        }

        foreach ($xml->channel->item as $item) {
            Post::create([
                'title' => $item->title,
                'category' => NULL,
                'url' => $item->link,
                'img' => $item->enclosure['url'],
                'description' => $item->description,
                'rss_id' => 1
            ]);
        }

        // foreach ($xml->channel->item as $item) {
        //     Post::create([
        //         'title' => $item->title,
        //         'category' => $item->category,
        //         'url' => $item->guid,
        //         'img' => $item->children('media', True)->content->attributes(),
        //         'rss_id' => 1
        //     ]);
        // }
    }
}
