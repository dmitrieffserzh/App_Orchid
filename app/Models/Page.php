<?php

namespace App\Models;

use Orchid\Platform\Traits\MultiLanguageTrait;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use MultiLanguageTrait;

    protected $table = 'pages';
    protected $fillable = ['title', 'seo_title', 'seo_desc', 'slug', 'content'];
}
