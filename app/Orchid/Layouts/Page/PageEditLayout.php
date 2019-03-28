<?php

declare(strict_types=1);

namespace App\Orchid\Layouts\Page;

use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\SimpleMDE;
use Orchid\Screen\Fields\Button;
use Orchid\Screen\Layouts\Rows;

class PageEditLayout extends Rows
{

    public function fields(): array
    {
        return [
            Input::make('page.title')
                ->type('text')
                ->max(255)
                ->required()
                ->title('Заголовок')->value(true),

            Input::make('page.seo_title')
                ->type('text')
                ->max(255)
                ->required()
                ->title('SEO Заголовок'),

            Input::make('page.seo_desc')
                ->type('text')
                ->max(255)
                ->required()
                ->title('SEO Описание'),

            Input::make('page.slug')
                ->type('text')
                ->max(255)
                ->title('Seo-url')
                ->help('Оставьте пустым для автоматической генерации.'),

            SimpleMDE::make('page.content')
                ->required()
                ->title('Основное содержимое'),
            Button::make()
                ->title('Сохранить')
                ->icon('icon-check')
                ->right()
                ->method('save')
        ];
    }
}
