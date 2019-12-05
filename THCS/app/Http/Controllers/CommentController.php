<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\loaiTin;
use App\TheLoai;
use App\TinTuc;
use App\Comment;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
	
	public function getXoa($id,$idtin){
		$comment = Comment::find($id);
		$comment->delete();

		return redirect('admin/tintuc/sua/'.$idtin)->with('thongbao','Bạn đã xóa bình luận thành công');
		
	}
	 function postbinhluan($id,Request $Request){
	 	$idtintuc= $id;
	 	$tintuc = TinTuc::find($id);
	 	$comment = new Comment;
	 	$comment->id_tintuc = $idtintuc;
	 	$comment->id_user = Auth::user()->id;
	 	$comment->noidung = $Request->noidung;
	 	$comment->save();

	 	return redirect("tintuc/$id/".$tintuc->tieudekhongdau.".html")->with('thongbao','Bình luận thành công');

	 }
}