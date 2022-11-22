<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     * @return void
     */
    public function run(): void
    {
        $keys = [
            'browse_admin',
            'browse_bread',
            'browse_database',
            'browse_media',
            'browse_compass',
        ];

        foreach ($keys as $key) {
            Permission::firstOrCreate([
                'key'        => $key,
                'table_name' => null,
            ]);
        }

        Permission::generateFor('menus');

        Permission::generateFor('roles');

        Permission::generateFor('users');

        Permission::generateFor('settings');

        Permission::generateFor('categories');

        Permission::generateFor('good_statuses');

        Permission::generateFor('goods');

        Permission::generateFor('tags');

        Permission::generateFor('good_tag');

        Permission::generateFor('order_recipients');

        Permission::generateFor('user_addresses');

        Permission::generateFor('user_contacts');

        Permission::generateFor('good_images');

        Permission::generateFor('reviews');

        Permission::generateFor('review_images');

        Permission::generateFor('promo_codes');

        Permission::generateFor('orders');

        Permission::generateFor('order_histories');

//        Permission::generateFor('attributes');
    }
}
