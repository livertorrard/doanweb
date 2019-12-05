<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TheLoai;

class TheLoaiController extends Controller
{
    //
    public function getDanhSach(){
    	//lay tat ca the loai trong database
    	$theloai=TheLoai::all();
    	return view('admin.theloai.danhsach',['theloai1'=>$theloai]);
    }

    public function getThem(){
    	$theloai = TheLoai::all();
    	return view('admin.theloai.them');
    }
    public function postThem(Request $Request){
    	$this->validate($Request,
    		[
    			'txtten'=>'required|min:3|max:100|unique:TheLoai,ten'
    		],
    		[
    			'txtten.required'=>'Bạn chua nhập tên thể loại',
                'txtten.unique'=>'Tên thể loại đã tồn tại',
    			'txtten.min'=>'Tên thể loại phải có độ dài từ 3-100 kí tự',
    			'txtten.max'=>'Tên thể loại phải có độ dài từ 3-100 kí tự'
    		]);
    	$theloai = new TheLoai;
    	$theloai->ten = $Request->txtten;;
    	$theloai->tenkhongdau = changeTitle($Request->txtten);
    	$theloai->save();

    	return redirect('admin/theloai/them')->with('thongbao','Đã thêm thành công'); 
    }

    public function getSua($id){
    	$theloai = TheLoai::find($id);
        return view('admin.theloai.sua',['theloai'=>$theloai]);
    }

    public function postSua(Request $Request,$id){
        $theloai = TheLoai::find($id);
        $this->validate($Request,
                [
                    'txtten'=>'required|unique:TheLoai,ten|min:3|max:100'
                ],
                [
                    'txtten.required'=>'Bạn chưa nhập tên thể loại',
                    'txtten.unique'=>'Tên thể loại đã tồn tại',
                    'txtten.min'=>'Tên thể loại phải có độ dài từ 3-100 kí tự',
                    'txtten.max'=>'Tên thể loại phải có độ dài từ 3-100 kí tự'
                ]

                );
        $theloai->ten = $Request->txtten;
        $theloai->tenkhongdau= changeTitle($Request->txtten);
        $theloai->save();
        return redirect('admin/theloai/sua/'.$id)->with('thongbao','Đã sửa thành công'); 
    }

    public function getXoa($id){
        $theloai = TheLoai::find($id);
        $theloai->delete();

        return redirect('admin/theloai/danhsach')->with('thongbao','Bạn đã xóa '. $theloai->ten.' thành công');
    }
}
