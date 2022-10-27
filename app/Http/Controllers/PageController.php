<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Categories;

class PageController extends Controller
{
    public function get_menu(): void
    {
        $menu = Categories::all();
        var_dump($menu);
    }
}
