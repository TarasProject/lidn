<?php

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
                'model_name'            => 'TCG\\Voyager\\Models\\User',
                'policy_name'           => 'TCG\\Voyager\\Policies\\UserPolicy',
                'controller'            => 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController',
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
                'controller'            => '',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }

        $dataType = $this->dataType('slug', 'images');
        if (!$dataType->exists) {
            $dataType->fill([
                'name' => 'images',
                'display_name_singular' => 'Image',
                'display_name_plural' => 'Images',
                'icon' => 'voyager-news',
                'model_name' => 'App\\Models\\Image',
                'controller' => '\\App\\Http\\Controllers\\Admin\\ImageController',
                'generate_permissions' => 1,
                'description' => '',
            ])->save();
        }

        $dataType = $this->dataType('slug', 'attributes');
        if (!$dataType->exists) {
            $dataType->fill([
                'name' => 'attributes',
                'display_name_singular' => 'Attribute',
                'display_name_plural' => 'Attributes',
                'icon' => 'voyager-news',
                'model_name' => 'App\\Models\\Attribute',
                'controller' => '\\App\\Http\\Controllers\\Admin\\AttributeController',
                'generate_permissions' => 1,
                'description' => '',
            ])->save();
        }

        $dataType = $this->dataType('slug', 'blogposts');
        if (!$dataType->exists) {
            $dataType->fill([
                'name' => 'blogposts',
                'display_name_singular' => 'Post',
                'display_name_plural' => 'Posts',
                'icon' => 'voyager-news',
                'model_name' => 'App\\Models\\Blogpost',
                'controller' => '\\App\\Http\\Controllers\\Admin\\BlogpostController',
                'generate_permissions' => 1,
                'description' => '',
            ])->save();
        }

        $dataType = $this->dataType('slug', 'projects');
        if (!$dataType->exists) {
            $dataType->fill([
                'name' => 'projects',
                'display_name_singular' => 'Project',
                'display_name_plural' => 'Projecsts',
                'icon' => 'voyager-news',
                'model_name' => 'App\\Models\\Project',
                'controller' => '\\App\\Http\\Controllers\\Admin\\ProjectController',
                'generate_permissions' => 1,
                'description' => '',
            ])->save();
        }

        $dataType = $this->dataType('slug', 'contacts');
        if (!$dataType->exists) {
            $dataType->fill([
                'name' => 'contacts',
                'display_name_singular' => 'Contact',
                'display_name_plural' => 'Contacts',
                'icon' => 'voyager-news',
                'model_name' => 'App\\Models\\Contact',
                'controller' => '\\App\\Http\\Controllers\\Admin\\ContactController',
                'generate_permissions' => 1,
                'description' => '',
            ])->save();
        }
    }

    /**
     * [dataType description].
     *
     * @param [type] $field [description]
     * @param [type] $for   [description]
     *
     * @return [type] [description]
     */
    protected function dataType($field, $for)
    {
        return DataType::firstOrNew([$field => $for]);
    }
}
