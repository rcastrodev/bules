<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['name' => 'BULONES']);
        Category::create(['name' => 'ESPARRAGOS']);
        Category::create(['name' => 'VARILLA ROSCADA']);
        Category::create(['name' => 'BULONES DE ANCLAJE']);
    }
}
