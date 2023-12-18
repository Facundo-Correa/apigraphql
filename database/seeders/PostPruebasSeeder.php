<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PostPruebasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'name' => 'Post de prueba 1',
            'text' => 'Contenido del post de prueba 1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('posts')->insert([
            'name' => 'Post de prueba 2',
            'text' => 'Contenido del post de prueba 2',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        DB::table('posts')->insert([
            'name' => 'Post de prueba 3',
            'text' => 'Contenido del post de prueba 3',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('posts')->insert([
            'name' => 'Post de prueba 4',
            'text' => 'Contenido del post de prueba 4',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('posts')->insert([
            'name' => 'Post de prueba 5',
            'text' => 'Contenido del post de prueba 5',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('posts')->insert([
            'name' => 'Post de prueba 6',
            'text' => 'Contenido del post de prueba 6',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('posts')->insert([
            'name' => 'Post de prueba 7',
            'text' => 'Contenido del post de prueba 7',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
