<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Categories;
use App\product_colors;
use App\Product_detail;
use App\Products;
use App\SubCategory;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function getlist($id)
    {
        if ($id != 'all') {
            $pro = Products::where('CategoryId', $id)->paginate(10);
            $cat = Categories::all();
            return view('Admin.products.list', ['pro' => $pro, 'cat' => $cat, 'cat_id' => $id]);
        }
        $pro = Products::paginate(10);
        $cat = Categories::all();
        $color = product_colors::all();

        return view('Admin.products.list', ['pro' => $pro, 'cat' => $cat, 'loai' => 0, 'color' => $color]);
    }

    public function postadd(Request $rq)
    {
        $pro = new Products();
        $pro->Code = 'SP' . mt_rand(100, 1000);
        $pro->Name = $rq->txtname;
        $pro->slug = str_slug($rq->txtname, '-');
        $pro->Price = $rq->txtprice;
        $pro->id_color = $rq->sltcolor;
        $pro->Description = $rq->txtdescription;
        $pro->SubCategoryId = $rq->sltsubcate;
        $file_path = public_path('images/product/') . $pro->Image;

        if ($rq->hasFile('txtimg1')) {
            if ($pro->Image1) {
                if (file_exists($file_path)) {
                    unlink($file_path);
                }
            }

            $f = $rq->file('txtimg1')->getClientOriginalName();
            $filename = time() . '_' . $f;
            $pro->Image = $filename;
            $rq->file('txtimg1')->move('images/product/', $filename);
        }

        $pro->save();
        return redirect('admin/sanpham/all')
            ->with(['flash_level' => 'result_msg', 'flash_massage' => ' Đã thêm thành công !']);
    }

    public function getdel($id)
    {
        $pro = Products::find($id);

        if ($pro->Image3) {
            $file_path = public_path('images/product/') . $pro->Image3;

            if (file_exists($file_path)) {
                unlink($file_path);
            }
        }

        if ($pro->Image2) {
            $file_path = public_path('images/product/') . $pro->Image2;

            if (file_exists($file_path)) {
                unlink($file_path);
            }
        }

        if ($pro->Image1) {
            $file_path = public_path('images/product/' . $pro->Image1);

            if (file_exists($file_path)) {
                unlink($file_path);
            }
        }
        $pro->delete();
        return back()
            ->with(['flash_level' => 'result_msg', 'flash_massage' => 'Xóa thành công']);
    }

    public function getedit($id)
    {
        $pro = Products::where('Id', $id)->first();
        $cat = Categories::all();
        $subcat = SubCategory::all();
        return view('Admin.products.edit', ['pro' => $pro, 'cat' => $cat, 'subcat' => $subcat]);
//        $subcat_id=  $pro->SubCategoryId!=null?$pro->SubCategoryId:null;
//        $subcategory= SubCategory::where('Id',$subcat_id)->first();
//        $cat_id=$subcategory->CategoryId!=null?$subcategory->CategoryId:null;
//        $category=Categories::where('Id',$cat_id)->first();
//

//        }
    }

    public function postedit(Request $rq)
    {
        $pro = Products::find($rq->pro_id);
        $pro->Code = 'SP' . mt_rand(100, 1000);

        if ($rq->txtname != '') {
            $pro->Name = $rq->txtname;
            $pro->slug = str_slug($rq->txtname, '-');
        }

        $pro->Price = $rq->txtprice;

        if ($rq->sltcolor != '') {
            $pro->id_color = $rq->sltcolor;
        }
        $pro->Description = $rq->txtdescription;
        $pro->SubCategoryId = $rq->sltsubcate;
        $file_path = public_path('images/product/') . $pro->Image;

        if ($rq->hasFile('txtimg1')) {
            if ($pro->Image1) {
                if (file_exists($file_path)) {
                    unlink($file_path);
                }
            }

            $f = $rq->file('txtimg1')->getClientOriginalName();
            $filename = time() . '_' . $f;
            $pro->Image = $filename;
            $rq->file('txtimg1')->move('images/product/', $filename);
        }

        $pro->save();

        return redirect('admin/sanpham/all')
            ->with(['flash_level' => 'result_msg', 'flash_massage' => ' Đã lưu !']);
    }

    public function detail($id)
    {
        $pro = Products::findorfail($id);
        $pro_detail = $pro->pro_detail;
        return view('Admin.products.detail', ['pro_detail' => $pro_detail, 'pro' => $pro]);
    }

    public function edit_pro_detail(Request $rq)
    {
//     $this->validate($rq, [
//         'sltsize' => 'required|string|max:255|unique:product_detail,size,NULL,id,product_id,'.$rq->pro_id,
//     ],
//         ['sltsize.unique' => 'Kích cỡ bạn sửa đã tồn tại']);
        $pro_detail = Product_detail::find($rq->pro_detail_id);
        $pro_detail->size = $rq->sltsize;
        $pro_detail->quantity = $rq->txtquantity;
        $pro_detail->status = $rq->txtstatus;
        $file_path = public_path('images/product/') . $pro_detail->image1;

        if ($rq->hasFile('txtimg1')) {
            if ($pro_detail->image1) {
                if (file_exists($file_path)) {
                    unlink($file_path);
                }
            }

            $f = $rq->file('txtimg1')->getClientOriginalName();
            $filename = time() . '_' . $f;
            $pro_detail->image1 = $filename;
            $rq->file('txtimg1')->move('images/product/', $filename);
        }
        $file_path = public_path('images/product/') . $pro_detail->image2;

        if ($rq->hasFile('txtimg2')) {
            if ($pro_detail->image1) {
                if (file_exists($file_path)) {
                    unlink($file_path);
                }
            }

            $f = $rq->file('txtimg2')->getClientOriginalName();
            $filename = time() . '_' . $f;
            $pro_detail->image1 = $filename;
            $rq->file('txtimg2')->move('images/product/', $filename);
        }
        $file_path = public_path('images/product/') . $pro_detail->image3;

        if ($rq->hasFile('txtimg3')) {
            if ($pro_detail->image3) {
                if (file_exists($file_path)) {
                    unlink($file_path);
                }
            }

            $f = $rq->file('txtimg1')->getClientOriginalName();
            $filename = time() . '_' . $f;
            $pro_detail->image1 = $filename;
            $rq->file('txtimg3')->move('images/product/', $filename);
        }
        $pro_detail->save();
        return redirect()->back()
         ->with(['flash_level' => 'result_msg', 'flash_massage' => ' Sửa thành công !']);
    }

    public function dell_detail($id)
    {
        $pro = Product_detail::find($id);

        if ($pro->image3) {
            $file_path = public_path('images/product/') . $pro->image3;

            if (file_exists($file_path)) {
                unlink($file_path);
            }
        }

        if ($pro->image2) {
            $file_path = public_path('images/product/') . $pro->image2;

            if (file_exists($file_path)) {
                unlink($file_path);
            }
        }

        if ($pro->image1) {
            $file_path = public_path('images/product/' . $pro->image1);

            if (file_exists($file_path)) {
                unlink($file_path);
            }
        }
        $pro->delete();
        return back()
         ->with(['flash_level' => 'result_msg', 'flash_massage' => 'Xóa thành công']);
    }

    public function add_pro_detail(Request $rq)
    {
        $this->validate(
            $rq,
            [
                'sltsize' => 'required|string|max:255|unique:product_detail,size,NULL,id,product_id,' . $rq->pro_id,
            ],
            ['sltsize.unique' => 'Kích cỡ bạn thêm đã tồn tại']
        );
        $pro_detail = new Product_detail();
        $pro_detail->product_id = $rq->pro_id;
        $pro_detail->size = $rq->sltsize;
        $pro_detail->quantity = $rq->txtquantity;
        $pro_detail->status = $rq->txtstatus;
        $file_path = public_path('images/product/') . $pro_detail->image1;

        if ($rq->hasFile('txtimg1')) {
            if ($pro_detail->image1) {
                if (file_exists($file_path)) {
                    unlink($file_path);
                }
            }

            $f = $rq->file('txtimg1')->getClientOriginalName();
            $filename = time() . '_' . $f;
            $pro_detail->image1 = $filename;
            $rq->file('txtimg1')->move('images/product/', $filename);
        }
        $file_path = public_path('images/product/') . $pro_detail->image2;

        if ($rq->hasFile('txtimg2')) {
            if ($pro_detail->image1) {
                if (file_exists($file_path)) {
                    unlink($file_path);
                }
            }

            $f = $rq->file('txtimg2')->getClientOriginalName();
            $filename = time() . '_' . $f;
            $pro_detail->image1 = $filename;
            $rq->file('txtimg2')->move('images/product/', $filename);
        }
        $file_path = public_path('images/product/') . $pro_detail->image3;

        if ($rq->hasFile('txtimg3')) {
            if ($pro_detail->image3) {
                if (file_exists($file_path)) {
                    unlink($file_path);
                }
            }

            $f = $rq->file('txtimg1')->getClientOriginalName();
            $filename = time() . '_' . $f;
            $pro_detail->image1 = $filename;
            $rq->file('txtimg3')->move('images/product/', $filename);
        }
        $pro_detail->save();
        return redirect()->back()
            ->with(['flash_level' => 'result_msg', 'flash_massage' => ' Thêm  thành công !']);
    }
}
