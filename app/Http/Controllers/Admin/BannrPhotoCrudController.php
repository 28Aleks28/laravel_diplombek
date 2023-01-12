<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\BannrPhotoRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
use App\Models\BannrPhoto;

/**
 * Class BannrPhotoCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class BannrPhotoCrudController extends CrudController
{
    use ListOperation;
    use CreateOperation;
    use UpdateOperation;
    use DeleteOperation;
    use ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\BannrPhoto::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/bannr-photo');
        CRUD::setEntityNameStrings('Слайдер фотографию', 'Слайдер фотографии');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('name')->type('string')->label('Заголовок');
        CRUD::column('description')->type('string')->label('Описание');
        //CRUD::column('image_src')->type('string')->label('Фото');
        CRUD::addColumn([
            'name' => 'image', 
            'type' => 'image',
            'prefix' => "/storage//",
        ]);
        CRUD::addColumn([
            'label' => 'Банер',
            'type' => 'select',
            'name' => 'banner_id',
            'entity' => 'banner',
            'model' => 'App\Models\BannrPhoto',
            'attribute' => 'name',
        ]);

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']); 
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(BannrPhotoRequest::class);

        CRUD::field('name')->label('Заголовок');
        CRUD::field('description')->label('Описание');
        //CRUD::field('image_src')->label('Фото');
        $this->crud->addField([
            'label' => 'Банер',
            'type' => 'select',
            'name' => 'banner_id',
            'model' => 'App\Models\Banner',
            'attribute' => 'name',
        ]);

        $this->crud->addField([
            'name' => 'image',
            'label' => 'Изображение',
            'type' => 'upload',
            'upload' => true,
            'disk' => 'public'
        ]);
    
        

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number'])); 
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }

    protected function setupShowOperation()
        {
            CRUD::column('name')->label('Заголовок');
            CRUD::column('description')->label('Описание');
            CRUD::addColumn([
                'name' => 'image', 
                'type' => 'image',
                'prefix' => "/storage//",
            ]);
            CRUD::column('banner_id')->label('Banner');
        }
}
