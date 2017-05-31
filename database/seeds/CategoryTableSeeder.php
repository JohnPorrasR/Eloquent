<?php

use Illuminate\Database\Seeder;
use EloquentORM\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Category::class, 4)->create();
    }
}
