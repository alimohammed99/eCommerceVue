<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // $product = new App\Models\Product([
        //     'imagepath' => 'assets/img/plants/7.jpg',
        //     'card-title' => 'Books',
        //     'card-text' => 'aaaaaaaa',
        //     'card-price' => '500',
        // ]);
        // $product->save();


        $product = new \App\Models\Product([
            'name' => 'Luxurious Watch',
            'slug' => 'Luxurious-Watch',
            'description' => '<ul><li><i class = "icofont-check"></i>Crown Protector</li><li><i class="icofont-check"></i>WaterProof</li></ul>',
            'image' => 'aaa.jpg',
            'price' => 250.00,
            'sales_price' => 120.00,
        ]);
        $product->save();


        $product = new \App\Models\Product([
            'name' => 'Fancy Watch',
            'slug' => 'Fancy-Watch',
            'description' => '<ul><li><i class = "icofont-check"></i>Lie Detector</li><li><i class="icofont-check"></i>WaterProof</li></ul>',
            'image' => 'bbb.jpg',
            'price' => 220.00,
            'sales_price' => 100.00,
        ]);
        $product->save();


        $product = new \App\Models\Product([
            'name' => 'Party Watch',
            'slug' => 'Party-Watch',
            'description' => '<ul><li><i class = "icofont-check"></i>3 Year Protection</li><li><i class="icofont-check"></i>WaterProof</li></ul>',
            'image' => 'ccc.jpg',
            'price' => 250.00,
            'sales_price' => 120.00,
        ]);
        $product->save();


        $product = new \App\Models\Product([
            'name' => 'Pink Torex Watch',
            'slug' => 'Pink-Torex-Watch',
            'description' => '<ul><li><i class = "icofont-check"></i>PVD Coating</li><li><i class="icofont-check"></i>Awesomer Color</li></ul>',
            'image' => 'ddd.jpg',
            'price' => 223.00,
            'sales_price' => 15.00,
        ]);
        $product->save();


        $product = new \App\Models\Product([
            'name' => 'New Yellow Watch',
            'slug' => 'New-Yellow-Watch',
            'description' => '<ul><li><i class = "icofont-check"></i> Clear Super Glass</li><li><i class="icofont-check"></i>Lifetime Battery</li></ul>',
            'image' => 'aaa.jpg',
            'price' => 25000.00,
            'sales_price' => 1200.00,
        ]);
        $product->save();
    }
}
