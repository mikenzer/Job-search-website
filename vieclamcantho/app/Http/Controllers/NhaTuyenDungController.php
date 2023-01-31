<?php

namespace App\Http\Controllers;
use DB;
use Session;
session_start();
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\TaiKhoanNTD;
use App\Thang;
use App\Nam;
use App\LoaiBangCap;
use App\KinhNghiemUV;
use App\TenKyNang;
use App\CapbacTD;
use App\LuongMongMuon;
use App\KinhNghiem;
use App\TrinhDoHocVan;
use App\NganhNgheTD;
use App\DiaDiem;
use App\LoaiHinhCongViec;
use App\DangtinTuyendung;
use App\HinhThucNopHS;
use App\QuyenLoi;
use App\QuyMoCT;
use App\LinhVucHD;
use App\LoaiHinhCT;

use App\TaiKhoanUV;

class NhaTuyenDungController extends Controller
{
    //Đăng ký ntd
     public function dang_ky_ntd(Request $request){
        return view('nhatuyendung.dang_ky_nhatuyendung');
    }
    //Thêm ntd
     public function them_ntd(Request $request){
        $data = array();
        $data['ntd_email'] = $request->taikhoan_email;
        $data['ntd_matkhau'] = $request->taikhoan_matkhau;
        $data['ntd_tencongty'] = $request->taikhoan_ten;
        $data['ntd_masothue'] = $request->taikhoan_mst;
        $data['ntd_sdt'] = $request->taikhoan_sdt;
        $data['ntd_diachi'] = $request->taikhoan_diachi;
        $get_image = $request->file('taikhoan_image');
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/upload/nhatuyendung', $new_image);          
            $data['ntd_logo'] = $new_image;           
            $ntd_id = TaikhoanNTD::insertGetId($data);
        $ntd_tencongty = $request->taikhoan_ten;
        Session::put('ntd_id',$ntd_id);
        Session::put('ntd_tencongty',$ntd_tencongty);
        return Redirect::to('/dang-ky-nha-tuyen-dung')->with('message','Đăng ký tài khoản thành công. Vui lòng đăng nhập!');
        }
        $ntd_id = TaikhoanNTD::insertGetId($data);
        $ntd_tencongty = $request->taikhoan_ten;
        Session::put('ntd_id',$ntd_id);
        Session::put('ntd_tencongty',$ntd_tencongty);

