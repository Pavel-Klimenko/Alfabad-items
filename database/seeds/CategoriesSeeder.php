<?php

use Illuminate\Database\Seeder;
use App\Models\Category;



class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arDemoCatRows = [
            ['name' => 'электростанции'],
            ['name' => 'электрооборудование'],
            ['name' => 'хоз_товары'],
            ['name' => 'пилы'],
            ['name' => 'бензопилы'],
        ];

        foreach ($arDemoCatRows as $row) {
            Category::create($row);
        }
    }
}
