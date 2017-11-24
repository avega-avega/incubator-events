<?php

use Illuminate\Database\Seeder;

class EventTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = incubator\Tag::get();
        incubator\Event::get()->each(function ($event) use ($tags) {
            $event->tags()->attach(
                $tags->random(rand(1, 3))->pluck('id')->toArray()
            );
        });
    }
}
