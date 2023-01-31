<?php 
 
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
 
//Trang chủ
Route::get('/','HomeController@index');
Route::get('/trang-chu','HomeController@index');
Route::get('/ho-so-ung-vien','HomeController@hoso_ungvien');
Route::get('/dieu-khoan-su-dung','HomeController@dieu_khoan_sd');
Route::get('/chi-tiet-tuyen-dung/{dangtin_id}','HomeController@chitiet_tuyendung');
Route::get('/viec-lam-ban-thoi-gian','HomeController@vieclam_bantg');
Route::get('/viec-lam-thuc-tap','HomeController@vieclam_thuctap');
Route::get('/viec-lam-luong-cao','HomeController@vieclam_luongcao');
Route::get('/viec-lam-moi-nhat','HomeController@vieclam_moinhat');
Route::post('/search','HomeController@search_bar');
Route::post('/tim-kiem','HomeController@search');
Route::post('/tim-kiem-tuyen-dung','HomeController@search_tuyendung');

//Admin
Route::get('/admin','AdminController@index');
Route::get('/dashboard','AdminController@show_dashboard');
Route::get('/logout','AdminController@logout');
Route::post('/dashboard','AdminController@dashboard');

//Nhà tuyển dụng
Route::get('/dang-ky-nha-tuyen-dung','NhaTuyenDungController@dang_ky_ntd');
Route::get('/dang-nhap-nha-tuyen-dung','NhaTuyenDungController@dang_nhap_ntd');
Route::get('/dang-xuat-ntd','NhaTuyenDungController@dang_xuat_ntd');

//Hồ sơ nhà tuyển dụng
Route::get('/nha-tuyen-dung/home','NhaTuyenDungController@trang_quan_ly');
Route::get('/nha-tuyen-dung/dang-tin','NhaTuyenDungController@dang_tin');
Route::get('/nha-tuyen-dung/quan-ly-tin','NhaTuyenDungController@quan_ly_tin');
Route::get('/nha-tuyen-dung/trang-cong-ty/{ntd_id}','NhaTuyenDungController@trang_ct');
Route::get('/nha-tuyen-dung/cap-nhat-tai-khoan','NhaTuyenDungController@capnhat_tk');
Route::get('/xem-tin-tuyen-dung/{dangtin_id}/{ntd_id}','NhaTuyenDungController@xem_tintuyendung');
Route::get('/cap-nhat-tin-tuyen-dung/{dangtin_id}/{ntd_id}','NhaTuyenDungController@edit_tintuyendung');
Route::get('/unactive-tintuyendung/{dangtin_id}','NhaTuyenDungController@unactive_tin');
Route::get('/active-tintuyendung/{dangtin_id}','NhaTuyenDungController@active_tin');
Route::get('/delete-tin/{dangtin_id}','NhaTuyenDungController@delete_tin');

//Update thông tin Nhà tuyển dụng
Route::post('/them-ntd','NhaTuyenDungController@them_ntd');
Route::post('/login-ntd','NhaTuyenDungController@login_ntd');
Route::post('/add-tintuyendung/{ntd_id}','NhaTuyenDungController@add_tintuyendung');
Route::post('/update-tintuyendung/{dangtin_id}','NhaTuyenDungController@update_tintuyendung');
Route::post('/update-taikhoanntd/{ntd_id}','NhaTuyenDungController@update_ntd');


//Ứng viên
Route::get('/dang-ky-ung-vien','UngVienController@dang_ky_uv');
Route::get('/dang-nhap-ung-vien','UngVienController@dang_nhap_uv');
Route::get('/ung-vien/{taikhoan_id}','UngVienController@thong_tin_uv');
Route::get('/xoa-luu-tin/{luu_id}/{dangtin_id}','UngVienController@xoa_luu_tin');
Route::post('/luu-ho-so-ntd/{dangtin_id}/{taikhoan_id}','UngVienController@luu_tin_td');

//Update thông tin Ứng viên
Route::get('/dang-xuat','UngVienController@dang_xuat');
Route::post('/them-ungvien','UngVienController@them_uv');
Route::post('/login-ungvien','UngVienController@login_uv');
Route::post('/update-thongtincanhan/{taikhoan_id}','UngVienController@update_ttcn');
Route::post('/update-thongtinhoso/{taikhoan_id}','UngVienController@update_tths');
Route::post('/add-hocvan-bangcap/{taikhoan_id}','UngVienController@add_hocvan_bangcap');
Route::post('/update-hocvan-bangcap/{taikhoan_id}/{bangcap_id}','UngVienController@update_hocvan_bangcap');
Route::post('/add-kinhnghiem-lamviec/{taikhoan_id}','UngVienController@add_kinhnghiem_lamviec');
Route::post('/update-kinhnghiem-lamviec/{taikhoan_id}/{kinhnghiem_id}','UngVienController@update_kinhnghiem_lamviec');
Route::post('/add-nguoi-thamkhao/{taikhoan_id}','UngVienController@add_nguoi_thamkhao');
Route::post('/update-nguoi-thamkhao/{taikhoan_id}/{thamkhao_id}','UngVienController@update_nguoi_thamkhao');
Route::post('/add-kynang/{taikhoan_id}','UngVienController@add_kynang');
Route::post('/add-kncm/{taikhoan_id}','UngVienController@add_kncm');
Route::post('/add-tinhoc-ngoaingu/{taikhoan_id}','UngVienController@add_tinhoc_ngoaingu');
Route::post('/add-trinhdo-nn/{taikhoan_id}','UngVienController@add_trinhdo_nn');
Route::post('/update-trinhdo-nn/{taikhoan_id}/{tdnn_id}','UngVienController@update_trinhdo_nn');
Route::post('/update-ngoaingu-khac/{taikhoan_id}/{tdnn_id}','UngVienController@update_ngoaingu_khac');
Route::post('/change-pass/{taikhoan_id}','UngVienController@change_pass');

