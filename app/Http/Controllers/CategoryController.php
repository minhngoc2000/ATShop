<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Categories;
use App\Http\Requests\AddCategoryRequest;
use App\SubCategory;
use DateTime;

class CategoryController extends Controller
{
    public function getlist()
    {
        $data = Categories::all();
        return View('Admin.category.cat-list', ['data' => $data]);
    }

    public function getadd()
    {
        $data = Categories::all();
        return View('Admin.category.add', ['data' => $data]);
    }

    public function postadd(AddCategoryRequest $rq)
    {
        $cat = new Categories();
        $cat->Name = $rq->txtCateName;

        $cat->save();
        $subcat = new SubCategory();
        $subcat->CategoryId = $cat->Id;
        $subcat->Name = $rq->txtloaisanpham;
//        $cat->slug = str_slug($rq->txtCateName,'-');
        $cat->created_at = new DateTime();
        $subcat->save();
        return redirect()->back()
            ->with(['flash_level' => 'result_msg', 'flash_massage' => ' Đã thêm thành công !']);
    }

    public function getedit($id)
    {
        $cat = Category::all();
        $data = Category::findOrFail($id)->toArray();
        return View('back-end.category.edit', ['cat' => $cat, 'data' => $data]);
    }

    public function postedit($id, AddCategoryRequest $request)
    {
        $cat = category::find($id);
        $cat->name = $request->txtCateName;
        $cat->slug = str_slug($request->txtCateName, '-');
        $cat->parent_id = $request->sltCate;
        $cat->updated_at = new DateTime();
        $cat->save();
        return redirect()->route('getcat')
            ->with(['flash_level' => 'result_msg', 'flash_massage' => ' Đã sửa']);
    }

    public function getdel($id)
    {
        $cat = Categories::findorfail($id);
        $cat->delete();
        return redirect()->with(['flash_level' => 'result_msg', 'flash_massage' => 'Xóa thành công!']);
    }
}
