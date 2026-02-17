<?php

namespace App\View\Components\Twill\Blocks;

use A17\Twill\Services\Forms\Fields\Wysiwyg;
use A17\Twill\Services\Forms\Form;
use A17\Twill\Services\Forms\Fields\Input;
use A17\Twill\View\Components\Blocks\TwillBlockComponent;
use Illuminate\Contracts\View\View;

class Quote extends TwillBlockComponent
{
    public function render(): View
    {
        return view('components.twill.blocks.quote');
    }

    public function getForm(): Form
    {
        return Form::make([
            Wysiwyg::make()
                ->name('quote')
                ->label('Quote')
                ->toolbarOptions(['italic'])
                ->maxLength(500),
            Input::make()
                ->name('author')
                ->label('Author')
                ->maxLength(100)
        ]);
    }
}
