<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HosoUV;
use App\TaiKhoanUV;
use App\LuongMongMuon;
use App\KinhNghiem;
use App\TrinhDoHocVan;
use App\NganhNghe;
use App\DiaDiem;
use App\CapBac;
use App\TaiKhoanNTD;
use App\Thang;
use App\Nam;
use App\LoaiBangCap;
use App\KinhNghiemUV;
use App\TenKyNang;
use App\CapbacTD;
use App\NganhNgheTD;
use App\LoaiHinhCongViec;
use App\DangtinTuyendung;
use App\HinhThucNopHS;
use App\QuyenLoi;
use App\QuyMoCT;
use App\LinhVucHD;
use App\LoaiHinhCT;
use App\LuuTinTD;
use Session;
session_start();


class HomeController extends Controller
{
    public function index(Request $request){
        $meta_title = "VIỆC LÀM CẦN THƠ | TUYỂN DỤNG CẦN THƠ | Mới Nhất Hôm Nay";
        $all_taikhoan = TaikhoanUV::orderBy('taikhoan_id', 'desc')->get();
        $all_hoso= HosoUV::orderBy('hoso_id', 'desc')->take(9)->get();
        $all_dangtin = DangtinTuyendung::where('dangtin_status', 1)->orderBy('dangtin_id', 'desc')->get();
        $all_taikhoanntd = TaikhoanNTD::orderBy('ntd_id', 'desc')->get();
        return view('pages.home')->with(compact('meta_title', 'all_taikhoan', 'all_hoso', 'all_dangtin', 'all_taikhoanntd'));
    }
    public function dieu_khoan_sd(Request $request){
        $meta_title = "Điều khoản sử dung | Sàn Việc Làm Cần Thơ Online";
        $all_dangtin = DangtinTuyendung::where('dangtin_status', 1)->orderBy('dangtin_id', 'desc')->get();
        $all_taikhoanntd = TaikhoanNTD::orderBy('ntd_id', 'desc')->get();
        $all_taikhoan = TaikhoanUV::orderBy('taikhoan_id', 'desc')->get();
        return view('pages.dieu_khoan_su_dung')->with(compact('meta_title', 'all_taikhoan', 'all_taikhoanntd'));
    }
    
