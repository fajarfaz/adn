<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        
    	for ($i=0; $i < 10; $i++) { 
    		$name = $faker->sentence;
    		DB::table('categories')->insert([
	            'name' => $name,
	            'slug' => Str::slug($name),
	            'keywords' => $faker->sentence,
	            'meta_desc' => $faker->sentence,
	        ]);
    	}
    	
    }
}
