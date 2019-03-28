<?php

declare(strict_types=1);

namespace App\Orchid\Screens\Page;

use Orchid\Screen\Link;
use Orchid\Screen\Screen;
use Orchid\Screen\Layouts;
use Illuminate\Http\Request;
use App\Models\Page;
use Orchid\Support\Facades\Alert;
use App\Orchid\Layouts\Page\PageEditLayout;

class PageEditScreen extends Screen
{

    public $name = 'Страницы';

    public $description = 'Управление статическими страницами';

    public function query(Page $page): array
    {
        return [
            'page' => $page
        ];
    }


    public function commandBar(): array
    {
        return [
            Link::name(__('Сохранить'))
                ->icon('icon-check')
                ->method('save'),

            Link::name(__('Remove'))
                ->icon('icon-trash')
                ->method('remove'),
        ];
    }

    public function layout(): array
    {
        return [
            Layouts::columns([
                'PageEdit' => [
                    PageEditLayout::class,
                ],
            ]),
        ];
    }

    public function save(Page $page, Request $request)
    {
        $page->fill($request->get('page'))->save();

        Alert::info(__('Страница успешно сохранена!'));

        return redirect()->route('platform.pages');
    }


    public function remove(Page $page)
    {
        $page->delete();

        Alert::info(__('Страница удалена!'));

        return redirect()->route('platform.pages');
    }
}
