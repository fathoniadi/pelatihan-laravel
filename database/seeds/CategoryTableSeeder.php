<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category->nama = 'Politik';
        $category->save();
        $category1 = new Category();
        $category1->nama = 'Olahraga';
        $category1->save();
    }
}
