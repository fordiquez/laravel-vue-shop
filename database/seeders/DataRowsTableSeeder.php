<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataRow;
use TCG\Voyager\Models\DataType;

class DataRowsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file.
     * @return void
     */
    public function run(): void
    {
        $userDataType = DataType::where('slug', 'users')->firstOrFail();
        $orderRecipientDataType = DataType::where('slug', 'order-recipients')->firstOrFail();
        $userAddressDataType = DataType::where('slug', 'user-addresses')->firstOrFail();
        $userContactDataType = DataType::where('slug', 'user-contacts')->firstOrFail();
        $menuDataType = DataType::where('slug', 'menus')->firstOrFail();
        $roleDataType = DataType::where('slug', 'roles')->firstOrFail();
        $categoryDataType = DataType::where('slug', 'categories')->firstOrFail();
        $goodStatusDataType = DataType::where('slug', 'good-statuses')->firstOrFail();
        $goodDataType = DataType::where('slug', 'goods')->firstOrFail();
        $tagDataType = DataType::where('slug', 'tags')->firstOrFail();
        $goodTagDataType = DataType::where('slug', 'good-tag')->firstOrFail();

        $this->generateUserDataRows($userDataType);
        $this->generateOrderRecipientDataRows($orderRecipientDataType);
        $this->generateUserAddressDataRows($userAddressDataType);
        $this->generateUserContactDataRows($userContactDataType);
        $this->generateMenuDataRows($menuDataType);
        $this->generateRoleDataRows($roleDataType);
        $this->generateCategoryDataRows($categoryDataType);
        $this->generateTagDataRows($tagDataType);
        $this->generateGoodStatusDataRows($goodStatusDataType);
        $this->generateGoodDataRows($goodDataType);
        $this->generateGoodTagDataRows($goodTagDataType);
    }

    /**
     * [dataRow description].
     *
     * @param DataType $type
     * @param string $field
     * @return mixed [type] [description]
     */
    protected function dataRow(DataType $type, string $field): mixed
    {
        return DataRow::firstOrNew([
            'data_type_id' => $type->id,
            'field'        => $field,
        ]);
    }

    /**
     * @param DataRow $dataRow
     * @param string $type
     * @param string $displayName
     * @param bool $required
     * @param array $bread
     * @param int $order
     * @param array|string|null $rules
     * @param array|null $relationship
     * @return void
     */
    protected function fillDataRow(DataRow $dataRow, string $type, string $displayName, bool $required, array $bread, int $order, array|string $rules = null, array $relationship = null) {
        if (!$dataRow->exists) {
            $fields = [
                'type'         => $type,
                'display_name' => __($displayName),
                'required'     => $required,
                'browse'       => $bread[0],
                'read'         => $bread[1],
                'edit'         => $bread[2],
                'add'          => $bread[3],
                'delete'       => $bread[4],
                'order'        => $order,
            ];
            $fields = $this->getValidationRules($fields, $rules);
            $fields = $this->getRelationship($fields, $relationship);
            $dataRow->fill($fields)->save();
        }
    }

    /**
     * @param array $fields
     * @param array|string|null $rules
     * @return array
     */
    protected function getValidationRules(array $fields, array|string $rules = null): array
    {
        if (!empty($rules)) {
            $details = [
                'details' => [
                    'validation' => [
                        'rule' => $rules
                    ]
                ]
            ];
            $fields = array_merge($fields, $details);
        }
        return $fields;
    }

    /**
     * @param array $fields
     * @param array|null $relationship
     * @return array
     */
    protected function getRelationship(array $fields, array $relationship = null): array
    {
        if (!empty($relationship)) {
            $details = [
                'details' => $relationship
            ];
            $fields = array_merge($fields, $details);
        }
        return $fields;
    }

    /**
     * @param string $model
     * @param string $table
     * @param string $type
     * @param string $column
     * @param string $key
     * @param string $label
     * @param string $pivotTable
     * @param bool $pivot
     * @param bool $taggable
     * @return array
     */
    protected function generateRelationship(string $model, string $table, string $type, string $column, string $key, string $label, string $pivotTable, bool $pivot = false, bool $taggable = false): array
    {
        return [
            'model'       => $model,
            'table'       => $table,
            'type'        => $type,
            'column'      => $column,
            'key'         => $key,
            'label'       => $label,
            'pivot_table' => $pivotTable,
            'pivot'       => (int)$pivot,
            'taggable'    => (int)$taggable
        ];
    }

    protected function generateUserDataRows(DataType $userDataType): void
    {
        $dataRow = $this->dataRow($userDataType, 'id');
        $this->fillDataRow($dataRow, 'number', 'voyager::seeders.data_rows.id', 1, [1, 1, 0, 0, 1], 1);

        $dataRow = $this->dataRow($userDataType, 'first_name');
        $this->fillDataRow($dataRow, 'text', 'First Name', 1, [1, 1, 1, 1, 1], 2, 'string');

        $dataRow = $this->dataRow($userDataType, 'last_name');
        $this->fillDataRow($dataRow, 'text', 'Last Name', 1, [1, 1, 1, 1, 1], 3, 'string');

        $dataRow = $this->dataRow($userDataType, 'birthday_date');
        $this->fillDataRow($dataRow, 'timestamp', 'Birthday Date', 1, [1, 1, 1, 1, 1], 4, 'date');

        $dataRow = $this->dataRow($userDataType, 'gender');
        $this->fillDataRow($dataRow, 'radio_btn', 'Gender', 1, [1, 1, 1, 1, 1], 5, 'string');

        $dataRow = $this->dataRow($userDataType, 'email');
        $this->fillDataRow($dataRow, 'text', 'voyager::seeders.data_rows.email', 1, [1, 1, 1, 1, 1], 6, ['email', 'unique:users']);

        $dataRow = $this->dataRow($userDataType, 'user_belongsto_role_relationship');
        $relationship = $this->generateRelationship('TCG\\Voyager\\Models\\Role', 'roles', 'belongsTo', 'role_id', 'id', 'display_name', 'roles');
        $this->fillDataRow($dataRow, 'relationship', 'voyager::seeders.data_rows.role', 1, [1, 1, 1, 1, 1], 7, null, $relationship);

        $dataRow = $this->dataRow($userDataType, 'role_id');
        $this->fillDataRow($dataRow, 'text', 'voyager::seeders.data_rows.role', 1, [1, 1, 1, 1, 1], 8);

        $dataRow = $this->dataRow($userDataType, 'avatar');
        $this->fillDataRow($dataRow, 'image', 'voyager::seeders.data_rows.avatar', 0, [0, 1, 1, 1, 0], 9, ['nullable', 'file', 'mimes:jpg,bmp,png']);

        $dataRow = $this->dataRow($userDataType, 'password');
        $this->fillDataRow($dataRow, 'password', 'voyager::seeders.data_rows.password', 1, [0, 0, 1, 1, 0], 10, ['nullable', 'string', 'min:6']);

        $dataRow = $this->dataRow($userDataType, 'remember_token');
        $this->fillDataRow($dataRow, 'text', 'voyager::seeders.data_rows.remember_token', 0, [0, 0, 0, 0, 0], 11);

        $dataRow = $this->dataRow($userDataType, 'email_verified_at');
        $this->fillDataRow($dataRow, 'timestamp', 'Email verified at', 0, [0, 1, 0, 0, 0], 12);

        $dataRow = $this->dataRow($userDataType, 'created_at');
        $this->fillDataRow($dataRow, 'timestamp', 'voyager::seeders.data_rows.created_at', 0, [0, 1, 0, 0, 0], 13);

        $dataRow = $this->dataRow($userDataType, 'updated_at');
        $this->fillDataRow($dataRow, 'timestamp', 'voyager::seeders.data_rows.updated_at', 0, [0, 1, 0, 0, 0], 14);

        $dataRow = $this->dataRow($userDataType, 'settings');
        $this->fillDataRow($dataRow, 'hidden', 'Settings', 0, [0, 0, 0, 0, 0], 15);

        $dataRow = $this->dataRow($userDataType, 'user_belongstomany_role_relationship');
        $relationship = $this->generateRelationship('TCG\\Voyager\\Models\\Role', 'roles', 'belongsToMany', 'id', 'id', 'display_name', 'user_roles', 1);
        $this->fillDataRow($dataRow, 'relationship', 'voyager::seeders.data_rows.roles', 0, [0, 1, 1, 1, 0], 16, null, $relationship);
    }

    protected function generateOrderRecipientDataRows(DataType $orderRecipientDataType): void
    {
        $dataRow = $this->dataRow($orderRecipientDataType, 'id');
        $this->fillDataRow($dataRow, 'number', 'voyager::seeders.data_rows.id', 1, [1, 1, 0, 0, 1], 1);

        $dataRow = $this->dataRow($orderRecipientDataType, 'user_id');
        $this->fillDataRow($dataRow, 'number', 'User Id', 1, [1, 1, 1, 1, 1], 2);

        $dataRow = $this->dataRow($orderRecipientDataType, 'order_recipient_belongsto_user_relationship');
        $relationship = $this->generateRelationship('App\\Models\\User', 'users', 'belongsTo', 'user_id', 'id', 'full_name', 'users');
        $this->fillDataRow($dataRow, 'relationship', 'User', 1, [1, 1, 1, 1, 1], 3, null, $relationship);

        $dataRow = $this->dataRow($orderRecipientDataType, 'profile_title');
        $this->fillDataRow($dataRow, 'text', 'Profile Title', 1, [1, 1, 1, 1, 1], 4, 'string');

        $dataRow = $this->dataRow($orderRecipientDataType, 'first_name');
        $this->fillDataRow($dataRow, 'text', 'First Name', 1, [1, 1, 1, 1, 1], 5, 'string');

        $dataRow = $this->dataRow($orderRecipientDataType, 'last_name');
        $this->fillDataRow($dataRow, 'text', 'Last Name', 1, [1, 1, 1, 1, 1], 6, 'string');

        $dataRow = $this->dataRow($orderRecipientDataType, 'mobile_phone');
        $this->fillDataRow($dataRow, 'text', 'Mobile Phone', 1, [1, 1, 1, 1, 1], 7, 'string');

        $dataRow = $this->dataRow($orderRecipientDataType, 'is_active');
        $this->fillDataRow($dataRow, 'checkbox', 'Is Active', 1, [1, 1, 1, 1, 1], 8);

        $dataRow = $this->dataRow($orderRecipientDataType, 'created_at');
        $this->fillDataRow($dataRow, 'timestamp', 'voyager::seeders.data_rows.created_at', 0, [1, 1, 0, 0, 0], 9);

        $dataRow = $this->dataRow($orderRecipientDataType, 'updated_at');
        $this->fillDataRow($dataRow, 'timestamp', 'voyager::seeders.data_rows.updated_at', 0, [0, 1, 0, 0, 0], 10);
    }

    protected function generateUserAddressDataRows(DataType $userAddressDataType): void
    {
        $dataRow = $this->dataRow($userAddressDataType, 'id');
        $this->fillDataRow($dataRow, 'number', 'voyager::seeders.data_rows.id', 1, [1, 1, 0, 0, 1], 1);

        $dataRow = $this->dataRow($userAddressDataType, 'user_id');
        $this->fillDataRow($dataRow, 'select_dropdown', 'User Id', 1, [1, 1, 1, 1, 1], 2);

        $relationship = $this->generateRelationship('App\\Models\\User', 'users', 'belongsTo', 'user_id', 'id', 'full_name', 'users');
        $dataRow = $this->dataRow($userAddressDataType, 'user_address_belongsto_user_relationship');
        $this->fillDataRow($dataRow, 'relationship', 'User', 1, [1, 1, 1, 1, 1], 3, null, $relationship);

        $dataRow = $this->dataRow($userAddressDataType, 'country');
        $this->fillDataRow($dataRow, 'text', 'Country', 1, [1, 1, 1, 1, 1], 4, 'string');

        $dataRow = $this->dataRow($userAddressDataType, 'city');
        $this->fillDataRow($dataRow, 'text', 'City', 1, [1, 1, 1, 1, 1], 5, 'string');

        $dataRow = $this->dataRow($userAddressDataType, 'street');
        $this->fillDataRow($dataRow, 'text', 'Street', 1, [1, 1, 1, 1, 1], 6, 'string');

        $dataRow = $this->dataRow($userAddressDataType, 'house');
        $this->fillDataRow($dataRow, 'text', 'House', 1, [1, 1, 1, 1, 1], 7, 'string');

        $dataRow = $this->dataRow($userAddressDataType, 'flat');
        $this->fillDataRow($dataRow, 'text', 'Flat', 0, [1, 1, 1, 1, 1], 8, 'string');

        $dataRow = $this->dataRow($userAddressDataType, 'is_active');
        $this->fillDataRow($dataRow, 'text', 'Is Active', 1, [1, 1, 1, 1, 1], 9);

        $dataRow = $this->dataRow($userAddressDataType, 'created_at');
        $this->fillDataRow($dataRow, 'timestamp', 'voyager::seeders.data_rows.created_at', 0, [1, 1, 0, 0, 0], 10);

        $dataRow = $this->dataRow($userAddressDataType, 'updated_at');
        $this->fillDataRow($dataRow, 'timestamp', 'voyager::seeders.data_rows.updated_at', 0, [0, 1, 0, 0, 0], 11);
    }

    protected function generateUserContactDataRows(DataType $userContactDataType): void
    {
        $dataRow = $this->dataRow($userContactDataType, 'id');
        $this->fillDataRow($dataRow, 'number', 'voyager::seeders.data_rows.id', 1, [1, 1, 0, 0, 1], 1);

        $dataRow = $this->dataRow($userContactDataType, 'user_id');
        $this->fillDataRow($dataRow, 'select_dropdown', 'User Id', 1, [1, 1, 1, 1, 1], 2);

        $relationship = $this->generateRelationship('App\\Models\\User', 'users', 'belongsTo', 'user_id', 'id', 'full_name', 'users');
        $dataRow = $this->dataRow($userContactDataType, 'user_contact_belongsto_user_relationship');
        $this->fillDataRow($dataRow, 'relationship', 'User', 1, [1, 1, 1, 1, 1], 3, null, $relationship);

        $dataRow = $this->dataRow($userContactDataType, 'mobile_phone');
        $this->fillDataRow($dataRow, 'text', 'Mobile Phone', 1, [1, 1, 1, 1, 1], 4, 'string');

        $dataRow = $this->dataRow($userContactDataType, 'created_at');
        $this->fillDataRow($dataRow, 'timestamp', 'voyager::seeders.data_rows.created_at', 0, [1, 1, 0, 0, 0], 5);

        $dataRow = $this->dataRow($userContactDataType, 'updated_at');
        $this->fillDataRow($dataRow, 'timestamp', 'voyager::seeders.data_rows.updated_at', 0, [1, 1, 0, 0, 0], 6);
    }

    protected function generateMenuDataRows(DataType $menuDataType): void
    {
        $dataRow = $this->dataRow($menuDataType, 'id');
        $this->fillDataRow($dataRow, 'number', 'voyager::seeders.data_rows.id', 1, [1, 1, 0, 0, 1], 1);

        $dataRow = $this->dataRow($menuDataType, 'name');
        $this->fillDataRow($dataRow, 'text', 'voyager::seeders.data_rows.name', 1, [1, 1, 1, 1, 1], 2);

        $dataRow = $this->dataRow($menuDataType, 'created_at');
        $this->fillDataRow($dataRow, 'timestamp', 'voyager::seeders.data_rows.created_at', 0, [1, 1, 0, 0, 0], 3);

        $dataRow = $this->dataRow($menuDataType, 'updated_at');
        $this->fillDataRow($dataRow, 'timestamp', 'voyager::seeders.data_rows.updated_at', 0, [0, 0, 0, 0, 0], 4);
    }

    protected function generateRoleDataRows(DataType $roleDataType): void
    {
        $dataRow = $this->dataRow($roleDataType, 'id');
        $this->fillDataRow($dataRow, 'number', 'voyager::seeders.data_rows.id', 1, [1, 1, 0, 0, 1], 1);

        $dataRow = $this->dataRow($roleDataType, 'name');
        $this->fillDataRow($dataRow, 'text', 'voyager::seeders.data_rows.name', 1, [1, 1, 1, 1, 1], 2);

        $dataRow = $this->dataRow($roleDataType, 'display_name');
        $this->fillDataRow($dataRow, 'text', 'voyager::seeders.data_rows.display_name', 1, [1, 1, 1, 1, 1], 3);

        $dataRow = $this->dataRow($roleDataType, 'created_at');
        $this->fillDataRow($dataRow, 'timestamp', 'voyager::seeders.data_rows.created_at', 0, [1, 1, 0, 0, 0], 4);

        $dataRow = $this->dataRow($roleDataType, 'updated_at');
        $this->fillDataRow($dataRow, 'timestamp', 'voyager::seeders.data_rows.updated_at', 0, [1, 1, 0, 0, 0], 5);
    }

    protected function generateCategoryDataRows(DataType $categoryDataType): void
    {
        $dataRow = $this->dataRow($categoryDataType, 'id');
        $this->fillDataRow($dataRow, 'number', 'voyager::seeders.data_rows.id', 1, [1, 1, 0, 0, 1], 1);

        $dataRow = $this->dataRow($categoryDataType, 'title');
        $this->fillDataRow($dataRow, 'text', 'Title', 1, [1, 1, 1, 1, 1], 2, 'string');

        $dataRow = $this->dataRow($categoryDataType, 'slug');
        $this->fillDataRow($dataRow, 'text', 'Slug', 1, [1, 1, 1, 1, 1], 3, 'string');

        $dataRow = $this->dataRow($categoryDataType, 'photo');
        $this->fillDataRow($dataRow, 'image', 'Photo', 0, [1, 1, 1, 1, 1], 4, ['nullable', 'file', 'mimes:jpg,bmp,png']);

        $dataRow = $this->dataRow($categoryDataType, 'parent_id');
        $this->fillDataRow($dataRow, 'select_dropdown', 'Parent Id', 0, [1, 1, 1, 1, 1], 5, ['nullable', 'integer', 'exists:categories,id']);

        $relationship = $this->generateRelationship('App\\Models\\Category', 'categories', 'belongsTo', 'parent_id', 'id', 'title', 'categories');
        $dataRow = $this->dataRow($categoryDataType, 'category_belongsto_category_relationship');
        $this->fillDataRow($dataRow, 'relationship', 'Parent Category', 0, [1, 1, 1, 1, 0], 6, null, $relationship);

        $dataRow = $this->dataRow($categoryDataType, 'created_at');
        $this->fillDataRow($dataRow, 'timestamp', 'voyager::seeders.data_rows.created_at', 0, [1, 1, 0, 0, 0], 7);

        $dataRow = $this->dataRow($categoryDataType, 'updated_at');
        $this->fillDataRow($dataRow, 'timestamp', 'voyager::seeders.data_rows.updated_at', 0, [0, 1, 0, 0, 0], 8);

        $dataRow = $this->dataRow($categoryDataType, 'deleted_at');
        $this->fillDataRow($dataRow, 'timestamp', 'Deleted At', 0, [0, 1, 0, 0, 0], 9);
    }

    protected function generateTagDataRows(DataType $tagDataType): void
    {
        $dataRow = $this->dataRow($tagDataType, 'id');
        $this->fillDataRow($dataRow, 'number', 'voyager::seeders.data_rows.id', 1, [1, 1, 0, 0, 1], 1);

        $dataRow = $this->dataRow($tagDataType, 'title');
        $this->fillDataRow($dataRow, 'text', 'Title', 1, [1, 1, 1, 1, 1], 2, 'string');

        $dataRow = $this->dataRow($tagDataType, 'slug');
        $this->fillDataRow($dataRow, 'text', 'Slug', 1, [1, 1, 1, 1, 1], 3, 'string');

        $dataRow = $this->dataRow($tagDataType, 'created_at');
        $this->fillDataRow($dataRow, 'timestamp', 'voyager::seeders.data_rows.created_at', 0, [1, 1, 0, 0, 0], 4);

        $dataRow = $this->dataRow($tagDataType, 'updated_at');
        $this->fillDataRow($dataRow, 'timestamp', 'voyager::seeders.data_rows.updated_at', 0, [1, 1, 0, 0, 0], 5);
    }

    protected function generateGoodStatusDataRows(DataType $goodStatusDataType): void
    {
        $dataRow = $this->dataRow($goodStatusDataType, 'id');
        $this->fillDataRow($dataRow, 'number', 'voyager::seeders.data_rows.id', 1, [1, 1, 0, 0, 1], 1);

        $dataRow = $this->dataRow($goodStatusDataType, 'title');
        $this->fillDataRow($dataRow, 'text', 'Title', 1, [1, 1, 1, 1, 1], 2, 'string');

        $dataRow = $this->dataRow($goodStatusDataType, 'created_at');
        $this->fillDataRow($dataRow, 'timestamp', 'voyager::seeders.data_rows.created_at', 0, [1, 1, 0, 0, 0], 3);

        $dataRow = $this->dataRow($goodStatusDataType, 'updated_at');
        $this->fillDataRow($dataRow, 'timestamp', 'voyager::seeders.data_rows.updated_at', 0, [1, 1, 0, 0, 0], 4);
    }

    protected function generateGoodDataRows(DataType $goodDataType): void
    {
        $dataRow = $this->dataRow($goodDataType, 'id');
        $this->fillDataRow($dataRow, 'number', 'voyager::seeders.data_rows.id', 1, [1, 1, 0, 0, 1], 1);

        $dataRow = $this->dataRow($goodDataType, 'vendor_code');
        $this->fillDataRow($dataRow, 'number', 'Vendor Code', 1, [1, 1, 1, 1, 1], 2, ['integer', 'unique:goods']);

        $dataRow = $this->dataRow($goodDataType, 'title');
        $this->fillDataRow($dataRow, 'text', 'Title', 1, [1, 1, 1, 1, 1], 3, 'string');

        $dataRow = $this->dataRow($goodDataType, 'slug');
        $this->fillDataRow($dataRow, 'text', 'Slug', 1, [0, 1, 1, 1, 1], 4, ['string', 'unique:goods']);

        $dataRow = $this->dataRow($goodDataType, 'category_id');
        $this->fillDataRow($dataRow, 'select_dropdown', 'Category Id', 1, [1, 1, 1, 1, 1], 5, ['integer', 'exists:categories,id']);

        $relationship = $this->generateRelationship('App\\Models\\Category', 'categories', 'belongsTo', 'category_id', 'id', 'title', 'categories');
        $dataRow = $this->dataRow($goodDataType, 'good_belongsto_category_relationship');
        $this->fillDataRow($dataRow, 'relationship', 'Category', 0, [1, 1, 1, 1, 1], 6, null, $relationship);

        $relationship = $this->generateRelationship('App\\Models\\Tag', 'tags', 'belongsToMany', 'id', 'id', 'title', 'good_tag', true, true);
        $dataRow = $this->dataRow($goodDataType, 'good_belongstomany_tag_relationship');
        $this->fillDataRow($dataRow, 'relationship', 'Category', 0, [0, 1, 1, 1, 1], 7, null, $relationship);

        $dataRow = $this->dataRow($goodDataType, 'description');
        $this->fillDataRow($dataRow, 'markdown_editor', 'Description', 0, [0, 1, 1, 1, 1], 8, ['nullable', 'string']);

        $dataRow = $this->dataRow($goodDataType, 'short_description');
        $this->fillDataRow($dataRow, 'markdown_editor', 'Short Description', 0, [0, 1, 1, 1, 1], 9, ['nullable', 'string']);

        $dataRow = $this->dataRow($goodDataType, 'warning_description');
        $this->fillDataRow($dataRow, 'markdown_editor', 'Warning Description', 0, [0, 1, 1, 1, 1], 10, ['nullable', 'string']);

        $dataRow = $this->dataRow($goodDataType, 'old_price');
        $this->fillDataRow($dataRow, 'number', 'Old Price', 0, [1, 1, 1, 1, 1], 11, ['nullable', 'numeric']);

        $dataRow = $this->dataRow($goodDataType, 'price');
        $this->fillDataRow($dataRow, 'number', 'Price', 1, [1, 1, 1, 1, 1], 12, ['nullable', 'numeric']);

        $dataRow = $this->dataRow($goodDataType, 'quantity');
        $this->fillDataRow($dataRow, 'number', 'Quantity', 1, [1, 1, 1, 1, 1], 13, ['nullable', 'integer']);

        $dataRow = $this->dataRow($goodDataType, 'status_id');
        $this->fillDataRow($dataRow, 'select_dropdown', 'Status Id', 1, [1, 1, 1, 1, 1], 14, ['integer', 'exists:good_statuses,id']);

        $dataRow = $this->dataRow($goodDataType, 'good_belongsto_good_status_relationship');
        $relationship = $this->generateRelationship('App\\Models\\GoodStatus', 'good_statuses', 'belongsTo', 'status_id', 'id', 'title', 'good_statuses');
        $this->fillDataRow($dataRow, 'relationship', 'Status', 0, [1, 1, 1, 1, 1], 15, null, $relationship);

        $dataRow = $this->dataRow($goodDataType, 'created_at');
        $this->fillDataRow($dataRow, 'timestamp', 'voyager::seeders.data_rows.created_at', 0, [1, 1, 0, 0, 0], 16);

        $dataRow = $this->dataRow($goodDataType, 'updated_at');
        $this->fillDataRow($dataRow, 'timestamp', 'voyager::seeders.data_rows.updated_at', 0, [1, 1, 0, 0, 0], 17);
    }

    protected function generateGoodTagDataRows(DataType $goodTagDataType): void
    {
        $dataRow = $this->dataRow($goodTagDataType, 'id');
        $this->fillDataRow($dataRow, 'number', 'voyager::seeders.data_rows.id', 1, [1, 1, 0, 0, 1], 1);

        $dataRow = $this->dataRow($goodTagDataType, 'good_id');
        $this->fillDataRow($dataRow, 'select_dropdown', 'Good Id', 1, [1, 1, 1, 1, 1], 2, ['integer', 'exists:goods,id']);

        $dataRow = $this->dataRow($goodTagDataType, 'tag_id');
        $this->fillDataRow($dataRow, 'select_dropdown', 'Tag Id', 1, [1, 1, 1, 1, 1], 3, ['integer', 'exists:tags,id']);

        $dataRow = $this->dataRow($goodTagDataType, 'created_at');
        $this->fillDataRow($dataRow, 'timestamp', 'voyager::seeders.data_rows.created_at', 0, [0, 0, 0, 0, 0], 4);

        $dataRow = $this->dataRow($goodTagDataType, 'updated_at');
        $this->fillDataRow($dataRow, 'timestamp', 'voyager::seeders.data_rows.updated_at', 0, [0, 0, 0, 0, 0], 5);

        $dataRow = $this->dataRow($goodTagDataType, 'good_tag_belongsto_good_relationship');
        $relationship = $this->generateRelationship('App\\Models\\Good', 'goods', 'belongsTo', 'good_id', 'id', 'title', 'goods');
        $this->fillDataRow($dataRow, 'relationship', 'Good', 1, [1, 1, 1, 1, 1], 6, null, $relationship);

        $dataRow = $this->dataRow($goodTagDataType, 'good_tag_belongsto_tag_relationship');
        $relationship = $this->generateRelationship('App\\Models\\Tag', 'tags', 'belongsTo', 'tag_id', 'id', 'title', 'tags');
        $this->fillDataRow($dataRow, 'relationship', 'Tag', 1, [1, 1, 1, 1, 1], 7, null, $relationship);
    }
}
