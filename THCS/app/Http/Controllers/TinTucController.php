<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\loaiTin;
use App\TheLoai;
use App\TinTuc;
use App\Comment;
use Illuminate\Support\Facades\Auth;

class TinTucController extends Controller
{
	public function getTinTuc(){
		$tintuc = TinTuc::orderBy('id','DESC')->get();

		 return view('admin.tintuc.danhsach',['TinTuc'=>$tintuc]);
	}

	public function getThem(){
		$loaitin = LoaiTin::all();
		$theloai= TheLoai::all();

		return view('admin.tintuc.them',['LoaiTin'=>$loaitin,'TheLoai'=>$theloai]);
	}

	public function postThem(Request $Request){

		$this->validate($Request,
			[
				'txtloaitin'=>'required',
				'txttieude'=>'required|min:3|max:100',
				'txttomtat'=>'required',
				'txtnoidung'=>'required'
			],[
				'txtloaitin.required'=>'Bạn chưa nhập Loại tin',
				'txttieude.required'=>'Bạn chưa nhập tiêu đề',
				'txttomtat.required'=>'Bạn chưa nhập tóm tắt',
				'txtnoidung.required'=>'Bạn chưa nhập nội dung',
				'txttieude.min'=>'tiêu đề từ 3 đến 100 kí tự',
				'txttieude.max'=>'tiêu đề từ 3 đến 100 kí tự',
				'txttieude.unique'=>'Tiêu đề của bạn đã có',
			]);

		$tintuc = new TinTuc;
		$tintuc ->tieude = $Request->txttieude;
		$tintuc->tieudekhongdau= changeTitle($Request->txttieude);
		$tintuc->id_loaitin = $Request->txtloaitin;
		$tintuc->tomtat = $Request->txttomtat;
		$tintuc->noidung = $Request->txtnoidung;
		$tintuc->noibat = $Request->txtnoibat;
		$tintuc->id_tv = Auth::user()->id;
		$tintuc->soluotxem= 0;

		if($Request->hasFile('txthinh'))
		{
			$file= $Request->file('txthinh');
			$duoi=$file->getClientOriginalExtension();
			if($duoi != 'jpg' && $duoi != 'png' && $duoi !='jpeg' && $duoi !='JPG' && $duoi !='JPGEG' && $duoi !='PNG' )
			{
				return redirect('admin/tintuc/danhsach')->with('thongbao','Bạn chỉ được chọn file có đuôi là JPG,PNG,JPEG');
			}
			$name = $file->getClientOriginalName();
			$hinh = str_random(4)."_". $name;
			while (file_exists("upload/tintuc/".$hinh)) {
				$hinh = str_random(4)."_". $name;	
			}
			$file->move("upload/tintuc",$hinh);
			$tintuc->hinh  = $hinh;

		}else{
			$tintuc->hinh="";
		}

		$tintuc->save();

		return redirect('admin/tintuc/danhsach')->with('thongbao','Thêm tin thành công');

	}

	public function getXoa($id){
		$tintuc = TinTuc::find($id);
		$tintuc->delete();

		return redirect('admin/tintuc/danhsach')->with('thongbao','Đã xóa thành công');
	}

	public function getSua($id){
		$loaitin = LoaiTin::all();
		$theloai = TheLoai::all();
		$tintuc = TinTuc::find($id);
		return view('admin.tintuc.sua',['TinTuc'=>$tintuc,'TheLoai'=>$theloai,'LoaiTin'=>$loaitin]);
	}

	public function postSua(Request $Request,$id){
		$tintuc= TinTuc::find($id);
		$this->validate($Request,
			[
				'txtloaitin'=>'required',
				'txttieude'=>'required|min:3|max:100',
				'txttomtat'=>'required',
				'txtnoidung'=>'required'
			],[
				'txtloaitin.required'=>'Bạn chưa nhập Loại tin',
				'txttieude.required'=>'Bạn chưa nhập tiêu đề',
				'txttomtat.required'=>'Bạn chưa nhập tóm tắt',
				'txtnoidung.required'=>'Bạn chưa nhập nội dung',
				'txttieude.min'=>'tiêu đề từ 3 đến 100 kí tự',
				'txttieude.max'=>'tiêu đề từ 3 đến 100 kí tự',
				'txttieude.unique'=>'Tiêu đề của bạn đã có',
			]);

	
		$tintuc ->tieude = $Request->txttieude;
		$tintuc->tieudekhongdau= changeTitle($Request->txttieude);
		$tintuc->id_loaitin = $Request->txtloaitin;
		$tintuc->tomtat = $Request->txttomtat;
		$tintuc->noidung = $Request->txtnoidung;
		$tintuc->noibat = $Request->txtnoibat;
		$tintuc->soluotxem= 0;

		if($Request->hasFile('txthinh'))
		{
			$file= $Request->file('txthinh');
			$duoi=$file->getClientOriginalExtension();
			if($duoi != 'jpg' && $duoi != 'png' && $duoi !='jpeg')
			{
				return redirect('admin/tintuc/danhsach')->with('thongbao','Bạn chỉ được chọn file có đuôi là JPG,PNG,JPEG');
			}
			$name = $file->getClientOriginalName();
			$hinh = str_random(4)."_". $name;
			while (file_exists("upload/tintuc/".$hinh)) {
				$hinh = str_random(4)."_". $name;	
			}

			$file->move("upload/tintuc",$hinh);
			unlink("upload/tintuc/".$tintuc->hinh);
			$tintuc->hinh  = $hinh;

		}
		$tintuc->save();

		return redirect('admin/tintuc/sua/'.$id)->with('thongbao','Sửa tin thành công');

	}

}