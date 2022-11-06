<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataType;

class DataTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'users');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'users',
                'display_name_singular' => __('voyager::seeders.data_types.user.singular'),
                'display_name_plural'   => __('voyager::seeders.data_types.user.plural'),
                'icon'                  => 'voyager-person',
                'model_name'            => 'App\\Models\\User',
                'policy_name'           => 'TCG\\Voyager\\Policies\\UserPolicy',
                'controller'            => 'App\\Http\\Controllers\\Voyager\\VoyagerUsersController',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }

        $dataType = $this->dataType('slug', 'order-recipients');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'order_recipients',
                'display_name_singular' => __('Order Recipient'),
                'display_name_plural'   => __('Order Recipients'),
                'icon'                  => 'voyager-group',
                'model_name'            => 'App\\Models\\OrderRecipient',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }

        $dataType = $this->dataType('slug', 'user-addresses');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'user_addresses',
                'display_name_singular' => __('User Address'),
                'display_name_plural'   => __('User Addresses'),
                'icon'                  => 'voyager-truck',
                'model_name'            => 'App\\Models\\UserAddress',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }

        $dataType = $this->dataType('slug', 'user-contacts');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'user_contacts',
                'display_name_singular' => __('User Contact'),
                'display_name_plural'   => __('User Contacts'),
                'icon'                  => 'voyager-phone',
                'model_name'            => 'App\\Models\\UserContact',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }

        $dataType = $this->dataType('slug', 'menus');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'menus',
                'display_name_singular' => __('voyager::seeders.data_types.menu.singular'),
                'display_name_plural'   => __('voyager::seeders.data_types.menu.plural'),
                'icon'                  => 'voyager-list',
                'model_name'            => 'TCG\\Voyager\\Models\\Menu',
                'controller'            => '',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }

        $dataType = $this->dataType('slug', 'roles');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'roles',
                'display_name_singular' => __('voyager::seeders.data_types.role.singular'),
                'display_name_plural'   => __('voyager::seeders.data_types.role.plural'),
                'icon'                  => 'voyager-lock',
                'model_name'            => 'TCG\\Voyager\\Models\\Role',
                'controller'            => 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }

        $dataType = $this->dataType('slug', 'categories');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'categories',
                'display_name_singular' => __('Category'),
                'display_name_plural'   => __('Categories'),
                'icon'                  => 'voyager-categories',
                'model_name'            => 'App\\Models\\Category',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }

        $dataType = $this->dataType('slug', 'tags');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'tags',
                'display_name_singular' => __('Tag'),
                'display_name_plural'   => __('Tags'),
                'icon'                  => 'voyager-tag',
                'model_name'            => 'App\\Models\\Tag',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }

        $dataType = $this->dataType('slug', 'good-statuses');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'good_statuses',
                'display_name_singular' => __('Goods Status'),
                'display_name_plural'   => __('Goods Statuses'),
                'icon'                  => 'voyager-activity',
                'model_name'            => 'App\\Models\\GoodStatus',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }

        $dataType = $this->dataType('slug', 'goods');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'goods',
                'display_name_singular' => __('Good'),
                'display_name_plural'   => __('Goods'),
                'icon'                  => 'voyager-shop',
                'model_name'            => 'App\\Models\\Good',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }

        $dataType = $this->dataType('slug', 'good-tag');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'good_tag',
                'display_name_singular' => __('Goods Tag'),
                'display_name_plural'   => __('Goods Tags'),
                'icon'                  => 'voyager-book',
                'model_name'            => 'App\\Models\\GoodTag',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }

        $dataType = $this->dataType('slug', 'good-images');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'good_images',
                'display_name_singular' => __('Goods Image'),
                'display_name_plural'   => __('Goods Images'),
                'icon'                  => 'voyager-photos',
                'model_name'            => 'App\\Models\\GoodImage',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }

        $dataType = $this->dataType('slug', 'reviews');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'reviews',
                'display_name_singular' => __('Review'),
                'display_name_plural'   => __('Reviews'),
                'icon'                  => 'voyager-chat',
                'model_name'            => 'App\\Models\\Review',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }

        $dataType = $this->dataType('slug', 'review-images');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'review_images',
                'display_name_singular' => __('Review Image'),
                'display_name_plural'   => __('Review Images'),
                'icon'                  => 'voyager-upload',
                'model_name'            => 'App\\Models\\ReviewImage',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }

        $dataType = $this->dataType('slug', 'promo-codes');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'promo_codes',
                'display_name_singular' => __('Promo Code'),
                'display_name_plural'   => __('Promo Codes'),
                'icon'                  => 'voyager-ticket',
                'model_name'            => 'App\\Models\\PromoCode',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }
    }

    /**
     * [dataType description].
     *
     * @param $field
     * @param $for
     * @return mixed [type] [description]
     */
    protected function dataType($field, $for): mixed
    {
        return DataType::firstOrNew([$field => $for]);
    }
}
