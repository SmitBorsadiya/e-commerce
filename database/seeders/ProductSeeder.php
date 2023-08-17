<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')
        ->insert([
            [
                'name'=>'Apple',
                'price'=>'50000',
                'description'=>'A smartphone with Android 13 features',
                'category'=>'Mobile',
                'gallery'=>'https://www.google.com/aclk?sa=l&ai=DChcSEwihp8f9wIL8AhWIfSsKHbMnAUYYABABGgJzZg&sig=AOD64_2q-pwWMl9-O5M2P2p5bJvlmNE24w&adurl&ctype=5&ved=2ahUKEwiohLr9wIL8AhUyjNgFHQanB1oQvhd6BAgBEGs'
            ],
            [
                'name'=>'Samsung',
                'price'=>'20000',
                'description'=>'A smartphone with Android 13 features',
                'category'=>'Mobile',
                'gallery'=>'https://www.google.com/aclk?sa=l&ai=DChcSEwihp8f9wIL8AhWIfSsKHbMnAUYYABABGgJzZg&sig=AOD64_2q-pwWMl9-O5M2P2p5bJvlmNE24w&adurl&ctype=5&ved=2ahUKEwiohLr9wIL8AhUyjNgFHQanB1oQvhd6BAgBEGs'
            ],
            [
                'name'=>'Realme',
                'price'=>'15000',
                'description'=>'A smartphone with Android 13 features',
                'category'=>'Mobile',
                'gallery'=>'https://www.google.com/aclk?sa=l&ai=DChcSEwihp8f9wIL8AhWIfSsKHbMnAUYYABABGgJzZg&sig=AOD64_2q-pwWMl9-O5M2P2p5bJvlmNE24w&adurl&ctype=5&ved=2ahUKEwiohLr9wIL8AhUyjNgFHQanB1oQvhd6BAgBEGs'
            ],
            [
                'name'=>'Nokia',
                'price'=>'13000',
                'description'=>'A smartphone with Android 13 features',
                'category'=>'Mobile',
                'gallery'=>'https://www.google.com/aclk?sa=l&ai=DChcSEwihp8f9wIL8AhWIfSsKHbMnAUYYABABGgJzZg&sig=AOD64_2q-pwWMl9-O5M2P2p5bJvlmNE24w&adurl&ctype=5&ved=2ahUKEwiohLr9wIL8AhUyjNgFHQanB1oQvhd6BAgBEGs'
            ]
        ]);
    }
}
