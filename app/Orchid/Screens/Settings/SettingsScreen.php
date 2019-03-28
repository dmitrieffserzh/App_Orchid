<?php

namespace App\Orchid\Screens\Settings;

use Orchid\Screen\Link;
use Orchid\Screen\Screen;

class SettingsScreen extends Screen
{

    public $name = 'Параметры';

    public $description = 'Основные параметры системы';

    public function query(): array
    {
        return [];
    }


    public function commandBar(): array
    {
        return [];
    }


    public function layout(): array
    {
        return [];
    }
}
