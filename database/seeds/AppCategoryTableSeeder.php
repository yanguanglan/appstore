<?php

use Illuminate\Database\Seeder;
use App\AppCategory;

class AppCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $categories = [
        	'社交娱乐',
        	'射击竞速',
        	'冒险益智',
        	'场景体验',
        	'其他',
        ];

        foreach ($categories as $value) {
        	AppCategory::create([
	        	'category'=>$value,
        	]);
        }
    }
}
