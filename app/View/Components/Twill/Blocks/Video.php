<?php

namespace App\View\Components\Twill\Blocks;

use A17\Twill\Services\Forms\Fields\Wysiwyg;
use A17\Twill\Services\Forms\Form;
use A17\Twill\Services\Forms\Fields\Input;
use A17\Twill\View\Components\Blocks\TwillBlockComponent;
use Illuminate\Contracts\View\View;

class Video extends TwillBlockComponent
{
    public function render(): View
    {
        return view('components.twill.blocks.video');
    }

    public function getForm(): Form
    {
        //return Form::make([]);
        return Form::make([
            Input::make()
                ->name('youtube_url')
                ->label('YouTube URL')
                ->placeholder('https://www.youtube.com/watch?v=...')
        ]);
    }
}
