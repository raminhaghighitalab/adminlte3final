<?php

namespace Database\Seeders;

use App\Models\AreaChart;
use App\Models\Information;
use App\Models\Order;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Information::query()->truncate();
        AreaChart::query()->truncate();
        Order::query()->truncate();
        // \App\Models\User::factory(10)->create();

        DB::table('information')->insert([
            ['cpu_traffic' => '25', 'likes' => '42500', 'sales' => '125400', 'new_members' => '2000']
        ]);

        DB::table('area_charts')->insert([
            [
                'title'=>'Sales: 1 Jan, 2014 - 30 Jul, 2014',
                'labels' => '[ "test","February","March","April","May","June","July"]',
                'datasets' => '[
   {
      "label":"Digital Goods",
      "backgroundColor":"rgba(60,141,188,0.9)",
      "borderColor":"rgba(60,141,188,0.8)",
      "pointRadius":false,
      "pointColor":"#3b8bba",
      "pointStrokeColor":"rgba(60,141,188,1)",
      "pointHighlightFill":"#fff",
      "pointHighlightStroke":"rgba(60,141,188,1)",
      "data":[
         28,
         48,
         40,
         19,
         86,
         27,
         90
      ]
   },
   {
      "label":"Electronics",
      "backgroundColor":"rgba(210, 214, 222, 1)",
      "borderColor":"rgba(210, 214, 222, 1)",
      "pointRadius":false,
      "pointColor":"rgba(210, 214, 222, 1)",
      "pointStrokeColor":"#c1c7d1",
      "pointHighlightFill":"#fff",
      "pointHighlightStroke":"rgba(220,220,220,1)",
      "data":[
         65,
         59,
         80,
         81,
         56,
         55,
         40
      ]
   }
]',
                'options' => '{
   "maintainAspectRatio":false,
   "responsive":true,
   "legend":{
      "display":false
   },
   "scales":{
      "xAxes":[
         {
            "gridLines":{
               "display":false
            }
         }
      ],
      "yAxes":[
         {
            "gridLines":{
               "display":false
            }
         }
      ]
   }
}',
            ]
        ]);

        DB::table('orders')->insert([
            [
                'item' => 'first Item',
                'status' => 'Delivered',
                'Popularity' => '122460',
                'color' => 'primary'
            ],
            [
                'item' => 'second Item',
                'status' => 'processing',
                'Popularity' => '1254820',
                'color' => 'danger'
            ],
            [
                'item' => 'third Item',
                'status' => 'Pending',
                'Popularity' => '987456321',
                'color' => 'warning'
            ],
            [
                'item' => 'forth Item',
                'status' => 'Shipped',
                'Popularity' => '1245784511',
                'color' => 'success'
            ],
            [
                'item' => 'fifth Item',
                'status' => 'Delivered',
                'Popularity' => '987412541',
                'color' => 'info'
            ],
        ]);


    }
}
