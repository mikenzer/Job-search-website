<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
session_start();
use Illuminate\Support\Facades\Redirect;
use App\HosoUV;
use App\TaikhoanUV;
use App\BangCapUV;
use App\Thang;
use App\Nam;
use App\LoaiBangCap;
use App\KinhNghiemUV;
use App\NguoiThamKhaoUV;
use App\LoaiKyNang;
use App\TenKyNang;
use App\KyNangMem;
use App\KyNangChuyenMon;
use App\TinHocUV;
use App\NgoaiNgu;
use App\TrinhDoNNUV;
use App\NgoaiNguKhac;
use App\Capbac;
use App\TrangThaiTimViec;
use App\LuongMongMuon;
use App\KinhNghiem;
use App\TrinhDoHocVan;
use App\NganhNghe;
use App\DiaDiem;
use App\MauCV;
use App\LuuTinTD;

class UngVienController extends Controller
{
    //Đăng ký ứng viên
     public function dang_ky_uv(Request $request){
        return view('ungvien.dang_ky_ung_vien');
    }

    //Thêm ứng viên
     public function them_uv(Request $request){
        $data = array();
        $data['taikhoan_email'] = $request->taikhoan_email;
        $data['taikhoan_matkhau'] = $request->taikhoan_matkhau;
        $data['taikhoan_ten'] = $request->taikhoan_ten;
        $data['taikhoan_ngaysinh'] = $request->taikhoan_ngaysinh;
        $data['taikhoan_gioitinh'] = $request->taikhoan_gioitinh;
        $data['taikhoan_sdt'] = $request->taikhoan_sdt;
        $data['taikhoan_diachi'] = $request->taikhoan_diachi;
        $taikhoan_id = TaikhoanUV::insertGetId($data);
        $taikhoan_ten = $request->taikhoan_ten;
        Session::put('taikhoan_id',$taikhoan_id);
        Session::put('taikhoan_ten',$taikhoan_ten);

        //Thêm id ứng viên vào bảng Hồ sơ ứng viên
        $hoso_uv = new HosoUV();       
        $hoso_uv->hoso_id_uv = Session::get('taikhoan_id');
        $hoso_uv->save();
        //Thêm id ứng viên vào bảng Tin hoc
        $tinhoc_uv = new TinHocUV();       
        $tinhoc_uv->tinhoc_id_uv = Session::get('taikhoan_id');
        $tinhoc_uv->save();
        //Thêm id ứng viên vào bảng Ky nang mem
        $kynang_uv = new KyNangMem();       
        $kynang_uv->knmem_id_uv = Session::get('taikhoan_id');
        $kynang_uv->save();
        return Redirect::to('/dang-ky-ung-vien')->with('message','Đăng ký tài khoản thành công. Vui lòng đăng nhập!');
    }

    //Đăng nhập ứng viên
    public function dang_nhap_uv(Request $request){
       return view('ungvien.dang_nhap_ung_vien');
    }       
    public function login_uv(Request $request){
        $email = $request->emailLoginUv;
        $password =$request->passLoginUv;
        $result = DB::table('tbl_taikhoan_uv')->where('taikhoan_email',$email)->where('taikhoan_matkhau',$password)->first();
        if($result){
            Session::put('taikhoan_id',$result->taikhoan_id);
            return Redirect::to('/trang-chu');
        }else{
            return Redirect::to('/dang-nhap-ung-vien')->with('message','Tài khoản hoặc mật khẩu không chính xác!');
        }        
    }

    //Đăng xuất
    public function dang_xuat(){
        Session::flush();
        return Redirect::to('/trang-chu');
    }

    //Đổi mật khẩu
    public function doi_mk($taikhoan_id){
        $meta_title = "VIỆC LÀM CẦN THƠ | TUYỂN DỤNG CẦN THƠ | Mới Nhất Hôm Nay";
        $tt_uv =TaiKhoanUV::orderBy('taikhoan_id','desc')->get();
        $detail_uv = TaikhoanUV::join('tbl_hoso_uv','tbl_hoso_uv.hoso_id_uv','=','tbl_taikhoan_uv.taikhoan_id')->where('taikhoan_id',$taikhoan_id)->get();
        return view('ungvien.doi_mk')->with(compact('meta_title', 'detail_uv', 'tt_uv'));
    }
    public function change_pass(Request $request, $taikhoan_id){
        $data = array();
        $password = $request->password_old;
        $result = TaikhoanUV::where('taikhoan_matkhau',$password)->first();
         if($result){
            $data['taikhoan_matkhau'] = $request->password_new;
            TaiKhoanUV::where('taikhoan_id',$taikhoan_id)->update($data);
            Session::put('message', 'Đổi mật khẩu thành công');
             return Redirect::to('doi-mat-khau/'.$taikhoan_id);
        }else{
            Session::put('message1', 'Mật khẩu cũ không chính xác!');
            return Redirect::to('doi-mat-khau/'.$taikhoan_id);
        }
        
    }
    //Trang quản ký ứng viên
   
