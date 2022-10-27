<?php

declare(strict_types=1);

namespace App\Http\Controllers;

class statisticalcontroller extends Controller
{
    public function getlist()
    {
        return view('Admin.statistical.list');
    }
}
