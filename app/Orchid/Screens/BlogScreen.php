<?php

namespace App\Orchid\Screens;

use Orchid\Screen\Link;
use Orchid\Screen\Screen;

class BlogScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'BlogScreen';

    /**
     * Display header description.
     *
     * @var string
     */
    public $description = 'BlogScreen';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        return [];
    }

    /**
     * Button commands.
     *
     * @return Link[]
     */
    public function commandBar(): array
    {
        return [];
    }

    /**
     * Views.
     *
     * @return array
     */
    public function layout(): array
    {
        return [];
    }
}
