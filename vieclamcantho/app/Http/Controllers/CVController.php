<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MauCV;
use App\NganhNghe;
use App\NganhNgheTD;
use App\TaikhoanUV;
use App\TaikhoanNTD;
use App\HosoUV;
use App\KyNangMem;
use App\TinHocUV;
use App\BangCapUV;
use App\KinhNghiemUV;
use App\NguoiThamKhaoUV;
use App\KyNangChuyenMon;
use App\TrinhDoNNUV;
use App\NgoaiNguKhac;


use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class CVController extends Controller
{
    //UNG VIEN
    //Tạo CV...
    public function tao_cv(){
        $meta_title = "Tạo CV Online | Hồ Sơ Xin Việc";
        $all_cv= MauCV::where('maucv_status','1')->orderBy('maucv_id', 'asc')->get();
        $all_taikhoanntd = TaikhoanNTD::orderBy('ntd_id', 'asc')->get();
        $all_taikhoan = TaikhoanUV::orderBy('taikhoan_id', 'desc')->get();
        return view('ungvien.tao_cv')->with(compact('meta_title', 'all_cv', 'all_taikhoanntd', 'all_taikhoan'));
    }

    public function cv_1(){
        $meta_title = "Mẫu CV 1";
        $all_taikhoanntd = TaikhoanNTD::orderBy('ntd_id', 'asc')->get();
        $all_taikhoan = TaikhoanUV::orderBy('taikhoan_id', 'desc')->get();
        return view('maucv.cv_1')->with(compact('meta_title', 'all_taikhoanntd', 'all_taikhoan'));
    }
    public function cv_2(){
        $meta_title = "Mẫu CV 2";
        $all_taikhoanntd = TaikhoanNTD::orderBy('ntd_id', 'asc')->get();
        $all_taikhoan = TaikhoanUV::orderBy('taikhoan_id', 'desc')->get();
        return view('maucv.cv_2')->with(compact('meta_title', 'all_taikhoanntd', 'all_taikhoan'));
    }
    public function cv_3(){
        $meta_title = "Mẫu CV 3";
        $all_taikhoanntd = TaikhoanNTD::orderBy('ntd_id', 'asc')->get();
        $all_taikhoan = TaikhoanUV::orderBy('taikhoan_id', 'desc')->get();
        return view('maucv.cv_3')->with(compact('meta_title', 'all_taikhoanntd', 'all_taikhoan'));
    }

    //Su dung CV...
    public function use_cv($maucv_code, $taikhoan_id){
        $meta_title = "VIỆC LÀM CẦN THƠ | TUYỂN DỤNG CẦN THƠ | Mới Nhất Hôm Nay";
        $detail_uv = TaikhoanUV::join('tbl_hoso_uv','tbl_hoso_uv.hoso_id_uv','=','tbl_taikhoan_uv.taikhoan_id')->join('tbl_kynangmem', 'tbl_kynangmem.knmem_id_uv', '=', 'tbl_taikhoan_uv.taikhoan_id')->join('tbl_tinhoc', 'tbl_tinhoc.tinhoc_id_uv', '=', 'tbl_taikhoan_uv.taikhoan_id')->where('taikhoan_id',$taikhoan_id)->get();
        $all_bangcap = BangCapUV::where('bangcap_id_uv', $taikhoan_id)->get();
        $all_kinhnghiem = KinhNghiemUV::where('kinhnghiem_id_uv', $taikhoan_id)->get();
        $all_nguoithamkhao = NguoiThamKhaoUV::where('thamkhao_id_uv', $taikhoan_id)->get();
        $all_kncm = KyNangChuyenMon::where('kncm_id_uv', $taikhoan_id)->get();
        $all_knm = KyNangMem::where('knmem_id_uv', $taikhoan_id)->get();
        $all_tinhoc = TinHocUV::where('tinhoc_id_uv', $taikhoan_id)->get();
        $all_trinhdonn = TrinhDoNNUV::where('tdnn_id_uv', $taikhoan_id)->get();
        $all_ngoaingukhac = NgoaiNguKhac::where('nnk_id_uv', $taikhoan_id)->get();
        $all_taikhoanntd = TaikhoanNTD::orderBy('ntd_id', 'asc')->get();
        $all_taikhoan = TaikhoanUV::orderBy('taikhoan_id', 'desc')->get();
        return view('maucv.uv_'.$maucv_code)->with(compact('meta_title', 'detail_uv', 'all_bangcap', 'all_kinhnghiem', 'all_nguoithamkhao', 'all_kncm', 'all_knm', 'all_tinhoc', 'all_trinhdonn', 'all_ngoaingukhac', 'all_taikhoanntd', 'all_taikhoan'));  

    }
    public function save_cv($maucv_code, $taikhoan_id, Request $request){
        $data = array();
        $data['hoso_cv_code'] = $maucv_code;
        HosoUV::where('hoso_id_uv', $taikhoan_id)->update($data);
        return Redirect::to('use-cv/'.$maucv_code.'/'.$taikhoan_id);
    }

    //ADMIN

    public function manage_cv(){
        $all_cv = MauCV::orderby('maucv_id', 'DESC')->get();
        return view('admin.cv.list_cv')->with(compact('all_cv'));
    }
    public function add_cv(){

        return view('admin.cv.add_cv');

    }
    public function insert_cv(Request $request){
        $data = $request->all();
        

        $get_image = $request->file('cv_img');
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/upload/cv', $new_image);
            
            $maucv = new MauCV();
            $maucv->maucv_ten = $data['cv_name'];
            $maucv->maucv_img = $new_image;
            $maucv->maucv_des = $data['cv_des'];
            $maucv->maucv_status = $data['cv_status'];
            $maucv->maucv_code = $data['cv_code'];
            $maucv->save();

            Session::put('message', 'Thêm mẫu cv thành công');
            return Redirect::to('manage-cv');
        }else{
            Session::put('message', 'Hãy thêm hình ảnh cho mẫu cv');
            return Redirect::to('manage-cv');
        }  

    }
    public function edit_cv($maucv_id){
        
        $edit_cv = MauCV::where('maucv_id', $maucv_id)->get();
        return view('admin.cv.edit_cv')->with(compact('edit_cv'));
    }
    public function update_cv(Request $request, $maucv_id){
        $data = array();
        $data['maucv_ten'] = $request->cv_name;
        $data['maucv_des'] = $request->cv_des;
        $data['maucv_status'] = $request->cv_status;
        $data['maucv_code'] = $request->cv_code;
        $get_image = $request->file('cv_img'); 
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/upload/cv', $new_image);
            $data['maucv_img'] = $new_image;
            MauCV::where('maucv_id',$maucv_id)->update($data);
            Session::put('message', 'Cập nhật mẫu cv thành công');
            return Redirect::to('manage-cv');
        }
        MauCV::where('maucv_id',$maucv_id)->update($data);
        Session::put('message', 'Cập nhật mẫu cv thành công');
        return Redirect::to('manage-cv');
    }
    public function active_cv($maucv_id){  
        MauCV::where('maucv_id', $maucv_id)->update(['maucv_status'=>1]);
        Session::put('message', 'Kích hoạt mẫu thành công');
        return Redirect::to('manage-cv');
    }
    public function unactive_cv($maucv_id){
        
        MauCV::where('maucv_id', $maucv_id)->update(['maucv_status'=>0]);
        Session::put('message', 'Tắt mẫu cv thành công');
        return Redirect::to('manage-cv');
    }
    public function delete_cv($maucv_id){
        
        MauCV::where('maucv_id',$maucv_id)->delete();
        Session::put('message', 'Xóa mẫu cv thành công');
        return Redirect::to('manage-cv'); 
     } 


     //Nganh Nghe (xai ke controller ^^)
     public function manage_job(){
        $all_job = NganhNghe::orderby('nn_id', 'DESC')->get();
        return view('admin.job.list_job')->with(compact('all_job'));
    } 
    public function active_job($nn_id){  
        NganhNghe::where('nn_id', $nn_id)->update(['nn_status'=>1]);
        Session::put('message', 'Kích hoạt ngành nghề thành công');
        return Redirect::to('manage-job');
    }
    public function unactive_job($nn_id){
        
        NganhNghe::where('nn_id', $nn_id)->update(['nn_status'=>0]);
        Session::put('message', 'Tắt ngành nghề thành công');
        return Redirect::to('manage-job');
    }
    public function delete_job($nn_id){
        
        NganhNghe::where('nn_id',$nn_id)->delete();
        Session::put('message', 'Xóa ngành nghề thành công');
        return Redirect::to('manage-job'); 
     }
     public function add_job(){

        return view('admin.job.add_job');

    }
    public function insert_job(Request $request){
        $data = $request->all();
        $nn = new NganhNghe();
        $nn->nn_ten = $data['job_name'];
        $nn->nn_status = $data['job_status'];
        $nn->save();
        Session::put('message', 'Thêm ngành nghề thành công');
        return Redirect::to('manage-job'); 

    }

    //Ngành nghề tuyển dụng
    public function manage_jobtd(){
        $all_jobtd = NganhNgheTD::orderby('nntd_id', 'DESC')->get();
        return view('admin.jobtd.list_jobtd')->with(compact('all_jobtd'));
    } 
     public function active_jobtd($nntd_id){  
        NganhNgheTD::where('nntd_id', $nntd_id)->update(['nntd_status'=>1]);
        Session::put('message', 'Kích hoạt ngành nghề thành công');
        return Redirect::to('manage-jobtd');
    }
    public function unactive_jobtd($nntd_id){
        
        NganhNgheTD::where('nntd_id', $nntd_id)->update(['nntd_status'=>0]);
        Session::put('message', 'Tắt ngành nghề thành công');
        return Redirect::to('manage-jobtd');
    }
    public function delete_jobtd($nntd_id){
        
        NganhNgheTD::where('nntd_id',$nntd_id)->delete();
        Session::put('message', 'Xóa ngành nghề thành công');
        return Redirect::to('manage-jobtd'); 
     }
     public function add_jobtd(){

        return view('admin.jobtd.add_jobtd');

    }
    public function insert_jobtd(Request $request){
        $data = $request->all();
        $nn = new NganhNgheTD();
        $nn->nntd_ten = $data['jobtd_name'];
        $nn->nntd_status = $data['jobtd_status'];
        $nn->save();
        Session::put('message', 'Thêm ngành nghề thành công');
        return Redirect::to('manage-jobtd'); 

    }
}
