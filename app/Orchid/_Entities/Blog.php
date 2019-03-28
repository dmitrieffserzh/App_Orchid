<?php

namespace App\Orchid\_Entities;

use Orchid\Screen\Field;
use Orchid\Press\Entities\Many;
use Orchid\Platform\Filters\Filter;


use Orchid\Screen\TD;
use Orchid\Screen\Fields\Map;
use Orchid\Screen\Fields\UTM;
use Orchid\Screen\Fields\Code;
use Orchid\Screen\Fields\Tags;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Fields\Upload;
use Orchid\Press\Models\Category;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Fields\TinyMCE;
use Orchid\Screen\Fields\CheckBox;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Fields\DateTimer;
use Orchid\Screen\Fields\SimpleMDE;
use Illuminate\Database\Eloquent\Model;
use Orchid\Press\Http\Filters\SearchFilter;
use Orchid\Press\Http\Filters\StatusFilter;
use Orchid\Press\Http\Filters\CreatedFilter;


class Blog extends Many
{

    /**
     * @var string
     */
    public $name = 'Блоги';

    /**
     * @var string
     */
    public $slug = 'blog';

    /**
     * @var string
     */
    public $icon = 'icon-folder';

    /**
     * Slug url /news/{name}.
     * @var string
     */
    public $slugFields = '';

    public $sort = -90;


    /**
     * Rules Validation.
     * @return array
     */
    public function rules() : array
    {
        return [];
    }

    /**
     * @return array
     */
    public function fields() : array
    {
        return [
            Field::group([

                Input::make('name')
                    ->type('text')
                    ->max(255)
                    ->required()
                    ->title('Name Articles')
                    ->help('Article title'),

                Input::make('title')
                    ->type('text')
                    ->max(255)
                    ->required()
                    ->title('Article Title')
                    ->help('SEO title'),

            ]),


        ];
    }

    /**
     * Grid View for post type.
     */
    public function grid() : array
    {
        return [
            TD::set('id', 'ID')
                ->align(TD::ALIGN_CENTER)
                ->width('100px')
                ->filter('numeric')
                ->sort()
                ->linkPost(),

            TD::set('name', 'Заголовок')
                ->locale()
                ->column('content.name')
                ->filter('text')
                ->sort()
                ->linkPost('name'),

            TD::set('status', 'Статус')
                ->width('100px')
                ->align(TD::ALIGN_CENTER)
                ->sort(),

            TD::set('publish_at', 'Опубликован')
                ->width('200px')
               // ->filter('date')
                ->sort()
                ->align(TD::ALIGN_CENTER)
                ->render(function ($item) {
                    return optional($item->publish_at)->toDateString();
                }),

            TD::set('created_at', 'Создан')
                ->width('200px')
                //->filter('date')
                ->align(TD::ALIGN_CENTER)
                ->sort()
                ->render(function ($item) {
                    return $item->created_at->toDateString();
                }),
        ];
    }

    /**
     * @return array
     */
    public function options() : array
    {
        return [];
    }
}