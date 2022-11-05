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
                'display_name_plural'   => __('Tag'),
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
                'display_name_plural'   => __('Goods Tag'),
                'icon'                  => 'voyager-bag',
                'model_name'            => 'App\\Models\\GoodTag',
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
