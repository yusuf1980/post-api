<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use Faker\Factory as Faker;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        Category::create([
        	'name' => 'Announcement',
        	'slug' => 'announcement',
        	'meta_key' => 'annaouncement, information',
        	'meta_description' => $faker->text($maxNbChars = 200),
        	]);
        Category::create([
        	'name' => 'Article',
        	'slug' => 'article',
        	'meta_key' => 'article, post',
        	'meta_description' => $faker->text($maxNbChars = 200),
        	]);
        Category::create([
        	'name' => 'News',
        	'slug' => 'news',
        	'meta_key' => 'news, new information',
        	'meta_description' => $faker->text($maxNbChars = 200),
        	]);
    }
}
