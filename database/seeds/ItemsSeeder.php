<?php

use Illuminate\Database\Seeder;
use App\Models\Items;

class ItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arDemoItemsRows = [
            ['uuid' => 'a85b44fb-034c-11ed-8c9c-005056a0b35f', 'name' => 'Бетоносмеситель SKIPER  CM-70 (70л., 375Вт., 220В)', 'amount' => 37, 'price' => 598.00],
            ['uuid' => '73fce471-988c-11ec-9db7-005056a0b35f', 'name' => 'Виброплита SKIPER C120 (Honda GX200, 6.5л.с., плита 58х50см., 20кН, 35м/мин, колёса)', 'amount' => 17, 'price' => 2592.00],
            ['uuid' => '91870352-665a-11ed-9f69-000c290cff57', 'name' => 'Электростанция BRADO LT4000B (2.8кВт, 2х230В/16А/2.5кВт, 12В, бак 15.0л)', 'amount' => 57, 'price' => 778.00],
            ['uuid' => 'ba8dbc6e-3820-11ed-b5f8-005056a0b35f', 'name' => 'Бензопила KATANA GS7000 (40 см/16\", 0.325\", 1.5 мм, 64 зв. 2.3 кВт, 45 см3)', 'amount' => 144, 'price' => 291.00],
            ['uuid' => '9337a00c-9fbd-11ec-b6ed-005056a0b35f', 'name' => 'Газонокосилка электрическая SKIPER EL3215 (1500 Вт, шир.32 см, выс. 20-50 мм (3 поз), травосб. 30 л)', 'amount' => 10, 'price' => 276.00],
            ['uuid' => 'e3ae536c-2d1a-11ed-bf47-005056a0b35f', 'name' => 'Аккумуляторная дрель-шуруповерт KATANA PROdrive 1820 (29.04.22;новый, не комплект)', 'amount' => 1, 'price' => 91.50]
        ];

        foreach ($arDemoItemsRows as $row) {
            Items::create($row);
        }
    }
}
