<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LoaiTin;
use App\TheLoai;

class LoaiTinController extends Controller
{
    //
    public function getLoaiTin(){
    	$loaitin = loaitin::all();
    	return view('admin.loaitin.danhsach',['LoaiTin'=>$loaitin]);
    }

    public function getsua($id){
    	$loaitin = LoaiTin::find($id);
    	$theloai = TheLoai::all();
    	return view('admin.loaitin.sua',['LoaiTin'=>$loaitin,'TheLoai'=>$theloai]);
    }

    public function postSua(Request $Request,$id){
    	$loaitin = LoaiTin::find($id);
    	    	$this->validate($Request,
    			[
    				'txtten'=>'required|unique:loaitin,ten|min:3|max:100'
    			],
    			[
    				'txtten.required'=>'Bạn chưa nhập loại tin',
    				'txtten.unique'=>'Loại tin đã tồn tại',
    				'txtten.min'=>'Tên Loại tin phải từ 3 đến 100 kí tự',
    				'txtten.max'=>'Tên Loại tin phải từ 3 đến 100 kí tự'
    			]
    	);
    	$loaitin->ten = $Request->txtten;
    	$loaitin->tenkhongdau= changeTitle($Request->txtten);
    	$loaitin->id_theloai = $Request->TheLoai;
    	$loaitin->save();

    	return redirect('admin/loaitin/sua/'.$id)->with('thongbao','Đã sữa thành công');

    }

    public function getXoa($id){
    	$loaitin = LoaiTin::find($id);
    	$loaitin->delete();

    	return redirect('admin/loaitin/danhsach')->with('thongbao','Đã xóa '.$loaitin->ten .' thành công');
    }

    public function getThem(){
    	$theloai = TheLoai::all();
    	return view('admin.loaitin.them',['TheLoai'=>$theloai]);
    }

    public function postThem(Request $Request){
    	    	$this->validate($Request,
    			[
    				'txtten'=>'required|unique:loaitin,ten|min:3|max:100',
    				'TheLoai'=>'required'
    			],
    			[
    				'txtten.required'=>'Bạn chưa nhập loại tin',
    				'txtten.unique'=>'Loại tin đã tồn tại',
    				'txtten.min'=>'Tên Loại tin phải từ 3 đến 100 kí tự',
    				'txtten.max'=>'Tên Loại tin phải từ 3 đến 100 kí tự',
    				'TheLoai.required'=>'Bạn chưa chọn thể loại'
    			]);
	    $loaitin = new LoaiTin;
	    $loaitin ->ten = $Request->txtten;
	    $loaitin->id_theloai = $Request->TheLoai;
	    $loaitin->tenkhongdau = changeTitle($Request->txtten);
	    $loaitin->save();

	    return redirect('admin/loaitin/danhsach')->with('thongbao','Đã thêm loại tin thành công');
	}

}
