<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * データベース初期値設定の実行
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UsersTableSeeder::class,
            ContactFormSeeder::class,
            AreaSeeder::class,
            ShopSeeder::class,
            RouteSeeder::class,
            RouteShopSeeder::class,
        ]);
    }
}