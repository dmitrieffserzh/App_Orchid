<?php

declare(strict_types=1);

namespace App\Orchid\Screens;

use Orchid\Screen\Link;
use Orchid\Screen\Screen;
use Orchid\Screen\Layouts;
use Orchid\Platform\Dashboard;

class PlatformScreen extends Screen
{

    public $name = 'Dashboard';

    public $description = 'Welcome';


    public function query(): array
    {
        return [
            'status' => Dashboard::checkUpdate(),
        ];
    }

    public function commandBar(): array
    {
        return [
            Link::name('Перейти на сайт')
            ->link('/')
            ->icon('icon-globe-alt'),
        ];
    }

    public function layout(): array
    {
        return [
            Layouts::view('platform::partials.update'),
            Layouts::view('platform::partials.welcome'),
        ];
    }
}
