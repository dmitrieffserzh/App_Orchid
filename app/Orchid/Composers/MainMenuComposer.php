<?php

declare(strict_types=1);

namespace App\Orchid\Composers;

use Orchid\Platform\Menu;
use Orchid\Platform\ItemMenu;
use Orchid\Platform\Dashboard;

class MainMenuComposer
{
    /**
     * @var Dashboard
     */
    private $dashboard;

    /**
     * MenuComposer constructor.
     *
     * @param Dashboard $dashboard
     */
    public function __construct(Dashboard $dashboard)
    {
        $this->dashboard = $dashboard;
    }

    /**
     * Registering the main menu items.
     */
    public function compose()
    {
        // Profile
//        $this->dashboard->menu
//            ->add(Menu::PROFILE,
//                ItemMenu::label('Example 1')
//                    ->icon('icon-compass')
//            )
//            ->add(Menu::PROFILE,
//                ItemMenu::label('Example 2')
//                    ->icon('icon-heart')
//                    ->badge(function () {
//                        return 6;
//                    })
//            )
//            ->add(Menu::PROFILE,
//                ItemMenu::label('Example 3')
//                    ->icon('icon-microphone')
//            );


//        // Main
//        $this->dashboard->menu
//
//            ->add(Menu::MAIN,
//                ItemMenu::label('Example 4')
//                    ->icon('icon-folder')
//                    ->route('platform.pages')
//                    ->childs()
//            )
//                    ->add(Menu::MAIN,
//                        ItemMenu::label('Основной')
//                            ->icon('icon-folder')
//                            ->route('platform.blog')
//            );
//            ->add(Menu::MAIN,
//                ItemMenu::label('Example 5 menu')
//                    ->slug('example-menu')
//                    ->icon('icon-heart')
//                    ->childs()
//            )
//            ->add('example-menu',
//                ItemMenu::label('Example sub 1')
//                    ->icon('icon-bag')
//                    ->route('platform.example')
//            )
//            ->add('example-menu',
//                ItemMenu::label('Example sub 2')
//                    ->icon('icon-heart')
//                    ->route('platform.example')
//                    ->groupName('Separate')
//            )
//            ->add(Menu::MAIN,
//                ItemMenu::label('Example 6')
//                    ->icon('icon-code')
//                    ->route('platform.example')
//            )
//            ->add(Menu::MAIN,
//                ItemMenu::label('Example 7')
//                    ->icon('icon-bag')
//                    ->route('platform.example')
//            )
//            ->add(Menu::MAIN,
//                ItemMenu::label('Example 8')
//                    ->icon('icon-folder')
//                    ->route('platform.example')
//            );


        ///
        ///
        ///

        $this->dashboard->menu
            ->add(Menu::MAIN,
                ItemMenu::label('Панель управления')
                    ->icon('icon-home')
                    ->route('platform.main')
                    ->sort(0)
            )
            ->add(Menu::MAIN,
                ItemMenu::label('Страницы')
                    ->icon('icon-doc')
                    ->route('platform.pages')
                    //->groupName('Контент')
                    ->sort(15)
            )
            ->add(Menu::MAIN,
                ItemMenu::label('Пользователи')
                    ->icon('icon-user')
                    ->route('platform.systems.users')
                    ->groupName('Пользователи и группы')
                    ->sort(20)
            )
            ->add(Menu::MAIN,
                ItemMenu::label('Группы доступа')
                    ->icon('icon-shield')
                    ->route('platform.systems.roles')
                    ->sort(30)
            )
            ->add(Menu::MAIN,
                ItemMenu::label('Параметры системы')
                    ->icon('icon-settings')
                    ->route('platform.settings')
                    ->groupName('Система')
                    ->sort(40)
            );

    }
}