    public function hoso_ungvien(Request $request){
        $meta_title = "VIỆC LÀM CẦN THƠ | TUYỂN DỤNG CẦN THƠ | Mới Nhất Hôm Nay";
        $all_taikhoan = TaikhoanUV::orderBy('taikhoan_id', 'desc')->get();
        $all_hoso= HosoUV::orderBy('hoso_id', 'desc')->get();
        $all_nn= NganhNghe::where('nn_status', '1')->orderBy('nn_id', 'asc')->get();
        $all_diadiem= DiaDiem::orderBy('diadiem_id', 'asc')->get();
        $all_tdhv= TrinhDoHocVan::orderBy('tdhv_id', 'asc')->get();
        $all_kn= KinhNghiem::orderBy('kn_id', 'asc')->get();
        $all_lmm= LuongMongMuon::orderBy('lmm_id', 'asc')->get();
        $all_capbac= CapBac::orderBy('capbac_id', 'asc')->get();
        $all_taikhoanntd = TaikhoanNTD::orderBy('ntd_id', 'desc')->get();
        return view('pages.ho_so_ungvien')->with(compact('meta_title', 'all_taikhoan', 'all_hoso', 'all_nn', 'all_diadiem', 'all_tdhv', 'all_kn', 'all_lmm', 'all_capbac', 'all_taikhoanntd'));
    }
    public function search(Request $request){
        $search_nn = $request->searchUVNN;
        $search_dd = $request->searchUVDD;
        $search_kn = $request->searchUVKN;
        $search_td = $request->searchUVTD;
        $search_ml = $request->searchML;
        $search_cb = $request->searchCB;
        $search_gt = $request->searchGT;

        $meta_title = "VIỆC LÀM CẦN THƠ | TUYỂN DỤNG CẦN THƠ | Mới Nhất Hôm Nay";
        $all_taikhoan = TaikhoanUV::orderBy('taikhoan_id', 'desc')->get();
        $all_hoso = HosoUV::orderBy('hoso_id', 'desc')->get();
        $all_nn = NganhNghe::where('nn_status', '1')->orderBy('nn_id', 'asc')->get();
        $all_diadiem = DiaDiem::orderBy('diadiem_id', 'asc')->get();
        $all_tdhv = TrinhDoHocVan::orderBy('tdhv_id', 'asc')->get();
        $all_kn = KinhNghiem::orderBy('kn_id', 'asc')->get();
        $all_lmm = LuongMongMuon::orderBy('lmm_id', 'asc')->get();
        $all_capbac = CapBac::orderBy('capbac_id', 'asc')->get();
        if($search_nn == '0' && $search_dd == '0' && $search_kn == '0' && $search_td == '0' && $search_ml == '0' && $search_cb == '0' and $search_gt == '2'){
            $search_uv = HosoUV::orderBy('hoso_id', 'desc')->get();
        }elseif($search_nn != '0' ){
            $search_uv = HosoUV::where('hoso_nganhnghe',$search_nn)->get();
        }elseif($search_dd != '0' ){
            $search_uv = HosoUV::where('hoso_diadiem',$search_dd)->get();
        }elseif($search_kn != '0' ){
            $search_uv = HosoUV::where('hoso_kinhnghiem',$search_kn)->get();
        }elseif($search_td != '0' ){
            $search_uv = HosoUV::where('hoso_trinhdo',$search_td)->get();
        }elseif($search_ml != '0' ){
            $search_uv = HosoUV::where('hoso_mucluong',$search_ml)->get();
        }elseif($search_cb != '0' ){
            $search_uv = HosoUV::where('hoso_capbac',$search_cb)->get();
        }elseif($search_gt != '2' ){
            $search_uv = HosoUV::orderBy('hoso_id', 'desc')->get();
            $all_taikhoan = TaikhoanUV::where('taikhoan_gioitinh', $search_gt)->orderBy('taikhoan_id', 'desc')->get();
        }

       
        return view('pages.search_ungvien')->with(compact('meta_title', 'all_taikhoan', 'all_hoso', 'all_nn', 'all_diadiem', 'all_tdhv', 'all_kn', 'all_lmm', 'all_capbac', 'search_uv'));
    }
    public function chitiet_tuyendung($dangtin_id){
        $meta_title = "VIỆC LÀM CẦN THƠ | TUYỂN DỤNG CẦN THƠ | Mới Nhất Hôm Nay";
        $all_dangtin = DangtinTuyendung::join('tbl_taikhoan_ntd','tbl_taikhoan_ntd.ntd_id','=', 'tbl_dangtin.dangtin_id_ntd')->join('tbl_hinhthucnop_hoso', 'tbl_hinhthucnop_hoso.htnhs_id_tintuyendung', '=', 'tbl_dangtin.dangtin_id')->join('tbl_quyenloi', 'quyenloi_id_tintuyendung', '=', 'dangtin_id')->where('dangtin_id', $dangtin_id)->orderBy('dangtin_id', 'asc')->get();
        $all_capbac= CapBacTD::orderBy('cbtd_id', 'asc')->get();
        $all_lhcv = LoaiHinhCongViec::orderby('lhcv_id', 'asc')->get();
        $all_kn= KinhNghiem::where('kn_ten', '!=', 'Chưa có kinh nghiệm')->orderBy('kn_id', 'asc')->get();
        $all_tdhv= TrinhDoHocVan::where('tdhv_ten', '!=', 'Chưa qua đào tạo')->orderBy('tdhv_id', 'asc')->get();
        $all_nn= NganhNgheTD::where('nntd_status', '1')->orderBy('nntd_id', 'asc')->get();
        $all_diadiem= DiaDiem::orderBy('diadiem_id', 'asc')->get();
        $all_lmm= LuongMongMuon::orderBy('lmm_id', 'asc')->get();
        
        $tatca_dangtin = DangtinTuyendung::where('dangtin_id', '!=', $dangtin_id)->orderBy('dangtin_id', 'asc')->get();
        $all_taikhoan = TaikhoanUV::orderBy('taikhoan_id', 'desc')->get();
        $all_taikhoanntd = TaikhoanNTD::orderBy('ntd_id', 'asc')->get();
        return view('pages.chi_tiet_tuyen_dung')->with(compact('meta_title', 'all_lhcv', 'all_capbac', 'all_kn', 'all_tdhv', 'all_nn', 'all_diadiem', 'all_lmm', 'all_dangtin', 'tatca_dangtin', 'all_taikhoanntd', 'all_taikhoan'));
    }
    public function vieclam_moinhat(){
         $meta_title = "VIỆC LÀM CẦN THƠ | TUYỂN DỤNG CẦN THƠ | Mới Nhất Hôm Nay";
         $all_dangtin = DangtinTuyendung::join('tbl_taikhoan_ntd','tbl_taikhoan_ntd.ntd_id','=', 'tbl_dangtin.dangtin_id_ntd')->join('tbl_hinhthucnop_hoso', 'tbl_hinhthucnop_hoso.htnhs_id_tintuyendung', '=', 'tbl_dangtin.dangtin_id')->join('tbl_quyenloi', 'quyenloi_id_tintuyendung', '=', 'dangtin_id')->where('dangtin_status', 1)->orderBy('dangtin_id', 'desc')->get();
         $all_lmm= LuongMongMuon::orderBy('lmm_id', 'asc')->get();
         $all_capbac= CapBacTD::orderBy('cbtd_id', 'asc')->get();
         $all_kn= KinhNghiem::where('kn_ten', '!=', 'Chưa có kinh nghiệm')->orderBy('kn_id', 'asc')->get();
         $all_tdhv= TrinhDoHocVan::where('tdhv_ten', '!=', 'Chưa qua đào tạo')->orderBy('tdhv_id', 'asc')->get();
         $all_lhcv = LoaiHinhCongViec::orderby('lhcv_id', 'asc')->get();
         $all_taikhoanntd = TaikhoanNTD::orderBy('ntd_id', 'asc')->get();
         $all_taikhoan = TaikhoanUV::orderBy('taikhoan_id', 'desc')->get();
         return view('pages.viec_lam_moi_nhat')->with(compact('meta_title', 'all_dangtin', 'all_lmm', 'all_capbac', 'all_kn', 'all_tdhv', 'all_lhcv', 'all_taikhoan', 'all_taikhoanntd'));
    }
    public function search_tuyendung(Request $request){
        
        $search_lmm = $request->searchLMM;
        $search_cb = $request->searchCB;
        $search_lhcv = $request->searchLHCV;
        $search_kn = $request->searchKN;
        $search_tdhv = $request->searchTDHV;

        $meta_title = "VIỆC LÀM CẦN THƠ | TUYỂN DỤNG CẦN THƠ | Mới Nhất Hôm Nay";
         $all_taikhoanntd = TaikhoanNTD::orderBy('ntd_id', 'desc')->get();
         $all_taikhoan = TaikhoanUV::orderBy('taikhoan_id', 'desc')->get();
         $all_lmm= LuongMongMuon::orderBy('lmm_id', 'asc')->get();
         $all_capbac= CapBacTD::orderBy('cbtd_id', 'asc')->get();
         $all_kn= KinhNghiem::where('kn_ten', '!=', 'Chưa có kinh nghiệm')->orderBy('kn_id', 'asc')->get();
         $all_tdhv= TrinhDoHocVan::where('tdhv_ten', '!=', 'Chưa qua đào tạo')->orderBy('tdhv_id', 'asc')->get();
         $all_lhcv = LoaiHinhCongViec::orderby('lhcv_id', 'asc')->get();
        if($search_lmm == '-1' && $search_cb == '-1' && $search_lhcv == '-1' && $search_kn == '-1' && $search_tdhv == '-1'){
            $all_dangtin = DangtinTuyendung::where('dangtin_status', 1)->orderBy('dangtin_id', 'desc')->get();
        }elseif($search_lmm != '-1' ){
            $all_dangtin = DangtinTuyendung::where('dangtin_status', 1)->where('dangtin_mucluong', $search_lmm)->orderBy('dangtin_id', 'desc')->get();
        }elseif($search_cb != '-1' ){
            $all_dangtin = DangtinTuyendung::where('dangtin_status', 1)->where('dangtin_capbac', $search_cb)->orderBy('dangtin_id', 'desc')->get();
        }elseif($search_lhcv != '-1' ){
            $all_dangtin = DangtinTuyendung::where('dangtin_status', 1)->where('dangtin_loaihinhcv', $search_lhcv)->orderBy('dangtin_id', 'desc')->get();
        }elseif($search_kn != '-1' ){
            $all_dangtin = DangtinTuyendung::where('dangtin_status', 1)->where('dangtin_kinhnghiem', $search_kn)->orderBy('dangtin_id', 'desc')->get();
        }elseif($search_tdhv != '-1' ){
            $all_dangtin = DangtinTuyendung::where('dangtin_status', 1)->where('dangtin_bangcap', $search_tdhv)->orderBy('dangtin_id', 'desc')->get();
        }

       
        return view('pages.search_tuyendung')->with(compact('meta_title', 'all_dangtin', 'all_lmm', 'all_capbac', 'all_lhcv', 'all_kn', 'all_kn', 'all_tdhv', 'all_taikhoanntd', 'all_taikhoan'));
    }
    public function search_bar(Request $request){
        $keywords = $request->searchStr;
        $meta_title = "VIỆC LÀM CẦN THƠ | TUYỂN DỤNG CẦN THƠ | Mới Nhất Hôm Nay";
         $all_taikhoanntd = TaikhoanNTD::orderBy('ntd_id', 'desc')->get();
         $all_taikhoan = TaikhoanUV::orderBy('taikhoan_id', 'desc')->get();
         $all_lmm= LuongMongMuon::orderBy('lmm_id', 'asc')->get();
         $all_capbac= CapBacTD::orderBy('cbtd_id', 'asc')->get();
         $all_kn= KinhNghiem::where('kn_ten', '!=', 'Chưa có kinh nghiệm')->orderBy('kn_id', 'asc')->get();
         $all_tdhv= TrinhDoHocVan::where('tdhv_ten', '!=', 'Chưa qua đào tạo')->orderBy('tdhv_id', 'asc')->get();
         $all_lhcv = LoaiHinhCongViec::orderby('lhcv_id', 'asc')->get();
         $all_dangtin = DangtinTuyendung::where('dangtin_status', 1)->where('dangtin_chucdanh','like','%'.$keywords.'%')->orderBy('dangtin_id', 'desc')->get();
         return view('pages.search_bar')->with(compact('meta_title', 'all_dangtin', 'all_lmm', 'all_capbac', 'all_lhcv', 'all_kn', 'all_kn', 'all_tdhv', 'all_taikhoanntd', 'all_taikhoan'));
    }
    public function vieclam_bantg(){
        $meta_title = "VIỆC LÀM CẦN THƠ | TUYỂN DỤNG CẦN THƠ | Mới Nhất Hôm Nay";
         $all_taikhoanntd = TaikhoanNTD::orderBy('ntd_id', 'desc')->get();
         $all_taikhoan = TaikhoanUV::orderBy('taikhoan_id', 'desc')->get();
         $all_lmm= LuongMongMuon::orderBy('lmm_id', 'asc')->get();
         $all_capbac= CapBacTD::orderBy('cbtd_id', 'asc')->get();
         $all_kn= KinhNghiem::where('kn_ten', '!=', 'Chưa có kinh nghiệm')->orderBy('kn_id', 'asc')->get();
         $all_tdhv= TrinhDoHocVan::where('tdhv_ten', '!=', 'Chưa qua đào tạo')->orderBy('tdhv_id', 'asc')->get();
         $all_lhcv = LoaiHinhCongViec::orderby('lhcv_id', 'asc')->get();
        $all_dangtin = DangtinTuyendung::where('dangtin_status', 1)->where('dangtin_loaihinhcv','Bán thời gian/ Thời vụ')->orderBy('dangtin_id', 'desc')->get();
         return view('pages.viec_lam_ban_thoigian')->with(compact('meta_title', 'all_dangtin', 'all_lmm', 'all_capbac', 'all_lhcv', 'all_kn', 'all_kn', 'all_tdhv', 'all_taikhoanntd', 'all_taikhoan'));
    }
    public function vieclam_thuctap(){
        $meta_title = "VIỆC LÀM CẦN THƠ | TUYỂN DỤNG CẦN THƠ | Mới Nhất Hôm Nay";
         $all_taikhoanntd = TaikhoanNTD::orderBy('ntd_id', 'desc')->get();
         $all_taikhoan = TaikhoanUV::orderBy('taikhoan_id', 'desc')->get();
         $all_lmm= LuongMongMuon::orderBy('lmm_id', 'asc')->get();
         $all_capbac= CapBacTD::orderBy('cbtd_id', 'asc')->get();
         $all_kn= KinhNghiem::where('kn_ten', '!=', 'Chưa có kinh nghiệm')->orderBy('kn_id', 'asc')->get();
         $all_tdhv= TrinhDoHocVan::where('tdhv_ten', '!=', 'Chưa qua đào tạo')->orderBy('tdhv_id', 'asc')->get();
         $all_lhcv = LoaiHinhCongViec::orderby('lhcv_id', 'asc')->get();
        $all_dangtin = DangtinTuyendung::where('dangtin_status', 1)->orderBy('dangtin_id', 'desc')->get();
         return view('pages.viec_lam_thuc_tap')->with(compact('meta_title', 'all_dangtin', 'all_lmm', 'all_capbac', 'all_lhcv', 'all_kn', 'all_kn', 'all_tdhv', 'all_taikhoanntd', 'all_taikhoan'));
    }
    public function vieclam_luongcao(){
        $meta_title = "VIỆC LÀM CẦN THƠ | TUYỂN DỤNG CẦN THƠ | Mới Nhất Hôm Nay";
         $all_taikhoanntd = TaikhoanNTD::orderBy('ntd_id', 'desc')->get();
         $all_taikhoan = TaikhoanUV::orderBy('taikhoan_id', 'desc')->get();
         $all_lmm= LuongMongMuon::orderBy('lmm_id', 'asc')->get();
         $all_capbac= CapBacTD::orderBy('cbtd_id', 'asc')->get();
         $all_kn= KinhNghiem::where('kn_ten', '!=', 'Chưa có kinh nghiệm')->orderBy('kn_id', 'asc')->get();
         $all_tdhv= TrinhDoHocVan::where('tdhv_ten', '!=', 'Chưa qua đào tạo')->orderBy('tdhv_id', 'asc')->get();
         $all_lhcv = LoaiHinhCongViec::orderby('lhcv_id', 'asc')->get();
        $all_dangtin = DangtinTuyendung::where('dangtin_status', 1)->orderBy('dangtin_id', 'desc')->get();
         return view('pages.viec_lam_luong_cao')->with(compact('meta_title', 'all_dangtin', 'all_lmm', 'all_capbac', 'all_lhcv', 'all_kn', 'all_kn', 'all_tdhv', 'all_taikhoanntd', 'all_taikhoan'));
    }
}