    public function thong_tin_uv($taikhoan_id, Request $request){
        $meta_title = "VIỆC LÀM CẦN THƠ | TUYỂN DỤNG CẦN THƠ | Mới Nhất Hôm Nay";
        $tt_uv = TaiKhoanUV::orderBy('taikhoan_id','desc')->get();
        $detail_uv = TaikhoanUV::join('tbl_hoso_uv','tbl_hoso_uv.hoso_id_uv','=','tbl_taikhoan_uv.taikhoan_id')->where('taikhoan_id',$taikhoan_id)->get();
        $all_maucv = MauCV::orderby('maucv_id', 'asc')->get();
        return view('ungvien.quan_ly_chung')->with(compact('meta_title', 'tt_uv', 'detail_uv', 'all_maucv'));
    }
    
    //Thông tin cá nhân
    public function thong_tin_ca_nhan($taikhoan_id, Request $request){
        $meta_title = "VIỆC LÀM CẦN THƠ | TUYỂN DỤNG CẦN THƠ | Mới Nhất Hôm Nay";
        $tt_uv =TaiKhoanUV::orderBy('taikhoan_id','desc')->get();
        $detail_uv = TaikhoanUV::join('tbl_hoso_uv','tbl_hoso_uv.hoso_id_uv','=','tbl_taikhoan_uv.taikhoan_id')->where('taikhoan_id',$taikhoan_id)->get();
        $all_bangcap= BangCapUV::orderBy('bangcap_id', 'asc')->get();
        return view('ungvien.thong_tin_ca_nhan')->with(compact('meta_title', 'tt_uv', 'detail_uv', 'all_bangcap'));
    }

    //Update thông tin cá nhân
    public function update_ttcn(Request $request,$taikhoan_id){
        $data = array();
        $data['taikhoan_email'] = $request->taikhoan_email;
        $data['taikhoan_ten'] = $request->taikhoan_ten;
        $data['taikhoan_sdt'] = $request->taikhoan_sdt;
        $data['taikhoan_ngaysinh'] = $request->taikhoan_ngaysinh;
        $data['taikhoan_diachi'] = $request->taikhoan_diachi;
        $data['taikhoan_gioitinh'] = $request->taikhoan_gioitinh;
        TaiKhoanUV::where('taikhoan_id',$taikhoan_id)->update($data);
        $data1 = array();
        $data1['hoso_tinhtranghonnhan_uv'] = $request->hoso_tinhtranghonnhan_uv;
        // HoSoUV::where('hoso_id_uv',$taikhoan_id)->update($data1);
        // $get_image = $request->file('hoso_hinhanh_uv');
        
        //     $get_name_image = $get_image->getClientOriginalName();
        //     $name_image = current(explode('.', $get_name_image));
        //     $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
        //     $get_image->move('public/upload/ungvien', $new_image);
        //     $data1['hoso_hinhanh_uv'] = $new_image;
        //     HosoUV::where('hoso_id_uv',$taikhoan_id)->update($data1);
        //     Session::put('message', 'Cập nhật thông tin thành công');
        //     return Redirect::to('thong-tin-ca-nhan/'.$taikhoan_id);

        HosoUV::where('hoso_id_uv',$taikhoan_id)->update($data1);
        Session::put('message', 'Cập nhật thông tin thành công');
        return Redirect::to('thong-tin-ca-nhan/'.$taikhoan_id);

        
        
    }

    //Thông tin hồ sơ
    public function thong_tin_ho_so($taikhoan_id, Request $request){
        $meta_title = "VIỆC LÀM CẦN THƠ | TUYỂN DỤNG CẦN THƠ | Mới Nhất Hôm Nay";
        $tt_uv =TaiKhoanUV::orderBy('taikhoan_id','desc')->get();
        $detail_uv = TaikhoanUV::join('tbl_hoso_uv','tbl_hoso_uv.hoso_id_uv','=','tbl_taikhoan_uv.taikhoan_id')->where('taikhoan_id',$taikhoan_id)->get();
        $all_bangcap= BangCapUV::orderBy('bangcap_id', 'asc')->get();
        $all_capbac= CapBac::orderBy('capbac_id', 'asc')->get();
        $all_tttv= TrangThaiTimViec::orderBy('tttv_id', 'asc')->get();
        $all_lmm= LuongMongMuon::orderBy('lmm_id', 'asc')->get();
        $all_kn= KinhNghiem::orderBy('kn_id', 'asc')->get();
        $all_tdhv= TrinhDoHocVan::orderBy('tdhv_id', 'asc')->get();
        $all_nn= NganhNghe::where('nn_status', '1')->orderBy('nn_id', 'asc')->get();
        $all_diadiem= DiaDiem::orderBy('diadiem_id', 'asc')->get();
        return view('ungvien.thong_tin_ho_so')->with(compact('meta_title', 'tt_uv', 'detail_uv', 'all_bangcap', 'all_capbac', 'all_tttv', 'all_lmm', 'all_kn', 'all_tdhv', 'all_nn', 'all_diadiem'));
    }

