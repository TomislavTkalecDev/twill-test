<?php

namespace App\Http\Controllers\Twill;

use A17\Twill\Models\Contracts\TwillModelContract;
use A17\Twill\Services\Listings\Columns\Text;
use A17\Twill\Services\Listings\TableColumns;
use A17\Twill\Services\Forms\Fields\Input;
use A17\Twill\Services\Forms\Fields\DatePicker;
use A17\Twill\Services\Forms\Fields\Wysiwyg;
use A17\Twill\Services\Forms\Form;
use A17\Twill\Http\Controllers\Admin\NestedModuleController as BaseModuleController;

class PostController extends BaseModuleController
{
    protected $moduleName = 'posts';
    protected $showOnlyParentItemsInBrowsers = true;
    protected $nestedItemsDepth = 1;
    /**
     * This method can be used to enable/disable defaults. See setUpController in the docs for available options.
     */
    protected function setUpController(): void
    {
        $this->enableReorder();
    }

    /**
     * See the table builder docs for more information. If you remove this method you can use the blade files.
     * When using twill:module:make you can specify --bladeForm to use a blade form instead.
     */
    public function getForm(TwillModelContract $model): Form
    {

        //dd($model);
        $form = parent::getForm($model);
        
        $form->add(
            Input::make()->name('description')->label('Description')->translatable()
        );

        // Body
        $form->add(
            Wysiwyg::make()->name('body')->label('Body')->translatable()
        );

        // Publish Start Date
        $form->add(
            DatePicker::make()
                ->name('publish_start_date')
                ->label('Publish Start Date')
                //->withTime() // include time selector
        );

        // Publish End Date
        $form->add(
            DatePicker::make()
                ->name('publish_end_date')
                ->label('Publish End Date')
                //->withTime() // include time selector
        );

        return $form;
    }

    /**
     * This is an example and can be removed if no modifications are needed to the table.
     */
    protected function additionalIndexTableColumns(): TableColumns
    {
        $table = parent::additionalIndexTableColumns();

        $table->add(
            Text::make()->field('description')->title('Description')
        );

        return $table;
    }

    // protected function getFormValidationRules(): array
    // {
    //     return [
    //         'publish_start_date' => 'nullable|date',
    //         'publish_end_date' => 'nullable|date|after_or_equal:publish_start_date',
    //     ];
    // }
}
