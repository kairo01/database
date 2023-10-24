<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class product extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            'product_id' =>1,
            'Product_Name' =>'qwerty',
            'Description' => 'qwerty',
            'Price'=> 11,
            'QuantityInStock'=> 1000,

        ]);

        DB::table('supplier')->insert([
            'supplierID' => 11,
            'supplier_name' => 'qwerty',
            'contact_info'=> 14,
            'address'=> 'qwerty',

        ]);

        DB::table('category')->insert([
            'CategoryID' => 12,
            'category_name' => 'qwerty',          

        ]);
        DB::table('order')->insert([
            'order_ID' => 1,
            'order_date' => 99,          
            'total_amount'=> 0,
            'status'=> 'hello',

        ]);
        DB::table('customer')->insert([
            'customer_id' => 12,
            'first_name' => 'name',          
            'last_name'=> 'name',
            'email'=> '@email',
            'phone'=> 12345678,
        ]);
        DB::table('orderdetail')->insert([
            'orderdetail_ID' => 12,
            'order_ID' => 1,          
            'product_id'=> 1,
            'quantity'=> 1234,
            'subtotal'=> 12345678,
        ]);
    }
    }

