<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\loaiTin;
use App\TheLoai;

class AjaxController extends Controller
{
    //
    public function  getLoaiTin($idtheloai){
        $loaiTin=LoaiTin::where('id_theloai',$idtheloai)->get();

        foreach ($loaiTin as $lt) {
           echo  "<option value='". $lt->id ."'>".$lt->ten."</option>";
        }
    }
}
