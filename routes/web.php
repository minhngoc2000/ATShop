    <?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|/
*/

Route::get('/', 'MainController@getproducts');
Route::get('slider', function () {
    return view('Page.slider');
});
Route::get('content', function () {
    return view('Page.content');
});
Route::get('product_detail/{slug}', 'MainController@getproduct_detail')->name('product_detail');
Route::get('contact', function () {
    return view('Page.contact');
});
Route::get('checkout', 'CheckoutController@checkout')->name('checkout');
Route::post('checkout', 'CheckoutController@postcheckout')->name('postcheckout');

Route::get('addcart/{id}', 'MainController@addcart')->name('addcart');
Route::get('list-cart', 'MainController@listcart')->name('list-cart');
Route::post('cart_delete', 'MainController@cart_delete')->name('cart_delete');
Route::get('update/{id}', 'MainController@update');
Route::get('/redirect/{social}', 'SocialAuthController@redirect');
Route::get('/callback/{social}', 'SocialAuthController@callback');
Route::post('customLogin', 'MainController@login')->name('customLogin');
Route::post('customRegister', 'MainController@register')->name('customRegister');
Route::get('logout', 'MainController@logout')->name('logout');
Route::get('mail', function () {
    return view('Page.mail');
});
Route::get('check_order', function () {
    return view('Page.check_order');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
    //Route::get('/admin', function (){
    //    return view('Admin.home');
    //});
Route::get('admin/login', ['as' => 'getLogin', 'uses' => 'Admin\AdminLoginController@getLogin']);
Route::post('admin/login', ['as' => 'postLogin', 'uses' => 'Admin\AdminLoginController@postLogin']);
Route::get('admin/logout', ['as' => 'getLogout', 'uses' => 'Admin\AdminLoginController@getLogout']);

    Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function (): void {
        Route::get('/home', function () {
            return view('Admin.home');
        });
        // -------------------- quan ly danh muc----------------------
        Route::group(['prefix' => 'danhmuc'], function (): void {
            Route::get('add', ['as' => 'getaddcat', 'uses' => 'CategoryController@getadd']);
            Route::post('add', ['as' => 'postaddcat', 'uses' => 'CategoryController@postadd']);

            Route::get('/', ['as' => 'getcat', 'uses' => 'CategoryController@getlist']);
            Route::get('del/{id}', ['as' => 'getdellcat', 'uses' => 'CategoryController@getdel'])->where('id', '[0-9]+');

            Route::get('edit/{id}', ['as' => 'geteditcat', 'uses' => 'CategoryController@getedit'])->where('id', '[0-9]+');
            Route::post('edit/{id}', ['as' => 'posteditcat', 'uses' => 'CategoryController@postedit'])->where('id', '[0-9]+');
        });
        // -------------------- quan ly sản phẩm--------------------
        Route::group(['prefix' => '/sanpham'], function (): void {
            Route::get('/add', ['as' => 'getaddpro', 'uses' => 'ProductsController@getadd']);
            Route::post('/add', ['as' => 'postaddpro', 'uses' => 'ProductsController@postadd']);
            Route::get('/detail/{id}', ['as' => 'detail', 'uses' => 'ProductsController@detail']);

            Route::get('/{loai}', ['as' => 'getpro', 'uses' => 'ProductsController@getlist']);
            Route::get('/del/{id}', ['as' => 'getdellpro', 'uses' => 'ProductsController@getdel'])->where('id', '[0-9]+');

            Route::get('/edit/{id}', ['as' => 'geteditpro', 'uses' => 'ProductsController@getedit'])->where('id', '[0-9]+');
            Route::post('edit', ['as' => 'posteditpro', 'uses' => 'ProductsController@postedit'])->where('id', '[0-9]+');
            Route::post('editdetail', ['as' => 'editdetail', 'uses' => 'ProductsController@edit_pro_detail'])->where('id', '[0-9]+');
            Route::post('adddetail', ['as' => 'editdetail', 'uses' => 'ProductsController@add_pro_detail'])->where('id', '[0-9]+');

            Route::get('deldetail/{id}', ['as' => 'deldetail', 'uses' => 'ProductsController@dell_detail'])->where('id', '[0-9]+');
        });
        // -------------------- quan ly tin tuc-----------------------------
        Route::group(['prefix' => '/news'], function (): void {
            Route::get('/', ['as' => 'getnews', 'uses' => 'NewsController@getlist']);
            Route::get('/add', ['as' => 'getaddnews', 'uses' => 'NewsController@getadd']);
            Route::post('/add', ['as' => 'postaddnews', 'uses' => 'NewsController@postadd']);

            Route::get('/del/{id}', ['as' => 'getdellnews', 'uses' => 'NewsController@getdel'])->where('id', '[0-9]+');

            Route::get('/edit/{id}', ['as' => 'geteditnews', 'uses' => 'NewsController@getedit'])->where('id', '[0-9]+');
            Route::post('/edit/{id}', ['as' => 'posteditnews', 'uses' => 'NewsController@postedit'])->where('id', '[0-9]+');
        });
        // -------------------- quan ly đơn đặt hàng--------------------
        Route::group(['prefix' => '/donhang'], function (): void {
            Route::get('', ['as' => 'getorder', 'uses' => 'OrdersController@getlist']);
            Route::get('/del/{id}', ['as' => 'getdelorder', 'uses' => 'OrdersController@getdel'])->where('id', '[0-9]+');

            Route::get('detail/{id}', ['as' => 'getdetail', 'uses' => 'OrdersController@getdetail'])->where('id', '[0-9]+');
            Route::post('/detail/{id}', ['as' => 'postdetail', 'uses' => 'OrdersController@postdetail'])->where('id', '[0-9]+');
            Route::post('/edit', ['as' => 'postedit', 'uses' => 'OrdersController@postedit'])->where('id', '[0-9]+');
        });
        // -------------------- quan ly thong tin khach hang--------------------
        Route::group(['prefix' => '/khachhang'], function (): void {
            Route::get('', ['as' => 'getmem', 'uses' => 'UsersController@getlist']);
            Route::get('/del/{id}', ['as' => 'getdelmem', 'uses' => 'UsersController@getdel'])->where('id', '[0-9]+');

            Route::get('/edit/{id}', ['as' => 'geteditmem', 'uses' => 'UsersController@getedit'])->where('id', '[0-9]+');
            Route::post('/edit/{id}', ['as' => 'posteditmem', 'uses' => 'UsersController@postedit'])->where('id', '[0-9]+');
        });
        // -------------------- quan ly thong nhan vien--------------------
        Route::group(['prefix' => '/nhanvien'], function (): void {
            Route::get('thongtin', ['as' => 'thongtinnv', 'uses' => 'StaffController@thongtinnv']);

            Route::get('', ['as' => 'getnv', 'uses' => 'StaffController@getlist']);
            Route::post('/add', ['as' => 'addnv', 'uses' => 'StaffController@staff_add']);

            Route::get('/del/{id}', ['as' => 'getdelnv', 'uses' => 'StaffController@getdel'])->where('id', '[0-9]+');
            Route::post('/edit', ['as' => 'posteditnv', 'uses' => 'StaffController@staff_edit'])->where('id', '[0-9]+');
        });
        Route::group(['prefix' => '/thongke'], function (): void {
            Route::get('', ['as' => 'thongke', 'uses' => 'statisticalcontroller@getlist']);
        });
        Route::group(['prefix' => '/ajax'], function (): void {
            Route::get('ajax_subcategory', 'AjaxController@getsubcategory');
            Route::get('loaisanpham', 'AjaxController@loaisanpham');
        });

        // ---------------van de khac ----------------------
    });
Route::get('district', 'AjaxController@getdistrict');
    Route::get('find', 'SearchController@search')->name('find');
    Route::get('/auth/facebook', 'SocialAuthController@redirectToProvider');
    Route::get('/auth/facebook/callback', 'SocialAuthController@handleProviderCallback');

    Route::get('Tin-tuc/{slug}', 'MainController@news_detail')->name('Tin-tuc');
Route::get('getaddress', 'AjaxController@address');
Route::get('nexmo', function (): void {
    $text = 'Ban da dat hang thanh cong ! moi thâc mac vui long lien he 05003556789';
    $nexmoClient = new Nexmo\Client(new Nexmo\Client\Credentials\Basic('206f4f31', 'U4uT0rNbInTOK3ym'));
    $message = $nexmoClient->message()->send([
        'from' => '@leggetter',
        'to' => 84973962984,
        'text' => $text,
    ]);
});
//Loại sản phẩm
Route::get('danh-muc/{slug}', 'MainController@danhmuc')->name('danh-muc');
Route::get('mau-sac', 'MainController@color')->name('mau-sac');
Route::get('kich-co', 'MainController@size')->name('kich-co');

Route::get('filter', 'MainController@filter');
Route::get('filter_2', 'MainController@filter_2');
Route::get('filter_search', 'MainController@filter_search');

Route::get('test', 'MainController@filter');
Route::get('search/autocomplete', 'SearchController@autocomplete');
Route::get('timkiem', 'SearchController@index');
Route::get('yeu-thich', 'wishlistcontroller@create');

Route::get('danh-sach-yeu-thich', 'wishlistcontroller@index')->name('danh-sach-yeu-thich');
Route::get('xoadanhsach/{id}', 'wishlistcontroller@delete');
Route::get('getcoupon', 'AjaxController@getcoupon');
Route::get('tai-khoan/doi-mat-khau/{id}', 'MainController@changepassword');
//reset password
//    Route::get('password/reset/{token?}','Auth\ResetPasswordController@showResetForm    ');
//Route::post('password/email','Auth\PasswordController@sendResetLinkEmail');
//Route::post('password/reset','Auth\ResetPasswordController@reset');
Route::get('xacnhanthanhtoan', 'CheckoutController@xacnhanthanhtoan');
Route::get('contact', 'MainController@contact');
Route::get('lich-su-mua-hang', 'MainController@order_history');
Route::get('lich-su-mua-hang/xoa/{id}', 'MainController@del_order_history');
Route::get('thong-tin-tai-khoan', 'MainController@account');
Route::get('thong-tin-tai-khoan/capnhat/{id}', 'MainController@get_account');
Route::post('thong-tin-tai-khoan/capnhat', 'MainController@post_account');
Route::post('thong-tin-tai-khoan/doi-mat-khau', 'MainController@postchangepassword');
Route::get('excel', 'MainController@aaa');
