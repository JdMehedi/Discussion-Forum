<?php

use Illuminate\Database\Seeder;
use LaravelForum\Channel;

class ChannelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Channel::create([
            'name'=>'Laravel 5.8',
            'slug'=>str_slug('Laravel 5.8')
        ]);

        
        Channel::create([
            'name'=>'Laravel 7',
            'slug'=>str_slug('Laravel 7')
        ]);

        
        Channel::create([
            
            'name'=>'Laravel 5',
            'slug'=>str_slug('Laravel 5')
        ]);


        
        Channel::create([
            'name'=>'Laravel 8',
            'slug'=>str_slug('Laravel 8')
        ]);
    }
}
