<?php

use Illuminate\Database\Seeder;
use \App\Glasses;

class GlassesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Glasses::create([
            'name'          => 'Night Angel',
            'brand'         => 'Ray-Ban',
            'description'   => 'Some Description Here ..',
            'image'         => '1.png',
            'color'         => 'black,brown',
            'price'         => '587',
            'is_available'  => true,
        ]);

        Glasses::create([
            'name'          => 'Angel Die',
            'brand'         => 'Tom Ford',
            'description'   => 'Some Description Here ..',
            'image'         => '2.png',
            'color'         => 'black,brown',
            'price'         => '680',
            'is_available'  => true,
        ]);

        Glasses::create([
            'name'          => 'Mountain',
            'brand'         => 'Hugo Boss',
            'description'   => 'Some Description Here ..',
            'image'         => '3.png',
            'color'         => 'black,brown',
            'price'         => '169',
            'is_available'  => true,
        ]);

        Glasses::create([
            'name'          => 'Tough',
            'brand'         => 'Tom Ford',
            'description'   => 'Some Description Here ..',
            'image'         => '4.png',
            'color'         => 'black,red',
            'price'         => '690',
            'is_available'  => true,
        ]);

        Glasses::create([
            'name'          => 'Party Wear',
            'brand'         => 'Hugo Boss',
            'description'   => 'Some Description Here ..',
            'image'         => '1.png',
            'color'         => 'pink,brown',
            'price'         => '1850',
            'is_available'  => true,
        ]);

        Glasses::create([
            'name'          => 'Slim Face',
            'brand'         => 'Tom Ford',
            'description'   => 'Some Description Here ..',
            'image'         => '2.png',
            'color'         => 'black',
            'price'         => '800',
            'is_available'  => true,
        ]);

        Glasses::create([
            'name'          => 'Fat Look',
            'brand'         => 'Hugo Boss',
            'description'   => 'Some Description Here ..',
            'image'         => '3.png',
            'color'         => 'black,brown',
            'price'         => '500',
            'is_available'  => true,
        ]);

        Glasses::create([
            'name'          => 'Fancy Curve',
            'brand'         => 'Oliver Peoples',
            'description'   => 'Some Description Here ..',
            'image'         => '4.png',
            'color'         => 'black,olive',
            'price'         => '1500',
            'is_available'  => true,
        ]);

        Glasses::create([
            'name'          => 'Night Light',
            'brand'         => 'Hugo Boss',
            'description'   => 'Some Description Here ..',
            'image'         => '1.png',
            'color'         => 'black,brown',
            'price'         => '105',
            'is_available'  => true,
        ]);

        Glasses::create([
            'name'          => 'Day Bright',
            'brand'         => 'Oliver Peoples',
            'description'   => 'Some Description Here ..',
            'image'         => '2.png',
            'color'         => 'black,brown',
            'price'         => '150',
            'is_available'  => true,
        ]);
    }
}