        // //Thêm id ứng viên vào bảng Hồ sơ ứng viên
        // $hoso_uv = new HosoUV();       
        // $hoso_uv->hoso_id_uv = Session::get('taikhoan_id');
        // $hoso_uv->save();
        // //Thêm id ứng viên vào bảng Tin hoc
        // $tinhoc_uv = new TinHocUV();       
        // $tinhoc_uv->tinhoc_id_uv = Session::get('taikhoan_id');
        // $tinhoc_uv->save();
        // //Thêm id ứng viên vào bảng Ky nang mem
        // $kynang_uv = new KyNangMem();       
        // $kynang_uv->knmem_id_uv = Session::get('taikhoan_id');
        // $kynang_uv->save();
        return Redirect::to('/dang-ky-nha-tuyen-dung')->with('message','Đăng ký tài khoản thành công. Vui lòng đăng nhập!');
    }
    //Đăng nhập nhà tuyển dụng
    public function dang_nhap_ntd(Request $request){
       return view('nhatuyendung.dang_nhap_nhatuyendung');
    } 
    public function login_ntd(Request $request){
        $email = $request->emailLoginNtd;
        $password =$request->passLoginNtd;
        $result = TaiKhoanNTD::where('ntd_email',$email)->where('ntd_matkhau',$password)->first();
        if($result){
            Session::put('ntd_id',$result->ntd_id);
            return Redirect::to('/trang-chu');
        }else{
            return Redirect::to('/dang-nhap-nha-tuyen-dung')->with('message','Tài khoản hoặc mật khẩu không chính xác!');
        }        
    }
    //Đăng xuất
    public function dang_xuat_ntd(){
        Session::flush();
        return Redirect::to('/trang-chu');
    }
    //Trang quản lý
     public function trang_quan_ly(){
        $meta_title = "VIỆC LÀM CẦN THƠ | TUYỂN DỤNG CẦN THƠ | Mới Nhất Hôm Nay";
        $all_taikhoanntd = TaikhoanNTD::orderBy('ntd_id', 'asc')->get();
        $all_dangtin = DangtinTuyendung::orderBy('dangtin_id', 'desc')->get();
        return view('nhatuyendung.home')->with(compact('meta_title', 'all_taikhoanntd', 'all_dangtin'));
    }
    //Đăng tin
     public function dang_tin(){
        $meta_title = "VIỆC LÀM CẦN THƠ | TUYỂN DỤNG CẦN THƠ | Mới Nhất Hôm Nay";
        $all_capbac= CapBacTD::orderBy('cbtd_id', 'asc')->get();
        $all_lhcv = LoaiHinhCongViec::orderby('lhcv_id', 'asc')->get();
        $all_kn= KinhNghiem::where('kn_ten', '!=', 'Chưa có kinh nghiệm')->orderBy('kn_id', 'asc')->get();
        $all_tdhv= TrinhDoHocVan::where('tdhv_ten', '!=', 'Chưa qua đào tạo')->orderBy('tdhv_id', 'asc')->get();
        $all_nn= NganhNgheTD::where('nntd_status', '1')->orderBy('nntd_id', 'asc')->get();
        $all_diadiem= DiaDiem::orderBy('diadiem_id', 'asc')->get();
        $all_lmm= LuongMongMuon::orderBy('lmm_id', 'asc')->get();
        $all_taikhoanntd = TaikhoanNTD::orderBy('ntd_id', 'asc')->get();
        $all_dangtin = DangtinTuyendung::orderBy('dangtin_id', 'desc')->get();
        
        return view('nhatuyendung.dang_tin')->with(compact('meta_title', 'all_lhcv', 'all_capbac', 'all_kn', 'all_tdhv', 'all_nn', 'all_diadiem', 'all_lmm', 'all_taikhoanntd', 'all_dangtin'));
    }
    public function add_tintuyendung(Request $request, $ntd_id){
        $data = array();
        $data['dangtin_chucdanh'] = $request->tuyendung_tieude;
        $data['dangtin_capbac'] = $request->tuyendung_capbac;
        $data['dangtin_loaihinhcv'] = $request->tuyendung_loai;
        $data['dangtin_mucluong'] = $request->tuyendung_mucluong;
        $data['dangtin_diadiem'] = $request->tuyendung_diadiem;
        $data['dangtin_nganhnghe'] = $request->tuyendung_nganhnghe;
        $data['dangtin_sltuyen'] = $request->tuyendung_soluong;
        $data['dangtin_hannop_hs'] = $request->tuyendung_hannop;
        $data['dangtin_mota_cv'] = $request->tuyendung_mota;
        $data['dangtin_kinhnghiem'] = $request->tuyendung_kinhnghiem;
        $data['dangtin_bangcap'] = $request->tuyendung_trinhdo;
        $data['dangtin_gioitinh'] = $request->tuyendung_gioitinh;
        $data['dangtin_yeucau_td'] = $request->tuyendung_yeucau;
        $data['dangtin_chedo_phucloi'] = $request->tuyendung_quyenloi;
        $data['dangtin_hoso_yeucau'] = $request->tuyendung_cachnophs;
        $data['dangtin_nophs_mail'] = $request->tuyendung_email;
        $data['dangtin_nophs_hotline'] = $request->tuyendung_sdt;
        $data['dangtin_nguoilienhe'] = $request->tuyendung_tenlienhe;
        $data['dangtin_diachi'] = $request->tuyendung_diachi;
        $data['dangtin_status'] = $request->tuyendung_status;
        $data['dangtin_id_ntd'] = $ntd_id;
        $dangtin_id = DangtinTuyendung::insertGetId($data);

        $data1 = array();
        $data1['htnhs_id_tintuyendung'] = $dangtin_id;
        $data1['htnhs_mail'] = $request->tuyendung_nophs_online;
        $data1['htnhs_tructiep'] = $request->tuyendung_nophs_tructiep;
        $data1['htnhs_hotline'] = $request->lienhesdt;
        $htnhs_id = HinhThucNopHS::insertGetId($data1);

        $data2 = array();
        $data2['quyenloi_id_tintuyendung'] = $dangtin_id;
        $data2['quyenloi_baohiem'] = $request->quyenloi_baohiem;
        $data2['quyenloi_nghiphep'] = $request->quyenloi_nghiphep;
        $data2['quyenloi_dongphuc'] = $request->quyenloi_dongphuc;
        $data2['quyenloi_tangluong'] = $request->quyenloi_tangluong;
        $data2['quyenloi_thuong'] = $request->quyenloi_thuong;
        $data2['quyenloi_daotao'] = $request->quyenloi_daotao;
        $data2['quyenloi_phucap'] = $request->quyenloi_phucap;
        $data2['quyenloi_laptop'] = $request->quyenloi_laptop;
        $data2['quyenloi_ctphi'] = $request->quyenloi_ctphi;
        $data2['quyenloi_dulich'] = $request->quyenloi_dulich;
        $data2['quyenloi_phucaptn'] = $request->quyenloi_phucaptn;
        $data2['quyenloi_chamsocsk'] = $request->quyenloi_chamsocsk;
        $data2['quyenloi_xe'] = $request->quyenloi_xe;
        $data2['quyenloi_clb'] = $request->quyenloi_clb;
        $data2['quyenloi_dlnuocngoai'] = $request->quyenloi_dlnuocngoai;
        $quyenloi_id = QuyenLoi::insertGetId($data2);
        Session::put('message', 'Đăng tin tuyển dụng thành công');
        return Redirect::to('/nha-tuyen-dung/quan-ly-tin');
        
    }
    //Đăng tin
     public function quan_ly_tin(){
        $meta_title = "VIỆC LÀM CẦN THƠ | TUYỂN DỤNG CẦN THƠ | Mới Nhất Hôm Nay";
        $all_dangtin = DangtinTuyendung::orderBy('dangtin_id', 'desc')->get();
        $all_taikhoanntd = TaikhoanNTD::orderBy('ntd_id', 'asc')->get();
        return view('nhatuyendung.tuyen_dung')->with(compact('meta_title', 'all_dangtin', 'all_taikhoanntd'));
    }

    //Cập nhật tin
    public function edit_tintuyendung($dangtin_id, $ntd_id){
        $meta_title = "VIỆC LÀM CẦN THƠ | TUYỂN DỤNG CẦN THƠ | Mới Nhất Hôm Nay";
        $all_dangtin = DangtinTuyendung::join('tbl_hinhthucnop_hoso', 'htnhs_id_tintuyendung', '=', 'dangtin_id')->join('tbl_quyenloi', 'quyenloi_id_tintuyendung', '=', 'dangtin_id')->where('dangtin_id', $dangtin_id)->orderBy('dangtin_id', 'asc')->get();
        $all_capbac= CapBacTD::orderBy('cbtd_id', 'asc')->get();
        $all_lhcv = LoaiHinhCongViec::orderby('lhcv_id', 'asc')->get();
        $all_kn= KinhNghiem::where('kn_ten', '!=', 'Chưa có kinh nghiệm')->orderBy('kn_id', 'asc')->get();
        $all_tdhv= TrinhDoHocVan::where('tdhv_ten', '!=', 'Chưa qua đào tạo')->orderBy('tdhv_id', 'asc')->get();
        $all_nn= NganhNgheTD::where('nntd_status', '1')->orderBy('nntd_id', 'asc')->get();
        $all_diadiem= DiaDiem::orderBy('diadiem_id', 'asc')->get();
        $all_lmm= LuongMongMuon::orderBy('lmm_id', 'asc')->get();
        $all_taikhoanntd = TaikhoanNTD::where('ntd_id', $ntd_id)->orderBy('ntd_id', 'asc')->get();
        
        
        return view('nhatuyendung.edit_tintuyendung')->with(compact('meta_title', 'all_lhcv', 'all_capbac', 'all_kn', 'all_tdhv', 'all_nn', 'all_diadiem', 'all_lmm', 'all_taikhoanntd', 'all_dangtin'));
    }
    public function update_tintuyendung(Request $request, $dangtin_id){
        $data = array();
        $data['dangtin_chucdanh'] = $request->tuyendung_tieude;
        $data['dangtin_capbac'] = $request->tuyendung_capbac;
        $data['dangtin_loaihinhcv'] = $request->tuyendung_loai;
        $data['dangtin_mucluong'] = $request->tuyendung_mucluong;
        $data['dangtin_diadiem'] = $request->tuyendung_diadiem;
        $data['dangtin_nganhnghe'] = $request->tuyendung_nganhnghe;
        $data['dangtin_sltuyen'] = $request->tuyendung_soluong;
        $data['dangtin_hannop_hs'] = $request->tuyendung_hannop;
        $data['dangtin_mota_cv'] = $request->tuyendung_mota;
        $data['dangtin_kinhnghiem'] = $request->tuyendung_kinhnghiem;
        $data['dangtin_bangcap'] = $request->tuyendung_trinhdo;
        $data['dangtin_gioitinh'] = $request->tuyendung_gioitinh;
        $data['dangtin_yeucau_td'] = $request->tuyendung_yeucau;
        $data['dangtin_chedo_phucloi'] = $request->tuyendung_quyenloi;
        $data['dangtin_hoso_yeucau'] = $request->tuyendung_cachnophs;
        $data['dangtin_nophs_mail'] = $request->tuyendung_email;
        $data['dangtin_nophs_hotline'] = $request->tuyendung_sdt;
        $data['dangtin_nguoilienhe'] = $request->tuyendung_tenlienhe;
        $data['dangtin_diachi'] = $request->tuyendung_diachi;
        $data['dangtin_status'] = $request->tuyendung_status;
        DangtinTuyendung::where('dangtin_id', $dangtin_id)->update($data);

        $data1 = array();
        $data1['htnhs_id_tintuyendung'] = $dangtin_id;
        $data1['htnhs_mail'] = $request->tuyendung_nophs_online;
        $data1['htnhs_tructiep'] = $request->tuyendung_nophs_tructiep;
        $data1['htnhs_hotline'] = $request->lienhesdt;
        HinhThucNopHS::where('htnhs_id_tintuyendung', $dangtin_id)->update($data1);

        $data2 = array();
        $data2['quyenloi_id_tintuyendung'] = $dangtin_id;
        $data2['quyenloi_baohiem'] = $request->quyenloi_baohiem;
        $data2['quyenloi_nghiphep'] = $request->quyenloi_nghiphep;
        $data2['quyenloi_dongphuc'] = $request->quyenloi_dongphuc;
        $data2['quyenloi_tangluong'] = $request->quyenloi_tangluong;
        $data2['quyenloi_thuong'] = $request->quyenloi_thuong;
        $data2['quyenloi_daotao'] = $request->quyenloi_daotao;
        $data2['quyenloi_phucap'] = $request->quyenloi_phucap;
        $data2['quyenloi_laptop'] = $request->quyenloi_laptop;
        $data2['quyenloi_ctphi'] = $request->quyenloi_ctphi;
        $data2['quyenloi_dulich'] = $request->quyenloi_dulich;
        $data2['quyenloi_phucaptn'] = $request->quyenloi_phucaptn;
        $data2['quyenloi_chamsocsk'] = $request->quyenloi_chamsocsk;
        $data2['quyenloi_xe'] = $request->quyenloi_xe;
        $data2['quyenloi_clb'] = $request->quyenloi_clb;
        $data2['quyenloi_dlnuocngoai'] = $request->quyenloi_dlnuocngoai;
        QuyenLoi::where('quyenloi_id_tintuyendung', $dangtin_id)->update($data2);
        Session::put('message', 'Cập nhật tin tuyển dụng thành công');
        return Redirect::to('/nha-tuyen-dung/quan-ly-tin');
    }
    public function active_tin($dangtin_id){  
        DangtinTuyendung::where('dangtin_id', $dangtin_id)->update(['dangtin_status'=>1]);
        return Redirect::to('/nha-tuyen-dung/quan-ly-tin');
    }
    public function unactive_tin($dangtin_id){  
        DangtinTuyendung::where('dangtin_id', $dangtin_id)->update(['dangtin_status'=>0]);
        return Redirect::to('/nha-tuyen-dung/quan-ly-tin');
    }
    public function delete_tin($dangtin_id){
        
        DangtinTuyendung::where('dangtin_id',$dangtin_id)->delete();
        HinhThucNopHS::where('htnhs_id_tintuyendung',$dangtin_id)->delete();
        QuyenLoi::where('quyenloi_id_tintuyendung',$dangtin_id)->delete();
        
        return Redirect::to('/nha-tuyen-dung/quan-ly-tin'); 
     } 

    //Xem tin
    public function xem_tintuyendung($dangtin_id, $ntd_id){
        $meta_title = "VIỆC LÀM CẦN THƠ | TUYỂN DỤNG CẦN THƠ | Mới Nhất Hôm Nay";
        $all_dangtin = DangtinTuyendung::join('tbl_taikhoan_ntd','tbl_taikhoan_ntd.ntd_id','=', 'tbl_dangtin.dangtin_id_ntd')->join('tbl_hinhthucnop_hoso', 'tbl_hinhthucnop_hoso.htnhs_id_tintuyendung', '=', 'tbl_dangtin.dangtin_id')->join('tbl_quyenloi', 'quyenloi_id_tintuyendung', '=', 'dangtin_id')->where('dangtin_id', $dangtin_id)->orderBy('dangtin_id', 'asc')->get();
        $all_capbac= CapBacTD::orderBy('cbtd_id', 'asc')->get();
        $all_lhcv = LoaiHinhCongViec::orderby('lhcv_id', 'asc')->get();
        $all_kn= KinhNghiem::where('kn_ten', '!=', 'Chưa có kinh nghiệm')->orderBy('kn_id', 'asc')->get();
        $all_tdhv= TrinhDoHocVan::where('tdhv_ten', '!=', 'Chưa qua đào tạo')->orderBy('tdhv_id', 'asc')->get();
        $all_nn= NganhNgheTD::where('nntd_status', '1')->orderBy('nntd_id', 'asc')->get();
        $all_diadiem= DiaDiem::orderBy('diadiem_id', 'asc')->get();
        $all_lmm= LuongMongMuon::orderBy('lmm_id', 'asc')->get();
        $all_taikhoanntd = TaikhoanNTD::where('ntd_id', $ntd_id)->orderBy('ntd_id', 'asc')->get();

        
        return view('nhatuyendung.xem_tintuyendung')->with(compact('meta_title', 'all_lhcv', 'all_capbac', 'all_kn', 'all_tdhv', 'all_nn', 'all_diadiem', 'all_lmm', 'all_taikhoanntd', 'all_dangtin'));
    }

    //Cập nhật tài khoản
    public function capnhat_tk(){
        $meta_title = "VIỆC LÀM CẦN THƠ | TUYỂN DỤNG CẦN THƠ | Mới Nhất Hôm Nay";
        
        $all_taikhoanntd = TaikhoanNTD::orderBy('ntd_id', 'asc')->get();
        $all_diadiem= DiaDiem::orderBy('diadiem_id', 'asc')->get();
        $all_quymo= QuyMoCT::orderBy('qmct_id', 'asc')->get();
        $all_linhvuc= LinhVucHD::orderBy('lvhd_id', 'asc')->get();
        $all_lhct= LoaiHinhCT::orderBy('lhct_id', 'asc')->get();
        $all_dangtin = DangtinTuyendung::orderBy('dangtin_id', 'desc')->get();
        return view('nhatuyendung.cap_nhat_tai_khoan')->with(compact('meta_title', 'all_taikhoanntd', 'all_diadiem', 'all_quymo', 'all_linhvuc', 'all_lhct', 'all_dangtin'));
    }

    //Update tài khoản nhà tuyển dụng
    public function update_ntd(Request $request, $ntd_id){
        $data = array();
        $data['ntd_email'] = $request->taikhoan_email;
        $data['ntd_tencongty'] = $request->taikhoan_ten;
        $data['ntd_masothue'] = $request->nhatuyendung_mst;
        $data['ntd_sdt'] = $request->taikhoan_sdt;
        $data['ntd_diachi'] = $request->taikhoan_diachi;
        $data['ntd_khuvuc'] = $request->nhatuyendung_diadiem;
        $data['ntd_quymo'] = $request->nhatuyendung_quymo;
        $data['ntd_linhvuc_kd'] = $request->nhatuyendung_linhvuchoatdong;
        $data['ntd_loaihinh_dn'] = $request->nhatuyendung_loaicongty;
        $data['ntd_website'] = $request->nhatuyendung_website;
        $data['ntd_youtube'] = $request->nhatuyendung_youtube;
        $data['ntd_mota'] = $request->nhatuyendung_mota;
        $get_image = $request->file('nhatuyendung_logo');
        
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/upload/nhatuyendung', $new_image);          
            $data['ntd_logo'] = $new_image;
                          
            TaikhoanNTD::where('ntd_id', $ntd_id)->update($data);
            return Redirect::to('/nha-tuyen-dung/cap-nhat-tai-khoan')->with('message','Cập nhật thành công!');
        }
        $get_image1 = $request->file('nhatuyendung_banner');
        if($get_image1){
            $get_name_image1 = $get_image1->getClientOriginalName();
            $name_image1 = current(explode('.', $get_name_image1));
            $new_image1 = $name_image1.rand(0,99).'.'.$get_image1->getClientOriginalExtension();
            $get_image1->move('public/upload/nhatuyendung', $new_image1);          
            $data['ntd_banner'] = $new_image1;
            TaikhoanNTD::where('ntd_id', $ntd_id)->update($data);
            return Redirect::to('/nha-tuyen-dung/cap-nhat-tai-khoan')->with('message','Cập nhật thành công!');
        }

        TaikhoanNTD::where('ntd_id', $ntd_id)->update($data);
        return Redirect::to('/nha-tuyen-dung/cap-nhat-tai-khoan')->with('message','Cập nhật thành công!');
    }

    public function trang_ct($ntd_id){
        $meta_title = "VIỆC LÀM CẦN THƠ | TUYỂN DỤNG CẦN THƠ | Mới Nhất Hôm Nay";
        $all_taikhoanntd = TaikhoanNTD::where('ntd_id', $ntd_id)->get();
        $all_diadiem= DiaDiem::orderBy('diadiem_id', 'asc')->get();
        $all_quymo= QuyMoCT::orderBy('qmct_id', 'asc')->get();
        $all_linhvuc= LinhVucHD::orderBy('lvhd_id', 'asc')->get();
        $all_lhct= LoaiHinhCT::orderBy('lhct_id', 'asc')->get();
        $all_dangtin = DangtinTuyendung::orderBy('dangtin_id', 'desc')->get();
        $all_taikhoan = TaikhoanUV::orderBy('taikhoan_id', 'desc')->get();
        return view('nhatuyendung.trang_congty')->with(compact('meta_title', 'all_taikhoanntd', 'all_diadiem', 'all_quymo', 'all_linhvuc', 'all_lhct', 'all_dangtin', 'all_taikhoan'));;
    }
}
