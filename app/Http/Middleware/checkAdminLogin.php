<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;


class checkAdminLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

//       if(Auth::check()){
//           return $next($request);
//       }
//       else
//
//           return redirect('admin/login');
        // nếu user đã đăng nhập
        if (Auth::guard('admins')->check())
        {
//            $user = Auth::guard('admins')->user();
//            // nếu level =1 (admin), status = 1 (actived) thì cho qua.
//            if ($user->level == 1)
//            {
//                return $next($request);
//            }
//            else
//            {
//                Auth::logout();
//                return redirect('admin/login');
//            }
        return $next($request);
        }
        else
            return redirect('admin/login');

    }

}
