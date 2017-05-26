<?php

use Illuminate\Database\Seeder;
use App\Article;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::create([
        	'name'=>'El barril de petroleo subió',
        	'image'=>'imgs/articles/petroleo.png',
        	'content'=>'Lorem ipsum dolor sit amet',
        	'category_id'=> 1,
        ]);
        Article::create([
        	'name'=>'Nairo maglia rosa en la etapa 19',
        	'image'=>'imgs/articles/nairo.png',
        	'content'=>'Lorem ipsum dolor sit amet',
        	'category_id'=> 3,
        ]);
        Article::create([
        	'name'=>'Actualizacion de seguridad nintendo Switch',
        	'image'=>'imgs/articles/nintendo.png',
        	'content'=>'Lorem ipsum dolor sit amet',
        	'category_id'=> 5,
        ]);
        
    }
}