    //Update thông tin hồ sơ
    public function update_tths(Request $request,$taikhoan_id){ 
        $data = array();
        $data['hoso_vitri'] = $request->ungvien_vitri;
        $data['hoso_capbac'] = $request->ungvien_capbac;
        $data['hoso_trangthai_timviec'] = $request->ungvien_trangthai_timviec;
        $data['hoso_mucluong'] = $request->ungvien_mucluong;
        $data['hoso_kinhnghiem'] = $request->ungvien_kinhnghiem;
        $data['hoso_trinhdo'] = $request->ungvien_trinhdo;
        $data['hoso_gioithieu'] = $request->ungvien_gioithieu;
        $data['hoso_muctieu'] = $request->ungvien_muctieu;
        $data['hoso_nganhnghe'] = $request->ungvien_nganhnghe;
        $data['hoso_diadiem'] = $request->ungvien_diadiem;
        $get_image = $request->file('ungvien_ha');
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/upload/ungvien', $new_image);          
            $data['hoso_hinhanh_uv'] = $new_image;           
            HosoUV::where('hoso_id_uv',$taikhoan_id)->update($data);
            Session::put('message', 'Cập nhật thông tin thành công');
            return Redirect::to('thong-tin-ho-so/'.$taikhoan_id);
        }
        
