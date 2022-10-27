<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Categories;
use App\product_colors;
use App\product_sizes;
use App\Products;
use App\SubCategory;
use Cart;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $category = Categories::all();
        $product = Products::all();

        $subcategory = SubCategory::all();
        $cart = Cart::content();
        $color = product_colors::all();

//        $sizes=product_sizes::select('name')->distinct()->get();

        view()->share(['category' => $category, 'cart' => $cart, 'subcategory' => $subcategory, 'color' => $color]);
    }
}
