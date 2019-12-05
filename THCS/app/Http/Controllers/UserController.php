<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
	public function getUser(){
		$user = User::all();

		return view('admin.user.danhsach',['User'=>$user]);
	}

	public function getThem(){
		return view('admin.user.them');
	}

	public function postThem(Request $Request){
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
		$user->level = $Request->quyen;
		$user->password = bcrypt($Request->txtpassword);

		$user->save();
		return redirect('admin/user/danhsach')->with('thongbao','Đã thêm thành công thành viên');

	}

	public function getSua($id){
		$user = User::find($id);
		
		return view('admin.user.sua',['User'=>$user]);
	}

	public function postSua(Request $Request,$id){
		$this->validate($Request,
			[
				'txtten'=>'Required|min:3',
			],[
				'txtten.Required'=>'Bạn chưa nhập tên người dùng',
				'txtten.min'=>'Tên người dùng ít nhất có 3 kí tự',
			]);
		$user = User::find($id);
		$user->name = $Request->txtten;
		$user->level = $Request->quyen;

		if($Request->changePassword == "on"){
				$this->validate($Request,
			[
				'txtpassword'=>'Required|min:3|max:32',
				'txtpasswordAg'=>'Required|same:txtpassword'
			],[
				'txtpassword.Required'=>'Bạn chưa nhập mật khẩu',
				'txtpassword.min'=>'Mật khẩu dài từ 3 đến 32 kí tự',
				'txtpassword.max'=>'Mật khẩu dài từ 3 đến 32 kí tự',
				'txtpasswordAg.Required'=>'Bạn chưa nhập lại mật khẩu',
				'txtpasswordAg.same'=>'Mật khẩu nhập lại chưa khớp'
			]);
		$user->password = bcrypt($Request->txtpassword);
		}

		$user->save();

		return redirect('admin/user/sua/'.$id)->with('thongbao',$user->name.'Đã được cập nhập thông tin' );
	}

	public function getXoa($id){
		$user = User::find($id);
		$user->delete();
		return redirect('admin/user/danhsach')->with('thongbao',$user->name.'Thành viên đã được xóa' );
	}

	public function getDangnhapAdmin(){
		return view('admin.login');
	}
	public function postDangnhapAdmin(Request $Request){
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
				return redirect('admin');
			}else{
				return redirect('admin/dangnhap')->with('thongbao','Thông tin đăng nhập không đúng');
			}
	}

	public function getDangxuatAdmin(){
		Auth::logout();
		return redirect('admin/dangnhap');
	}

}