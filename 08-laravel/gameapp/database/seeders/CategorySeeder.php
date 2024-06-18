<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        category::create([
            'name'=>'Play Station 5',
            'manufacturer' => 'Sony',
            'releasedate' => '2020-11-12',
            'description' => 'Lorem ipsum dolor sit amet',
        ]);

        $cat = new Category;
        $cat->name = 'Xbox One';
        $cat->manufacturer = 'Microsoft';
        $cat->releasedate = '2012-11-22';
        $cat->description = 'Lorem ipsum dolor sit amet';
        $cat->save();

        $cat = new Category;
        $cat->name = 'Nintendo Wii';
        $cat->manufacturer = 'Nintendo';
        $cat->releasedate = '2006-11-19';
        $cat->description = 'Lorem ipsum dolor sit amet';
        $cat->save();

        $cat = new Category;
        $cat->name = 'Xbox Series X';
        $cat->manufacturer = 'Microsoft';
        $cat->releasedate = '2020-11-10';
        $cat->description = 'Lorem ipsum dolor sit amet';
        $cat->save();
    }
}
