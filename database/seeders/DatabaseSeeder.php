<?php

namespace Database\Seeders;

use App\Models\Account;
use App\Models\Address;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Declaration;
use App\Models\Manufacturer;
use App\Models\Order;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductOrder;
use App\Models\SpecialPrize;
use App\Models\Status;
use Illuminate\Database\Seeder;
use NunoMaduro\Collision\Adapters\Phpunit\State;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Product::factory(20)->create();
        Account::factory(20)->create();
        Customer::factory(20)->create();
        Address::factory(20)->create();
        Status::factory(20)->create();
        Order::factory(20)->create();
        ProductOrder::factory(20)->create();
        SpecialPrize::factory(20)->create();
        Category::factory(20)->create();
        ProductCategory::factory(20)->create();
        Declaration::factory(20)->create();
    }
}
