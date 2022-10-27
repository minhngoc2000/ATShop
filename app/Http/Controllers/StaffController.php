<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\staff_request;
use App\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function getlist()
    {
        $data = Staff::paginate(10);
        return view('Admin.staff.list', ['data' => $data]);
    }

    public function staff_add(staff_request $request)
    {
        $data = $request->all();
        $password = $data['password'];
        $user = new staff();
        $user->code = 'NV';
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->level = $data['slttype'];
        $user->sex = $data['sltsex'];
        $user->birthday = $data['birthday'];
        $user->address = $data['address'];
        $user->phone = $data['phone'];
        $user->password = bcrypt($password);
        $user->remember_token = $data['_token'];
        $user->save();
        return redirect()->back()->with(['flash_level' => 'result_msg', 'flash_massage' => ' Thêm  thành công']);
    }

    public function staff_edit(Request $request)
    {
        $data = $request->all();

        $this->validate(
            $request,
            [
                'email' => 'required|email|max:255|unique:staff,email,' . $data['id_staff'],
            ],
            ['email.unique' => 'Email đã tồn tại']
        );
        $password = $data['password'];
        $user = staff::find($data['id_staff']);
        $user->code = 'NV';
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->level = $data['slttype'];
        $user->sex = $data['sltsex'];
        $user->birthday = $data['birthday'];
        $user->address = $data['address'];
        $user->phone = $data['phone'];
        $user->password = bcrypt($password);
        $user->remember_token = $data['_token'];
        $user->save();
        return redirect()->back()->with(['flash_level' => 'result_msg', 'flash_massage' => ' Sửa thành công  thành công']);
    }

    public function thongtinnv()
    {
        return view('Admin.user');
    }
}
