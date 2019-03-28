<?php

namespace App\Orchid\Layouts\Page;

use Orchid\Screen\TD;
use Orchid\Screen\Layouts\Table;

class PageListLayout extends Table
{

    public $data = 'pages';

    public function fields(): array
    {
        return [
            TD::set('id', 'ID')
                ->align(TD::ALIGN_CENTER)
                ->width('40px')
                ->sort(),

            TD::set('title', __('Заголовок'))
                ->sort()
                ->link('platform.pages.edit', 'id', 'title'),

            TD::set('updated_at', __('Изменено'))
                ->align(TD::ALIGN_CENTER)
                ->width('200px')
                ->sort(),
            TD::set('')
                ->width('40px')
                ->link('platform.pages.edit', 'id'),
        ];
    }
}
