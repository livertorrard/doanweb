<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TheLoai;
use App\Slide;
use App\LoaiTin;
use App\TinTuc;
use App\User;
use App\Comment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\Paginator;
use DateTime;

class PageController extends Controller
{
    
	function __construct(){
		$theloai = TheLoai::all();
		$slide = Slide::all();
	    $ttchung= TinTuc::all();
        $loaitin = LoaiTin::all();
           // inRandomOrder()->take(3)->get();
        $now = new DateTime();
		view()->share('theloai',$theloai);
		view()->share('slide',$slide);
        view()->share('tt_chung',$ttchung);
        view()->share('thoigian_time',$now);
        view()->share('lt_chung',$loaitin);
       
	}

    function trangchu(){
    	return view('page.trangchu');
    }

    function loaitin($id,$slug){
    	$loaitin = LoaiTin::find($id);
    	$tintuc = TinTuc::where('id_loaitin',$id)->paginate('5');
    	return view('page.loaitin',['loaitin'=>$loaitin,'tintuc'=>$tintuc]);
    }
    function tintuc($id,$slug){
        $Comment = Comment::all();
        $tintuc = TinTuc::find($id);
        if($slug == $tintuc->tieudekhongdau )
       {
         
    	
    	$tinnoibat= TinTuc::where('noibat',1)->take(4)->get();
    	$tinlienquan = TinTuc::where('id_loaitin',$tintuc->id_loaitin)->take(4)->get();
    	return view('page.tintuc',['tintuc'=>$tintuc,'tinnoibat'=>$tinnoibat,'tinlienquan'=>$tinlienquan]);
      }else return view('abc');
    }
    function getdangnhap(){
        return view('page.dangnhap');
    }
    function postdangnhap(Request $Request){
            $this->validate($Request,
                [
                    'email'=>'Required',
                    'password'=>'Required|min:3|max:32'
                ],[
                    'email.Required'=>'Bạn chưa nhập email',
                    'password.Required'=>'Bạn chưa nhập password',
                    'password.min'=>'mật khẩu dài từ 3 đến 32 kí tự',
                    'password.max'=>'mật khẩu dài từ 3 đến 32 kí tự'
                ]);
            if(Auth::attempt(['email'=>$Request->email,'password'=>$Request->password])){
                return redirect('trangchu');
            }else{
                return redirect('dangnhap')->with('thongbao','Thông tin đăng nhập không đúng');
            }
    }
    function getdangxuat(){
        Auth::logout();
        return redirect('trangchu');
    }

    function getdoithongtin(){
        return view('page.nguoidung');
    }
    function postdoithongtin(Request $Request){
        $this->validate($Request,
            [
                'name'=>'Required|min:3',
            ],[
                'name.Required'=>'Bạn chưa nhập tên người dùng',
                'name.min'=>'Tên người dùng ít nhất có 3 kí tự',
            ]);
        $user = Auth::user();
        $user->name = $Request->name;

        if($Request->changePassword == "on"){
                $this->validate($Request,
            [
                'password'=>'Required|min:3|max:32',
                'passwordAgain'=>'Required|same:txtpassword'
            ],[
                'password.Required'=>'Bạn chưa nhập mật khẩu',
                'password.min'=>'Mật khẩu dài từ 3 đến 32 kí tự',
                'password.max'=>'Mật khẩu dài từ 3 đến 32 kí tự',
                'passwordAgain.Required'=>'Bạn chưa nhập lại mật khẩu',
                'passwordAgain.same'=>'Mật khẩu nhập lại chưa khớp'
            ]);
        $user->password = bcrypt($Request->password);
        }

        $user->save();

        return redirect('trangchu')->with('thongbao',$user->name.'Đã được cập nhập thông tin' );
    }
    function gettimkiem(Request $Request){

        $tukhoa=$Request->get('tukhoa');
        $tintuc = TinTuc::where('tieude','like',"%$tukhoa%")->orwhere('tomtat','like',"%$tukhoa%")->orwhere('noidung','like',"%$tukhoa%")->take(10)->paginate(5);

        return view('page.timkiem',['tukhoa'=>$tukhoa,'tintuc'=>$tintuc]);
    }

    
    function getlienhe(){
        return view('page.contact');
    }
    function getdangky(){
        return view('page.dangky');
    }
    function postdangky(Request $Request){
        $user = new User;

        $this->validate($Request,
            [
                'txtten'=>'Required|min:3',
                'txtemail'=>'Required|email|unique:users,email',
                'txtpassword'=>'Required|min:3|max:32',
                'txtpasswordAg'=>'Required|same:txtpassword'
            ],[
                'txtten.Required'=>'Bạn chưa nhập tên người dùng',
                'txtten.min'=>'Tên người dùng ít nhất có 3 kí tự',
                'txtemail.Required'=>'Bạn chưa nhập email',
                'txtemail.email'=>'Bạn chưa nhập đúng định dạng email',
                'txtpassword.Required'=>'Bạn chưa nhập mật khẩu',
                'txtpassword.min'=>'Mật khẩu dài từ 3 đến 32 kí tự',
                'txtpassword.max'=>'Mật khẩu dài từ 3 đến 32 kí tự',
                'txtpasswordAg.Required'=>'Bạn chưa nhập lại mật khẩu',
                'txtpasswordAg.same'=>'Mật khẩu nhập lại chưa khớp'
            ]);

        $user->name = $Request->txtten;
        $user->email = $Request->txtemail;
        $user->level = 0;
        $user->password = bcrypt($Request->txtpassword);

        $user->save();
        return redirect('dangnhap')->with('thongbao','Bạn đã đăng kí thành công');

    }
}
