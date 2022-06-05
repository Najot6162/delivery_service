<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Order;
use App\Models\order_product;
use App\Models\orderProduct;
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
                'price'=>15000
            ],
            [
                'name' => 'hp probook 450 g5',
                'category' => 'computer',
                'price'=>36000
            ],
            [
                'name' => 'Samsung A 72',
                'category' => 'phone',
                'price'=>18000
            ]

        ];

        $order = [
          [
              'first_name'=>'ali',
              'last_name'=>'valiyev',
              'phone_number'=>1234567,
              'courier_name'=>'anvar',
              'status'=>'tayyorlanmoqda',
              'address'=>'tashkent'
          ],
            [
                'first_name'=>'vali',
                'last_name'=>'soliyev',
                'phone_number'=>1234898,
                'courier_name'=>'anvar',
                'status'=>'yetkazilmoqda',
                'address'=>'tashkent',
            ],
            [
                'first_name'=>'sobr',
                'last_name'=>'valiyev',
                'phone_number'=>9877898,
                'courier_name'=>'sanjar',
                'status'=>'yetkazilmoqda',
                'address'=>'fargona',
            ],
            [
                'first_name'=>'Sardor',
                'last_name'=>'valiyev',
                'phone_number'=>9877898,
                'courier_name'=>'sanjar',
                'status'=>'yetkazilmoqda',
                'address'=>'fargona',
            ],
            [
                'first_name'=>'Davron',
                'last_name'=>'valiyev',
                'phone_number'=>9877898,
                'courier_name'=>'anvar',
                'status'=>'yetkazilmoqda',
                'address'=>'fargona',

            ],
            [
                'first_name'=>'SaidAkbar',
                'last_name'=>'valiyev',
                'phone_number'=>9877898,
                'courier_name'=>'sanjar',
                'status'=>'yetkazilmoqda',
                'address'=>'andijon',

            ],
            [
                'first_name'=>'Almardon',
                'last_name'=>'valiyev',
                'phone_number'=>9877898,
                'courier_name'=>'sanjar',
                'status'=>'yetkazilmoqda',
                'address'=>'andijon',

            ],
            [
                'first_name'=>'Salim',
                'last_name'=>'valiyev',
                'phone_number'=>9877898,
                'courier_name'=>'sanjar',
                'status'=>'yetkazilmoqda',
                'address'=>'fargona',

            ]
        ];

//        $order_product = [
//          [
//              'product_id'=>1,
//              'order_id'=>1,
//              'price'=>15000,
//              'quantity'=>2
//          ],
//            [
//                'product_id'=>2,
//                'order_id'=>1,
//                'price'=>2800,
//                'quantity'=>4
//            ],
//            [
//                'product_id'=>3,
//                'order_id'=>2,
//                'price'=>3000,
//                'quantity'=>6
//            ]
//        ];
        foreach ($product as $key => $value) {
            Product::create($value);
        }

        foreach ($order as $key => $value) {
            Order::create($value);
        }
//        foreach ($order_product as $key => $value) {
//           order_product::create($value);
//        }
    }
}
