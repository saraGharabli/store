<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingDatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Setting::setMany([
            'default_locale' => 'ar',
            'default_timezone' => 'Africa/Cairo',
            'reviews_enabled' => true,
            'auto_approve_reviews' => true,
            'supported_currencies' => ['USD','LE','SAR'],
            'default_currency' => 'USD',
            'store_email' => 'admin@ecommerce.test',
            'search_engine' => 'mysql',
            'local_shipping_cost' => 0,
            'outer_shipping_cost' => 0,
            'free_shipping_cost' => 0,
            'translatable' => [
                'store_name' => 'متجر سارة',
                'free_shipping_label' => 'الشحن المجاني',
                'local_label' => 'الشحن الداخلي',
                'outer_label' => 'الشحن الخارجي',
            ],
        ]);
    }
}