//CV
Route::get('/tao-cv','CVController@tao_cv');
Route::get('/mau-cv-1','CVController@cv_1');
Route::get('/mau-cv-2','CVController@cv_2');
Route::get('/mau-cv-3','CVController@cv_3');
Route::get('/manage-cv','CVController@manage_cv');
Route::get('/add-cv','CVController@add_cv');
Route::get('/edit-cv/{maucv_id}','CVController@edit_cv');
Route::get('/unactive-cv/{maucv_id}','CVController@unactive_cv');
Route::get('/active-cv/{maucv_id}','CVController@active_cv');
Route::get('/delete-cv/{maucv_id}','CVController@delete_cv');
Route::get('/use-cv/{maucv_code}/{taikhoan_id}','CVController@use_cv');
Route::post('/insert-cv','CVController@insert_cv');
Route::post('/update-cv/{maucv_id}','CVController@update_cv');
Route::post('/save-cv/{maucv_code}/{taikhoan_id}','CVController@save_cv');


//Ngành Nghề
Route::get('/manage-job','CVController@manage_job');
Route::get('/unactive-job/{nn_id}','CVController@unactive_job');
Route::get('/active-job/{nn_id}','CVController@active_job');
Route::get('/delete-job/{nn_id}','CVController@delete_job');
Route::get('/add-job','CVController@add_job');
Route::post('/insert-job','CVController@insert_job');

//Ngành nghề tuyển dụng
Route::get('/manage-jobtd','CVController@manage_jobtd');
Route::get('/unactive-jobtd/{nntd_id}','CVController@unactive_jobtd');
Route::get('/active-jobtd/{nntd_id}','CVController@active_jobtd');
Route::get('/delete-jobtd/{nntd_id}','CVController@delete_jobtd');
Route::get('/add-jobtd','CVController@add_jobtd');
Route::post('/insert-jobtd','CVController@insert_jobtd');


//Hồ sơ
Route::get('/thong-tin-ca-nhan/{taikhoan_id}','UngVienController@thong_tin_ca_nhan');
Route::get('/thong-tin-ho-so/{taikhoan_id}','UngVienController@thong_tin_ho_so');
Route::get('/hocvan-bangcap/{taikhoan_id}','UngVienController@hocvan_bangcap');
Route::get('/them-hocvan-bangcap/{taikhoan_id}','UngVienController@them_hocvan_bangcap');
Route::get('/sua-hocvan-bangcap/{taikhoan_id}/{bangcap_id}','UngVienController@sua_hocvan_bangcap');
Route::get('/xoa-hocvan-bangcap/{taikhoan_id}/{bangcap_id}','UngVienController@xoa_hocvan_bangcap');
Route::get('/kinhnghiem-lamviec/{taikhoan_id}','UngVienController@kinhnghiem_lamviec');
Route::get('/them-kinhnghiem-lamviec/{taikhoan_id}','UngVienController@them_kinhnghiem_lamviec');
Route::get('/sua-kinhnghiem-lamviec/{taikhoan_id}/{kinhnghiem_id}','UngVienController@sua_kinhnghiem_lamviec');
Route::get('/xoa-kinhnghiem-lamviec/{taikhoan_id}/{kinhnghiem_id}','UngVienController@xoa_kinhnghiem_lamviec');
Route::get('/them-nguoi-thamkhao/{taikhoan_id}','UngVienController@them_nguoi_thamkhao');
Route::get('/sua-nguoi-thamkhao/{taikhoan_id}/{thamkhao_id}','UngVienController@sua_nguoi_thamkhao');
Route::get('/xoa-nguoi-thamkhao/{taikhoan_id}/{thamkhao_id}','UngVienController@xoa_nguoi_thamkhao');
Route::get('/kynang/{taikhoan_id}','UngVienController@kynang');
Route::get('/them-kynang-chuyenmon/{taikhoan_id}','UngVienController@them_kn_chuyenmon');
Route::get('/xoa-kncm/{taikhoan_id}/{kncm_id}','UngVienController@xoa_kncm');
Route::get('/tinhoc-ngoaingu/{taikhoan_id}','UngVienController@tinhoc_ngoaingu');
Route::get('/them-ngoaingu/{taikhoan_id}','UngVienController@them_ngoaingu');
Route::get('/sua-ngoaingu/{taikhoan_id}/{tdnn_id}','UngVienController@sua_ngoaingu');
Route::get('/sua-ngoaingu-khac/{taikhoan_id}/{nnk_id}','UngVienController@sua_ngoaingu_khac');
Route::get('/xoa-ngoaingu/{taikhoan_id}/{tdnn_id}','UngVienController@xoa_ngoaingu');
Route::get('/xoa-ngoaingu-khac/{taikhoan_id}/{nnk_id}','UngVienController@xoa_ngoaingu_khac');
Route::get('/doi-mat-khau/{taikhoan_id}','UngVienController@doi_mk');