<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\TheLoai;
use App\TinTuc;
Route::get('/', function () {
    return redirect('trangchu');
});

route::get('thu',function(){
	$theloai=TheLoai::find(2);
	foreach($theloai->loaitin as $loaitin){
		echo $loaitin->ten.'<br>';
	}
});

route::get('thu2',function(){
	return view('admin.theloai.danhsach');
});
//route admin cpan quan li
route::get('admin/dangnhap','UserController@getDangnhapAdmin');
route::post('admin/dangnhap','UserController@postDangnhapAdmin');
route::get('admin/logout','UserController@getDangxuatAdmin');
route::get('admin',function(){
	return view('admin.layout.gioithieuadmin');
})->middleware('adminLogin');
route::group(['prefix'=>'admin','middleware'=>'adminLogin'],function(){

		route::group(['prefix'=>'theloai'],function(){
			//admin/the/them-sua-danhsach
			route::get('danhsach','TheLoaiController@getDanhSach');

			route::get('sua/{id}','TheLoaiController@getSua');
			route::post('sua/{id}','TheLoaiController@postSua');

			route::get('them','TheLoaiController@getThem');
			route::post('them','TheLoaiController@postThem');

			route::get('xoa/{id}','TheLoaiController@getXoa');

		});

		route::group(['prefix'=>'loaitin'],function(){
				//admin/the/them-sua-danhsach
				route::get('danhsach','LoaiTinController@getLoaitin');

				route::get('sua/{id}','LoaiTinController@getSua');
				route::post('sua/{id}','LoaiTinController@postSua');

				route::get('them','LoaiTinController@getThem');
				route::post('them','LoaiTinController@postThem');

				route::get('xoa/{id}','LoaiTinController@getXoa');

			});

		route::group(['prefix'=>'tintuc'],function(){
				//admin/the/them-sua-danhsach
				route::get('danhsach','TinTucController@getTinTuc');

				route::get('sua/{id}','TinTucController@getSua');
				route::post('sua/{id}','TinTucController@postSua');

				route::get('xoa/{id}','TinTucController@getXoa');
				route::post('xoa/{id}','TinTucController@postXoa');

				route::get('them','TinTucController@getThem');
				route::post('them','TinTucController@postThem');

				

			});
		route::group(['prefix'=>'comment'],function(){
				//admin/the/them-sua-danhsach
				route::get('xoa/{id}/{idtin}','CommentController@getXoa');
			});

		route::group(['prefix'=>'slide'],function(){
				//admin/the/them-sua-danhsach
				route::get('danhsach','SlideController@getSlide');

				route::get('sua/{id}','SlideController@getSua');
				route::post('sua/{id}','SlideController@postSua');

				route::get('them','SlideController@getThem');
				route::post('them','SlideController@postThem');

				route::get('xoa/{id}','SlideController@getXoa');

			});
		route::group(['prefix'=>'user'],function(){
				//admin/the/them-sua-danhsach
				route::get('danhsach','UserController@getUser');

				route::get('sua/{id}','UserController@getSua');
				route::post('sua/{id}','UserController@postSua');

				route::get('them','UserController@getThem');
				route::post('them','UserController@postThem');

				route::get('xoa/{id}','UserController@getXoa');

			});

		route::group(['prefix'=>'ajax'],function(){
			route::get('loaitin/{idtheloai}','AjaxController@getLoaitin');
		});


});
// Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');
// route::get('admin','HomeController@index');
//route admin cpan quan li

route::get('trangchu','PageController@trangchu')->name('home');
route::get('loaitin/{id}/{tenkhongdau}.html','PageController@loaitin');
route::get('tintuc/{id}/{slug}.html','PageController@tintuc')
;

route::get('dangky','PageController@getdangky');
route::get('dangnhap','PageController@getdangnhap');
route::post('dangnhap','PageController@postdangnhap');
route::get('dangxuat','PageController@getdangxuat');

route::post('comment/{id}','CommentController@postbinhluan');

route::get('thongtinuser','PageController@getdoithongtin');
route::post('thongtinuser','PageController@postdoithongtin');

route::get('timkiem','PageController@gettimkiem');
// route::post('timkiem','PageController@postimkiem');

route::get('lienhe','PageController@getlienhe');




