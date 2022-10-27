<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\AddNewsRequest;
use App\News;
use Auth;
use DateTime;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function getlist()
    {
        $data = News::paginate(10);
        return view('Admin.news.list', ['data' => $data]);
    }

    public function getadd()
    {
//        $cat= Category::where('parent_id',13)->get();

        return view('Admin.news.add');
    }

    public function postadd(AddNewsRequest $rq)
    {
        $n = new News();
        $n->Title = $rq->txtTitle;
        $n->slug = str_slug($rq->txtTitle, '-');
        $n->Author = $rq->txtAuth;
        $n->Status = $rq->slstatus;
        $n->Intro = $rq->txtIntro;
        $n->Content = $rq->txtFull;
        $f = $rq->file('txtimg')->getClientOriginalName();
        $filename = time() . '_' . $f;
        $n->Images = $filename;
        $rq->file('txtimg')->move('images/news/', $filename);

        $n->save();
        return redirect('admin/news')
            ->with(['flash_level' => 'result_msg', 'flash_massage' => ' Đã thêm thành công !']);
    }

    public function getedit($id)
    {
        $n = News::where('id', $id)->first();
        return view('Admin.news.edit', ['data' => $n]);
    }

    public function postedit(Request $rq, $id)
    {
        $n = News::find($id);
        $n->Title = $rq->txtTitle;
        $n->Slug = str_slug($rq->txtTitle, '-');
        $n->Author = $rq->txtAuth;
//        $n->tag = $rq->txttag;
        $n->Status = $rq->slstatus;
//        $n->source = $rq->txtSource;
        $n->Intro = $rq->txtIntro;
        $n->Content = $rq->txtFull;
//
//        $n->user_id = Auth::guard('admin')->user()->id;
        $n->created_at = new datetime();

        $file_path = public_path('images/news/') . $n->Images;

        if ($rq->hasFile('txtimg')) {
            if (file_exists($file_path)) {
                unlink($file_path);
            }

            $f = $rq->file('txtimg')->getClientOriginalName();
            $filename = time() . '_' . $f;
            $n->images = $filename;
            $rq->file('txtimg')->move('images/news/', $filename);
        }

        $n->save();
        return redirect('admin/news')
            ->with(['flash_level' => 'result_msg', 'flash_massage' => ' Đã sửa thành công !']);
    }

    public function getdel($id)
    {
        $news = News::find($id);

        if ($news->Images) {
            $file_path = public_path('images/product/') . $news->Images;

            if (file_exists($file_path)) {
                unlink($file_path);
            }
        }

        $news->delete();
        return back()
            ->with(['flash_level' => 'result_msg', 'flash_massage' => 'Xóa thành công']);
    }
}
