<?php

namespace App\Orchid\Screens\Page;

use App\Models\Page;
use App\Orchid\Layouts\Page\PageListLayout;
use Orchid\Screen\Link;
use Orchid\Screen\Screen;

class PageListScreen extends Screen
{

    public $name = 'Страницы';

    public $description = 'Управление статическими страницами';

    public function query(): array
    {
        return [
            'pages' => Page::paginate()
        ];
    }


    public function commandBar(): array
    {
        return [
            Link::name(__('Создать страницу'))
                ->icon('icon-plus')
                ->link(route('platform.pages.create')),
        ];
    }


    public function layout(): array
    {
        return [
            PageListLayout::class,
        ];
    }
}
