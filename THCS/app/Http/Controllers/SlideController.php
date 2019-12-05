<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;

class SlideController extends Controller
{
	
	public function getSlide(){
		$slide = Slide::all();

		return view('admin.slide.danhsach',['Slide'=>$slide]);
	}

	public function getThem(){
		return view('admin.slide.them');
	}

	public function postThem(Request $Request){
		$this->validate($Request,
			[
				'txtten'=>'Required',
				'txtnoidung'=>'Required'
			],[
				'txtten.Required'=>'Bạn chưa nhập tên',
				'txtnoidung.Required'=>'Bạn chưa nhập nội dung'
			]);
		$slide = new Slide;
		$slide->ten = $Request->txtten;
		$slide->noidung = $Request->txtnoidung;


		if($Request->has('txtlink'))
			$slide->link = $Request->txtlink;
		if(($Request->txtlink)=="") {
			$slide->link="";
		}
		if($Request->hasFile('txthinh'))
		{
			$file= $Request->file('txthinh');
			$duoi=$file->getClientOriginalExtension();
			if($duoi != 'jpg' && $duoi != 'png' && $duoi !='jpeg')
			{
				return redirect('admin/slide/danhsach')->with('thongbao','Bạn chỉ được chọn file có đuôi là JPG,PNG,JPEG');
			}
			$name = $file->getClientOriginalName();
			$hinh = str_random(4)."_". $name;
			while (file_exists("upload/slide/".$hinh)) {
				$hinh = str_random(4)."_". $name;	
			}
			$file->move("upload/slide",$hinh);
			$slide->hinh  = $hinh;

		}else{
			$slide->hinh="";
		}

		$slide->save();

		return redirect('admin/slide/danhsach')->with('thongbao','Đã thêm slide thành công');

	}

	public function getSua($id){
		$slide = Slide::find($id);

		return view('admin.slide.sua',['Slide'=>$slide]);
	}

	public function postSua(Request $Request, $id){
		$slide = slide::find($id);

			$this->validate($Request,
			[
				'txtten'=>'Required',
				'txtnoidung'=>'Required'
			],[
				'txtten.Required'=>'Bạn chưa nhập tên',
				'txtnoidung.Required'=>'Bạn chưa nhập nội dung'
			]);
		
		$slide->ten = $Request->txtten;
		$slide->noidung = $Request->txtnoidung;


		if($Request->has('txtlink'))
			$slide->link = $Request->txtlink;
		else $slide->link="";
		
		if($Request->hasFile('txthinh'))
		{
			$file= $Request->file('txthinh');
			$duoi=$file->getClientOriginalExtension();
			if($duoi != 'jpg' && $duoi != 'png' && $duoi !='jpeg')
			{
				return redirect('admin/slide/danhsach')->with('thongbao','Bạn chỉ được chọn file có đuôi là JPG,PNG,JPEG');
			}
			$name = $file->getClientOriginalName();
			$hinh = str_random(4)."_". $name;
			while (file_exists("upload/slide/".$hinh)) {
				$hinh = str_random(4)."_". $name;	
			}
			unlink("upload/slide/".$slide->hinh);
			$file->move("upload/slide",$hinh);
			$slide->hinh  = $hinh;

		}
		$slide->save();

		return redirect('admin/slide/sua/'.$id)->with('thongbao','Đã sửa slide thành công');
	}

	public function getXoa($id){
		$slide = Slide::find($id);

		$slide->delete();

		return redirect('admin/slide/danhsach')->with('thongbao','Xóa thành công');
	}
}