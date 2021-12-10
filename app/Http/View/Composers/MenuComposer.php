<?php

namespace App\View\Composers;

use App\Models\Menu;
use Illuminate\View\View;

class MenuComposer
{
    protected $users;

    public function __construct()
    {
    }

    public function compose(View $view)
    {
        $menus =  Menu::select('id')->where('active', 1)->orderBy('id')->get();
        $view->with('menus', $menus);
    }
}
