<?php

declare(strict_types=1);
use App\Orchid\Entities\Blog;
use App\Orchid\Screens\ExampleScreen;
use App\Orchid\Screens\PlatformScreen;
use App\Orchid\Screens\Page\PageEditScreen;
use App\Orchid\Screens\Page\PageCreateScreen;
use App\Orchid\Screens\Role\RoleEditScreen;
use App\Orchid\Screens\Role\RoleListScreen;
use App\Orchid\Screens\User\UserEditScreen;
use App\Orchid\Screens\User\UserListScreen;
use App\Orchid\Screens\Comment\CommentEditScreen;
use App\Orchid\Screens\Comment\CommentListScreen;
use App\Orchid\Screens\Category\CategoryEditScreen;
use App\Orchid\Screens\Category\CategoryListScreen;




///
use App\Orchid\Screens\Settings\SettingsScreen;
use App\Orchid\Screens\Page\PageListScreen;

/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the need "dashboard" middleware group. Now create something great!
|
*/

// Main
$this->router->screen('/main', PlatformScreen::class)->name('platform.main');

// Pages
//$this->router->screen('pages/{name}/edit', PageListScreen::class)->name('platform.pages.edit');
//$this->router->screen('pages/create', PageEditScreen::class)->name('platform.pages.create');
//$this->router->screen('pages', PageListScreen::class)->name('platform.pages');
//$this->router->screen('blog', Blog::class)->name('platform.blog');
// Users...
$this->router->screen('users/{users}/edit', UserEditScreen::class)->name('platform.systems.users.edit');
$this->router->screen('users', UserListScreen::class)->name('platform.systems.users');

// Roles...
$this->router->screen('roles/{roles}/edit', RoleEditScreen::class)->name('platform.systems.roles.edit');
$this->router->screen('roles/create', RoleEditScreen::class)->name('platform.systems.roles.create');
$this->router->screen('roles', RoleListScreen::class)->name('platform.systems.roles');

// Comments...
$this->router->screen('comments/{comments}/edit', CommentEditScreen::class)->name('platform.systems.comments.edit');
$this->router->screen('comments/create', CommentEditScreen::class)->name('platform.systems.comments.create');
$this->router->screen('comments', CommentListScreen::class)->name('platform.systems.comments');

// Categories...
$this->router->screen('category/{category}/edit', CategoryEditScreen::class)->name('platform.systems.category.edit');
$this->router->screen('category/create', CategoryEditScreen::class)->name('platform.systems.category.create');
$this->router->screen('category', CategoryListScreen::class)->name('platform.systems.category');

// Example...
$this->router->screen('example', ExampleScreen::class)->name('platform.example');
//Route::screen('/dashboard/screen/idea', 'Idea::class','platform.screens.idea');






// PAGES
$this->router->screen('pages/{pages}/edit', PageEditScreen::class)->name('platform.pages.edit');
$this->router->screen('pages/create', PageEditScreen::class)->name('platform.pages.create');
$this->router->screen('pages', PageListScreen::class)->name('platform.pages');

// SETTINGS
$this->router->screen('settings', SettingsScreen::class)->name('platform.settings');