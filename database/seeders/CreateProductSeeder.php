<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Seeder;

class CreateProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = [
            [
                'name' => 'redmi note 9',
                'category' => 'phone',
            ],
            [
                'name' => 'hp probook 450 g5',
                'category' => 'computer',
            ],
            [
                'name' => 'Samsung A 72',
                'category' => 'phone',
            ]

        ];

        $order = [
          [
              'first_name'=>'ali',
              'last_name'=>'valiyev',
              'phone_number'=>1234567,
              'courier_name'=>'anvar',
              'status'=>'tayyorlanmoqda',
              'address'=>'tashkent',
              'product_id'=>1
          ],
            [
                'first_name'=>'vali',
                'last_name'=>'soliyev',
                'phone_number'=>1234898,
                'courier_name'=>'anvar',
                'status'=>'yetkazilmoqda',
                'address'=>'tashkent',
                'product_id'=>1
            ],
            [
                'first_name'=>'sobr',
                'last_name'=>'valiyev',
                'phone_number'=>9877898,
                'courier_name'=>'sanjar',
                'status'=>'yetkazilmoqda',
                'address'=>'fargona',
                'product_id'=>2
            ],
            [
                'first_name'=>'Sardor',
                'last_name'=>'valiyev',
                'phone_number'=>9877898,
                'courier_name'=>'sanjar',
                'status'=>'yetkazilmoqda',
                'address'=>'fargona',
                'product_id'=>3
            ],
            [
                'first_name'=>'Davron',
                'last_name'=>'valiyev',
                'phone_number'=>9877898,
                'courier_name'=>'anvar',
                'status'=>'yetkazilmoqda',
                'address'=>'fargona',
                'product_id'=>3
            ],
            [
                'first_name'=>'SaidAkbar',
                'last_name'=>'valiyev',
                'phone_number'=>9877898,
                'courier_name'=>'sanjar',
                'status'=>'yetkazilmoqda',
                'address'=>'andijon',
                'product_id'=>3
            ],
            [
                'first_name'=>'Almardon',
                'last_name'=>'valiyev',
                'phone_number'=>9877898,
                'courier_name'=>'sanjar',
                'status'=>'yetkazilmoqda',
                'address'=>'andijon',
                'product_id'=>3
            ],
            [
                'first_name'=>'Salim',
                'last_name'=>'valiyev',
                'phone_number'=>9877898,
                'courier_name'=>'sanjar',
                'status'=>'yetkazilmoqda',
                'address'=>'fargona',
                'product_id'=>2
            ]
        ];
        foreach ($product as $key => $value) {
            Product::create($value);
        }

        foreach ($order as $key => $value) {
            Order::create($value);
        }

    }
}