        HosoUV::where('hoso_id_uv',$taikhoan_id)->update($data); 
        Session::put('message', 'Cập nhật thông tin thành công');
        return Redirect::to('thong-tin-ho-so/'.$taikhoan_id);
    }

    //Học vấn bằng cấp
    public function hocvan_bangcap($taikhoan_id, Request $request){
        $meta_title = "VIỆC LÀM CẦN THƠ | TUYỂN DỤNG CẦN THƠ | Mới Nhất Hôm Nay";
        $tt_uv = TaiKhoanUV::orderBy('taikhoan_id','desc')->get();
        $detail_uv = TaikhoanUV::join('tbl_hoso_uv','tbl_hoso_uv.hoso_id_uv','=','tbl_taikhoan_uv.taikhoan_id')->where('taikhoan_id',$taikhoan_id)->get();
        $all_bangcap= BangCapUV::orderBy('bangcap_id', 'asc')->get();
        return view('ungvien.hocvan_bangcap')->with(compact('meta_title','tt_uv', 'detail_uv', 'all_bangcap'));
    }

    //Thêm học vấn bằng cấp
    public function them_hocvan_bangcap($taikhoan_id, Request $request){
        $meta_title = "VIỆC LÀM CẦN THƠ | TUYỂN DỤNG CẦN THƠ | Mới Nhất Hôm Nay";
        $thang = Thang::orderBy('thang_id','asc')->get();
        $nam = Nam::orderBy('nam_id','desc')->get();
        $xeploai = LoaiBangCap::orderBy('loai_id','asc')->get();
        $tt_uv = TaiKhoanUV::orderBy('taikhoan_id','desc')->get();
        $detail_uv = TaikhoanUV::join('tbl_hoso_uv','tbl_hoso_uv.hoso_id_uv','=','tbl_taikhoan_uv.taikhoan_id')->where('taikhoan_id',$taikhoan_id)->get();
         return view('ungvien.them_hocvan_bangcap')->with(compact('meta_title','thang','nam','tt_uv', 'detail_uv', 'xeploai'));
     }
    
    //Sửa học vần bằng cấp 
    public function sua_hocvan_bangcap($taikhoan_id, $bangcap_id, Request $request){
        $meta_title = "VIỆC LÀM CẦN THƠ | TUYỂN DỤNG CẦN THƠ | Mới Nhất Hôm Nay";
        $thang = DB::table('tbl_thang')->orderBy('thang_id','asc')->get();
        $nam = DB::table('tbl_nam')->orderBy('nam_id','desc')->get();
        $xeploai = LoaiBangCap::orderBy('loai_id','asc')->get();
        $tt_uv = DB::table('tbl_taikhoan_uv')->orderBy('taikhoan_id','desc')->get();
        $detail_uv = TaikhoanUV::join('tbl_hoso_uv','tbl_hoso_uv.hoso_id_uv','=','tbl_taikhoan_uv.taikhoan_id')->join('tbl_bangcap_uv','tbl_bangcap_uv.bangcap_id_uv','=','tbl_taikhoan_uv.taikhoan_id')->where('taikhoan_id',$taikhoan_id)->where('bangcap_id', $bangcap_id)->get();
        return view('ungvien.sua_hocvan_bangcap')->with(compact('meta_title','thang','nam','tt_uv', 'detail_uv', 'xeploai'));
    }
    

    //Post thông tin bằng cấp
    public function add_hocvan_bangcap(Request $request,$taikhoan_id){ 
        $data = array();
        $data['bangcap_ten'] = $request->bangcap;
        $data['bangcap_dvi_daotao'] = $request->truong;
        $data['bangcap_thangbd'] = $request->thangFrom;
        $data['bangcap_nambd'] = $request->namFrom;
        $data['bangcap_thangkt'] = $request->thangTo;
        $data['bangcap_namkt'] = $request->namTo;
        $data['bangcap_loai'] = $request->loai;
        $data['bangcap_id_uv'] = $taikhoan_id;
        $bangcap_id = BangCapUV::insertGetId($data);
        // DB::table('tbl_bangcap_uv')->where('bangcap_id_uv',$taikhoan_id)->update($data); 
        Session::put('message', 'Cập nhật thông tin thành công');
       
        return Redirect::to('hocvan-bangcap/'.$taikhoan_id);
    }

    //Xóa học vấn bằng cấp
    public function xoa_hocvan_bangcap($taikhoan_id, $bangcap_id, Request $request){
        BangCapUV::where('bangcap_id',$bangcap_id)->delete();
        Session::put('message', 'Xóa bằng cấp thành công');
        return Redirect::to('hocvan-bangcap/'.$taikhoan_id);
     }


    //Update học vấn bằng cấp
    public function update_hocvan_bangcap($taikhoan_id, $bangcap_id, Request $request){
        $data = array();
        $data['bangcap_ten'] = $request->bangcap;
        $data['bangcap_dvi_daotao'] = $request->truong;
        $data['bangcap_thangbd'] = $request->thangFrom;
        $data['bangcap_nambd'] = $request->namFrom;
        $data['bangcap_thangkt'] = $request->thangTo;
        $data['bangcap_namkt'] = $request->namTo;
        $data['bangcap_loai'] = $request->loai;
        $data['bangcap_id_uv'] = $taikhoan_id;
        BangCapUV::where('bangcap_id',$bangcap_id)->update($data);
        Session::put('message', 'Cập nhật thông tin bằng cấp thành công');
        return Redirect::to('hocvan-bangcap/'.$taikhoan_id); 
    }

    //Kinh nghiệm làm việc
    public function kinhnghiem_lamviec($taikhoan_id, Request $request){
        $meta_title = "VIỆC LÀM CẦN THƠ | TUYỂN DỤNG CẦN THƠ | Mới Nhất Hôm Nay";
        $tt_uv = TaiKhoanUV::orderBy('taikhoan_id','desc')->get();
        $detail_uv = TaikhoanUV::join('tbl_hoso_uv','tbl_hoso_uv.hoso_id_uv','=','tbl_taikhoan_uv.taikhoan_id')->where('taikhoan_id',$taikhoan_id)->get();
       $all_kinhnghiem= KinhNghiemUV::orderBy('kinhnghiem_id', 'asc')->get();
       $all_nguoithamkhao= NguoiThamKhaoUV::orderBy('thamkhao_id', 'asc')->get();
        return view('ungvien.kinhnghiem_lamviec')->with(compact('meta_title','tt_uv', 'detail_uv', 'all_kinhnghiem', 'all_nguoithamkhao'));
    }

    //Thêm kinh nghiệm làm việc
    public function them_kinhnghiem_lamviec($taikhoan_id, Request $request){
        $meta_title = "VIỆC LÀM CẦN THƠ | TUYỂN DỤNG CẦN THƠ | Mới Nhất Hôm Nay";
        $thang = Thang::orderBy('thang_id','asc')->get();
        $nam = Nam::orderBy('nam_id','desc')->get();
        $tt_uv = TaiKhoanUV::orderBy('taikhoan_id','desc')->get();
        
        $detail_uv = TaikhoanUV::join('tbl_hoso_uv','tbl_hoso_uv.hoso_id_uv','=','tbl_taikhoan_uv.taikhoan_id')->where('taikhoan_id',$taikhoan_id)->get();
       
         return view('ungvien.them_kinhnghiem_lamviec')->with(compact('meta_title','thang','nam','tt_uv', 'detail_uv'));
    }
     
    //Post thông tin kinh nghiệm
    public function add_kinhnghiem_lamviec(Request $request,$taikhoan_id){
        
        $data = array();
        $data['kinhnghiem_id_uv'] = $taikhoan_id;
        $data['kinhnghiem_congty'] = $request->tencty;
        $data['kinhnghiem_chucdanh'] = $request->chucdanh;
        $data['kinhnghiem_thangbd'] = $request->thangFrom;
        $data['kinhnghiem_nambd'] = $request->namFrom;
        $data['kinhnghiem_thangkt'] = $request->thangTo;
        $data['kinhnghiem_namkt'] = $request->namTo;
        $data['kinhnghiem_mota'] = $request->mota;
        $kinhnghiem_id = KinhNghiemUV::insertGetId($data);
        // DB::table('tbl_bangcap_uv')->where('bangcap_id_uv',$taikhoan_id)->update($data); 
        Session::put('message', 'Cập nhật thông tin thành công');
       
        return Redirect::to('kinhnghiem-lamviec/'.$taikhoan_id);
    }

    //Sửa kinh nghiệm làm việc
    public function sua_kinhnghiem_lamviec($taikhoan_id, $kinhnghiem_id, Request $request){
        $meta_title = "VIỆC LÀM CẦN THƠ | TUYỂN DỤNG CẦN THƠ | Mới Nhất Hôm Nay";
        $thang = DB::table('tbl_thang')->orderBy('thang_id','asc')->get();
        $nam = DB::table('tbl_nam')->orderBy('nam_id','desc')->get();
        $tt_uv = DB::table('tbl_taikhoan_uv')->orderBy('taikhoan_id','desc')->get();
        $detail_uv = TaikhoanUV::join('tbl_hoso_uv','tbl_hoso_uv.hoso_id_uv','=','tbl_taikhoan_uv.taikhoan_id')->join('tbl_kinhnghiem_lamviec','tbl_kinhnghiem_lamviec.kinhnghiem_id_uv','=','tbl_taikhoan_uv.taikhoan_id')->where('taikhoan_id',$taikhoan_id)->where('kinhnghiem_id', $kinhnghiem_id)->get();
        return view('ungvien.sua_kinhnghiem_lamviec')->with(compact('meta_title','thang','nam','tt_uv', 'detail_uv'));
    }
    

    //Update kinh nghiệm làm việc
    public function update_kinhnghiem_lamviec($taikhoan_id, $kinhnghiem_id, Request $request){
        $data = array();
        $data['kinhnghiem_id_uv'] = $taikhoan_id;
        $data['kinhnghiem_congty'] = $request->tencty;
        $data['kinhnghiem_chucdanh'] = $request->chucdanh;
        $data['kinhnghiem_thangbd'] = $request->thangFrom;
        $data['kinhnghiem_nambd'] = $request->namFrom;
        $data['kinhnghiem_thangkt'] = $request->thangTo;
        $data['kinhnghiem_namkt'] = $request->namTo;
        $data['kinhnghiem_mota'] = $request->mota;
        KinhnghiemUV::where('kinhnghiem_id',$kinhnghiem_id)->update($data);
        Session::put('message', 'Cập nhật kinh nghiệm làm việc thành công');
        return Redirect::to('kinhnghiem-lamviec/'.$taikhoan_id); 
    }

    //Xóa kinh nghiệm làm việc
    public function xoa_kinhnghiem_lamviec($taikhoan_id, $kinhnghiem_id, Request $request){
        KinhnghiemUV::where('kinhnghiem_id',$kinhnghiem_id)->delete();
        Session::put('message', 'Xóa kinh nghiệm làm việc thành công');
        return Redirect::to('kinhnghiem-lamviec/'.$taikhoan_id);
    }

    //Thêm người tham khảo
    public function them_nguoi_thamkhao($taikhoan_id, Request $request){
        $meta_title = "VIỆC LÀM CẦN THƠ | TUYỂN DỤNG CẦN THƠ | Mới Nhất Hôm Nay";
        $tt_uv = TaiKhoanUV::orderBy('taikhoan_id','desc')->get();
        $detail_uv = TaikhoanUV::join('tbl_hoso_uv','tbl_hoso_uv.hoso_id_uv','=','tbl_taikhoan_uv.taikhoan_id')->where('taikhoan_id',$taikhoan_id)->get();
         return view('ungvien.them_nguoi_thamkhao')->with(compact('meta_title','tt_uv', 'detail_uv'));
    }

    //Post thông tin người tham khảo
    public function add_nguoi_thamkhao(Request $request,$taikhoan_id){
        $data = array();
        $data['thamkhao_id_uv'] = $taikhoan_id;
        $data['thamkhao_ten'] = $request->hoten;
        $data['thamkhao_chucdanh'] = $request->chucdanh;
        $data['thamkhao_congty'] = $request->tencty;
        $data['thamkhao_email'] = $request->email;
        $data['thamkhao_sdt'] = $request->sdt;
        
        $thamkhao_id = NguoiThamKhaoUV::insertGetId($data);
        Session::put('message1', 'Cập nhật thông tin thành công');
        return Redirect::to('kinhnghiem-lamviec/'.$taikhoan_id);
    }

    //Sửa người tham khảo
    public function sua_nguoi_thamkhao($taikhoan_id, $thamkhao_id, Request $request){
        $meta_title = "VIỆC LÀM CẦN THƠ | TUYỂN DỤNG CẦN THƠ | Mới Nhất Hôm Nay";
        $tt_uv = TaiKhoanUV::orderBy('taikhoan_id','desc')->get();
        $detail_uv = TaikhoanUV::join('tbl_hoso_uv','tbl_hoso_uv.hoso_id_uv','=','tbl_taikhoan_uv.taikhoan_id')->join('tbl_nguoi_thamkhao','tbl_nguoi_thamkhao.thamkhao_id_uv','=','tbl_taikhoan_uv.taikhoan_id')->where('taikhoan_id',$taikhoan_id)->where('thamkhao_id', $thamkhao_id)->get();
         return view('ungvien.sua_nguoi_thamkhao')->with(compact('meta_title','tt_uv', 'detail_uv'));
    }

    //Update người tham khảo
    public function update_nguoi_thamkhao($taikhoan_id, $thamkhao_id, Request $request){
        $data = array();
        $data['thamkhao_id_uv'] = $taikhoan_id;
        $data['thamkhao_ten'] = $request->hoten;
        $data['thamkhao_chucdanh'] = $request->chucdanh;
        $data['thamkhao_congty'] = $request->tencty;
        $data['thamkhao_email'] = $request->email;
        $data['thamkhao_sdt'] = $request->sdt;
        NguoiThamKhaoUV::where('thamkhao_id',$thamkhao_id)->update($data);
        Session::put('message1', 'Cập nhật người tham khảo thành công');
        return Redirect::to('kinhnghiem-lamviec/'.$taikhoan_id); 
    }

    //Xóa người tham khảo
    public function xoa_nguoi_thamkhao($taikhoan_id, $thamkhao_id, Request $request){
        NguoiThamKhaoUV::where('thamkhao_id',$thamkhao_id)->delete();
        Session::put('message1', 'Xóa người tham khảo thành công');
        return Redirect::to('kinhnghiem-lamviec/'.$taikhoan_id);
     }

    public function kynang($taikhoan_id, Request $request){
        $meta_title = "VIỆC LÀM CẦN THƠ | TUYỂN DỤNG CẦN THƠ | Mới Nhất Hôm Nay";
        $tt_uv = TaiKhoanUV::orderBy('taikhoan_id','desc')->get();
        $detail_uv = TaikhoanUV::join('tbl_hoso_uv','tbl_hoso_uv.hoso_id_uv','=','tbl_taikhoan_uv.taikhoan_id')->where('taikhoan_id',$taikhoan_id)->get();
        $loai_kynang = LoaiKyNang::orderBy('loaikynang_id', 'asc')->get();
        $all_kynang = KyNangMem::orderBy('knmem_id', 'asc')->get();
        $kynang_chuyenmon = KyNangChuyenMon::orderBy('kncm_id', 'asc')->get();
        return view('ungvien.kynang')->with(compact('meta_title','tt_uv', 'detail_uv', 'loai_kynang', 'all_kynang', 'kynang_chuyenmon'));
    }
    public function add_kynang(Request $request,$taikhoan_id){
        
        $data = array();
        $data['knmem_id_uv'] = $taikhoan_id;
        $data['knmem_giaiquyetvande'] = $request->ungvien_giaiquyetvande;
        $data['knmem_lamviecnhom'] = $request->ungvien_lamviecnhom;
        $data['knmem_tuduysangtao'] = $request->ungvien_tuduysangtao;
        $data['knmem_hocvatuhoc'] = $request->ungvien_hocvatuhoc;
        $data['knmem_thuyettrinh'] = $request->ungvien_thuyettrinh;
        $data['knmem_giaotiep'] = $request->ungvien_giaotiep;
        $data['knmem_hoatdong'] = $request->hoatdong;
        $data['knmem_thanhtich'] = $request->thanhtich;
        KyNangMem::where('knmem_id_uv',$taikhoan_id)->update($data);
        // $data['knmem_loai'] = $request->ungvien_$tenkn->tenkn_id;
        // $knmem_id = KyNangMem::insertGetId($data);
        
        

        
        Session::put('message', 'Cập nhật kỹ năng thành công');
        return Redirect::to('kynang/'.$taikhoan_id);
    }
    public function them_kn_chuyenmon(Request $request, $taikhoan_id){
        $meta_title = "VIỆC LÀM CẦN THƠ | TUYỂN DỤNG CẦN THƠ | Mới Nhất Hôm Nay";
        $tt_uv = TaiKhoanUV::orderBy('taikhoan_id','desc')->get();
        $detail_uv = TaikhoanUV::join('tbl_hoso_uv','tbl_hoso_uv.hoso_id_uv','=','tbl_taikhoan_uv.taikhoan_id')->where('taikhoan_id',$taikhoan_id)->get();
        $loai_kynang = LoaiKyNang::orderBy('loaikynang_id', 'asc')->get();
        return view('ungvien.them_kynang_chuyenmon')->with(compact('meta_title','tt_uv', 'detail_uv', 'loai_kynang'));
    }
    public function add_kncm(Request $request,$taikhoan_id){
        $data = array();
        $data['kncm_id_uv'] = $taikhoan_id;
        $data['kncm_ten'] = $request->tenkncm;
        $data['kncm_loai'] = $request->loaikncm;
        
        
        $kncmn_id = KyNangChuyenMon::insertGetId($data);
        Session::put('message1', 'Cập nhật thông tin thành công');
        return Redirect::to('kynang/'.$taikhoan_id);
    }
    public function xoa_kncm($taikhoan_id, $kncm_id, Request $request){
        KyNangChuyenMon::where('kncm_id',$kncm_id)->delete();
        Session::put('message1', 'Xóa kỹ năng chuyên môn thành công');
        return Redirect::to('kynang/'.$taikhoan_id);
     }
     public function tinhoc_ngoaingu($taikhoan_id, Request $request){
        $meta_title = "VIỆC LÀM CẦN THƠ | TUYỂN DỤNG CẦN THƠ | Mới Nhất Hôm Nay";
        $tt_uv = TaiKhoanUV::orderBy('taikhoan_id','desc')->get();
        $detail_uv = TaikhoanUV::join('tbl_hoso_uv','tbl_hoso_uv.hoso_id_uv','=','tbl_taikhoan_uv.taikhoan_id')->where('taikhoan_id',$taikhoan_id)->get();
        $loai_kynang = LoaiKyNang::orderBy('loaikynang_id', 'asc')->get();
        $all_tinhoc = TinHocUV::orderBy('tinhoc_id', 'asc')->get();
        $all_trinhdonn = TrinhDoNNUV::orderBy('tdnn_id', 'asc')->get();
        $all_ngoaingukhac = NgoaiNguKhac::orderBy('nnk_id', 'asc')->get();
       
        return view('ungvien.tinhoc_ngoaingu')->with(compact('meta_title','tt_uv', 'detail_uv', 'loai_kynang', 'all_tinhoc', 'all_trinhdonn', 'all_ngoaingukhac'));
    }
    public function add_tinhoc_ngoaingu(Request $request,$taikhoan_id){
        $data = array();
        $data['tinhoc_id_uv'] = $taikhoan_id;
        $data['tinhoc_word'] = $request->ungvien_word;
        $data['tinhoc_excel'] = $request->ungvien_excel;
        $data['tinhoc_pp'] = $request->ungvien_pp;
        $data['tinhoc_ps'] = $request->ungvien_ps;
        
        TinHocUV::where('tinhoc_id_uv',$taikhoan_id)->update($data);
        Session::put('message1', 'Cập nhật thông tin thành công');
        return Redirect::to('tinhoc-ngoaingu/'.$taikhoan_id);
    }
    public function them_ngoaingu(Request $request, $taikhoan_id){
        $meta_title = "VIỆC LÀM CẦN THƠ | TUYỂN DỤNG CẦN THƠ | Mới Nhất Hôm Nay";
        $tt_uv = TaiKhoanUV::orderBy('taikhoan_id','desc')->get();
        $detail_uv = TaikhoanUV::join('tbl_hoso_uv','tbl_hoso_uv.hoso_id_uv','=','tbl_taikhoan_uv.taikhoan_id')->where('taikhoan_id',$taikhoan_id)->get();
        $loai_kynang = LoaiKyNang::orderBy('loaikynang_id', 'asc')->get();
        $all_ngoaingu = NgoaiNgu::orderBy('nn_id', 'asc')->get();
        return view('ungvien.them_ngoaingu')->with(compact('meta_title','tt_uv', 'detail_uv', 'loai_kynang', 'all_ngoaingu'));
    }
    public function add_trinhdo_nn(Request $request,$taikhoan_id){
        $data = array();
        
        if ($request->ngoaingu_type == 10) {
            $data['nnk_id_uv'] = $taikhoan_id;
            $data['nnk_ten'] = $request->ngoaingu_khac;
            $data['nnk_nghe'] = $request->ngoaingu_nghe;
            $data['nnk_noi'] = $request->ngoaingu_noi;
            $data['nnk_doc'] = $request->ngoaingu_doc;
            $data['nnk_viet'] = $request->ngoaingu_viet;
            $nnk_id = NgoaiNguKhac::insertGetId($data);
        }else{
            $data['tdnn_id_uv'] = $taikhoan_id;
            $data['tdnn_ten'] = $request->ngoaingu_type;
            $data['tdnn_nghe'] = $request->ngoaingu_nghe;
            $data['tdnn_noi'] = $request->ngoaingu_noi;
            $data['tdnn_doc'] = $request->ngoaingu_doc;
            $data['tdnn_viet'] = $request->ngoaingu_viet;
            $tdnn_id = TrinhDoNNUV::insertGetId($data);
        
        }
        
        
        Session::put('message', 'Cập nhật thông tin thành công');
        return Redirect::to('tinhoc-ngoaingu/'.$taikhoan_id);
    }
    public function sua_ngoaingu($taikhoan_id, $tdnn_id, Request $request){
        $meta_title = "VIỆC LÀM CẦN THƠ | TUYỂN DỤNG CẦN THƠ | Mới Nhất Hôm Nay";
        $tt_uv = TaiKhoanUV::orderBy('taikhoan_id','desc')->get();
        $detail_uv = TaikhoanUV::join('tbl_trinhdo_nn_uv','tbl_trinhdo_nn_uv.tdnn_id_uv','=','tbl_taikhoan_uv.taikhoan_id')->where('taikhoan_id',$taikhoan_id)->where('tdnn_id', $tdnn_id)->get();
        $loai_kynang = LoaiKyNang::orderBy('loaikynang_id', 'asc')->get();
        $all_ngoaingu = NgoaiNgu::orderBy('nn_id', 'asc')->get();
         return view('ungvien.sua_ngoaingu')->with(compact('meta_title','tt_uv', 'detail_uv', 'loai_kynang', 'all_ngoaingu'));
    }
    public function sua_ngoaingu_khac($taikhoan_id, $nnk_id, Request $request){
        $meta_title = "VIỆC LÀM CẦN THƠ | TUYỂN DỤNG CẦN THƠ | Mới Nhất Hôm Nay";
        $tt_uv = TaiKhoanUV::orderBy('taikhoan_id','desc')->get();
        $detail_uv = TaikhoanUV::join('tbl_ngoaingu_khac','tbl_ngoaingu_khac.nnk_id_uv','=','tbl_taikhoan_uv.taikhoan_id')->where('taikhoan_id',$taikhoan_id)->where('nnk_id', $nnk_id)->get();
        $loai_kynang = LoaiKyNang::orderBy('loaikynang_id', 'asc')->get();
        $all_ngoaingu = NgoaiNgu::orderBy('nn_id', 'asc')->get();
         return view('ungvien.sua_ngoaingu')->with(compact('meta_title','tt_uv', 'detail_uv', 'loai_kynang', 'all_ngoaingu'));
    }
    public function update_trinhdo_nn($taikhoan_id, $tdnn_id, Request $request){
        $data = array();
        $data['tdnn_id_uv'] = $taikhoan_id;
        $data['tdnn_ten'] = $request->ngoaingu_type;
        $data['tdnn_nghe'] = $request->ngoaingu_nghe;
        $data['tdnn_noi'] = $request->ngoaingu_noi;
        $data['tdnn_doc'] = $request->ngoaingu_doc;
        $data['tdnn_viet'] = $request->ngoaingu_viet;
        TrinhDoNNUV::where('tdnn_id',$tdnn_id)->update($data);
       
        Session::put('message', 'Cập nhật thông tin thành công');
        return Redirect::to('tinhoc-ngoaingu/'.$taikhoan_id); 
    }
    public function update_ngoaingu_khac($taikhoan_id, $nnk_id, Request $request){
        $data = array();
        $data['nnk_id_uv'] = $taikhoan_id;
        $data['nnk_ten'] = $request->ngoaingu_khac;
        $data['nnk_nghe'] = $request->ngoaingu_nghe;
        $data['nnk_noi'] = $request->ngoaingu_noi;
        $data['nnk_doc'] = $request->ngoaingu_doc;
        $data['nnk_viet'] = $request->ngoaingu_viet;
        NgoaiNguKhac::where('nnk_id',$nnk_id)->update($data);
       
        Session::put('message', 'Cập nhật thông tin thành công');
        return Redirect::to('tinhoc-ngoaingu/'.$taikhoan_id); 
    }
    public function xoa_ngoaingu($taikhoan_id, $tdnn_id){
        TrinhDoNNUV::where('tdnn_id',$tdnn_id)->delete();
        Session::put('message', 'Xóa ngoại ngữ thành công');
        return Redirect::to('tinhoc-ngoaingu/'.$taikhoan_id);
     }

    public function xoa_ngoaingu_khac($taikhoan_id, $nnk_id){
        NgoaiNguKhac::where('nnk_id',$nnk_id)->delete();
        Session::put('message', 'Xóa ngoại ngữ thành công');
        return Redirect::to('tinhoc-ngoaingu/'.$taikhoan_id);
     }
    public function luu_tin_td($dangtin_id, $taikhoan_id){
        $data = array();
        $data['luu_id_uv'] = $taikhoan_id;
        $data['luu_id_dangtin'] = $dangtin_id;
        $luu_id = LuuTinTD::insertGetId($data);
        
        return Redirect::to('chi-tiet-tuyen-dung/'.$dangtin_id); 
    }
    public function xoa_luu_tin($luu_id, $dangtin_id){
        LuuTinTD::where('luu_id',$luu_id)->delete();
        
        return Redirect::to('chi-tiet-tuyen-dung/'.$dangtin_id); 
     }
}
