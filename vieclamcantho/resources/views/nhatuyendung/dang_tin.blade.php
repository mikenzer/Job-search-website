@extends('nhatuyendung.trang_quan_ly')
@section('content2') 
<?php
                            
                            $ntd_id = Session::get('ntd_id');
            ?>      
<div class="card-footer p-0 bg-white"> 
                        <div class="template-card_tab">
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{URL::to('/nha-tuyen-dung/home')}}" role="tab">
                                        Home
                                    </a>
                                </li>
                                <!-- <li class="nav-item dropdown dropdownTheme">
                                    <a class="nav-link " data-toggle="dropdown" type="button" role="tab">
                                        Hồ sơ
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-left">
                                        <a class="dropdown-item" href="/nha-tuyen-dung/ho-so#m">
                                            Hồ sơ ứng tuyển
                                        </a>
                                        <a class="dropdown-item" href="/nha-tuyen-dung/ho-so-da-luu#m">
                                            Hồ sơ đã lưu
                                        </a>
                                    </div>
                                </li> -->
                                <li class="nav-item">
                                    <a class="nav-link " href="{{URL::to('/nha-tuyen-dung/quan-ly-tin')}}" role="tab">
                                        Tuyển dụng
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="{{URL::to('/nha-tuyen-dung/dang-tin')}}" role="tab">
                                        Đăng tin
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="{{URL::to('/nha-tuyen-dung/cap-nhat-tai-khoan')}}" role="tab">
                                        Cập nhật tài khoản
                                    </a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a class="nav-link" href="https://vieclamcantho.com.vn/nhan-thong-tin-tuyen-dung-11555.html?t=news" role="tab">
                                        Bài viết
                                    </a>
                                </li> -->
                                <!-- <li class="nav-item dropdown dropdownTheme">
                                    <button class="nav-link" data-toggle="dropdown" type="button" role="tab">
                                        <i class="far fa-ellipsis-h ml-1"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item openModalNapTien" href="javascript:void(0)">
                                            Nạp số dư
                                        </a>
                                        <a class="dropdown-item" href="/phi-dang-tin-vip">
                                            Nâng cấp vip
                                        </a>
                                        <a class="dropdown-item" href="/nha-tuyen-dung/doi-mat-khau#m">
                                            Đổi mật khẩu
                                        </a>
                                        <a class="dropdown-item" href="/nha-tuyen-dung/lich-su-giao-dich#m">
                                            Lịch sử giao dịch
                                        </a>
                                    </div>
                                </li> -->
                                <li class="nav-item ml-auto">
                                    <a class="nav-link" href="{{URL::to('/nha-tuyen-dung/trang-cong-ty/'.$ntd_id )}}" role="tab">
                                        Trang công ty
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
<div class="page-ntd">
    <div class="row" style="margin-bottom: 10px">
		    </div>
            
    <div class="row">
        <div class="col-md-12">
            <?php
                            
                            $ntd_id = Session::get('ntd_id');
            ?>             
            <form id="frmDangTuyen" class="form-style" action="{{URl::to('/add-tintuyendung/'.$ntd_id)}}" method="post">
                @csrf
				                <div class="card card-ntd overflow-hidden">
                    <div class="card-header py-3 bg-white">
                        <div class="card-title text-uppercase blue-color h6 fw-600 mb-0">
                            Thông tin công việc
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tuyendung_tieude" class="required">Chức danh</label>
                                    <input name="tuyendung_tieude" value="" id="tuyendung_tieude" required="" type="text" class="form-control" maxlength="100" placeholder="VD: Nhân viên kinh doanh ...">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="required">Cấp bậc</label>
                                    <select class="transition-03 form-control vieclam-select2 select2 " name="tuyendung_capbac" required="" tabindex="-1" aria-hidden="true">
                                        <option value="">
                                        	Chọn cấp bậc
                                        </option>
                                        @foreach($all_capbac as $key => $capbac)
										                                            <option value="{{$capbac->cbtd_ten}}">
												{{$capbac->cbtd_ten}}                                           </option>
										@endforeach
											                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="required">Loại hình công việc</label>
                                    <select class="transition-03 form-control vieclam-select2 select2 " name="tuyendung_loai" required=""  tabindex="-1" aria-hidden="true">
                                        <option value="">
                                        	Loại hình công việc
                                        </option>
                                        @foreach($all_lhcv as $key => $lhcv)
										                                            <option value="{{$lhcv->lhcv_ten}}">
												{{$lhcv->lhcv_ten}}                                            </option>
										@endforeach
											                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="required">Mức lương</label>
                                    <select class="transition-03 form-control vieclam-select2 select2 " name="tuyendung_mucluong" required=""  tabindex="-1" aria-hidden="true">
                                        <option value="">
                                        	Chọn mức lương
                                        </option>
                                        @foreach($all_lmm as $key => $lmm)
										                                            <option value="{{$lmm->lmm_ten}}">
												{{$lmm->lmm_ten}}                                            </option>
										@endforeach             
											                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="required">
                                        Địa điểm làm việc
                                        
                                    </label>
                                    <select class="transition-03 form-control vieclam-select2 select2 " name="tuyendung_diadiem" required="" tabindex="-1" aria-hidden="true">
                                        <option value="">
                                        	Chọn địa điểm làm việc
                                        </option>
                                        @foreach($all_diadiem as $key => $diadiem)
										                                            <option value="{{$diadiem->diadiem_ten}}">
												{{$diadiem->diadiem_ten}}                                            </option>
										@endforeach
											                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="required">
                                        Ngành nghề
                                        <!-- <small>
                                            (Giới hạn <b class="text-dark">3</b> ngành nghề)
                                        </small> -->
                                    </label>
                                    <select class="transition-03 form-control vieclam-select2 select2"  name="tuyendung_nganhnghe" required="" tabindex="-1" aria-hidden="true">
                                        <option value="">
                                        	Chọn ngành nghề
                                        </option>
                                        @foreach($all_nn as $key => $nn)
										                                            <option value="{{$nn->nntd_ten}}">
												{{$nn->nntd_ten}}                                            </option>
										@endforeach
											                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="required">Số lượng</label>
                                    <div class="input-group soLuongGroup">
                                        
                                        <input type="number" min="1" class="form-control hideArrow inputSoLuong" value="1" name="tuyendung_soluong">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="required">
                                        Hạn nộp hồ sơ
                                        
                                    </label>
                                    <input name="tuyendung_hannop" type="date" class="form-control"  required="">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-0">
                                    <label class="required">
                                        Mô tả công việc
                                        <small>
                                            (Giới hạn <b class=" text-dark">2.000</b> ký tự)
                                        </small>
                                    </label>
                                    <textarea class="form-control" name="tuyendung_mota" rows="6" required="" maxlength="2000" minlength="20" placeholder="Mô tả chi tiết công việc để ứng viên hiểu rõ về yêu cầu của công ty với vị trí này. VD:
- Kiểm tra các order trước khi thanh toán, trực tiếp thực hiện quá trình thanh toán.
- Các công việc khác theo yêu cầu của quản lý."></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-ntd overflow-hidden">
                    <div class="card-header py-3 bg-white">
                        <div class="card-title text-uppercase blue-color h6 fw-600 mb-0">
                            Yêu cầu công việc
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Kinh nghiệm</label>
                                    <select class="transition-03 form-control vieclam-select2 select2 "name="tuyendung_kinhnghiem" tabindex="-1" aria-hidden="true">
                                    	<option value="0">
												Không yêu cầu                                            </option>
												@foreach($all_kn as $key => $kn)
										                                            <option value="{{$kn->kn_ten}}">
												{{$kn->kn_ten}}                                            </option>
											    @endforeach
											                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Bằng cấp</label>
                                    <select class="transition-03 form-control vieclam-select2 select2" name="tuyendung_trinhdo" tabindex="-1" aria-hidden="true" >
                                    	<option value="0">
												Không yêu cầu                                            </option>
												@foreach($all_tdhv as $key => $tdhv)
										                                            <option value="{{$tdhv->tdhv_ten}}">
												{{$tdhv->tdhv_ten}}                                           </option>
											    @endforeach
											                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Giới tính</label>
                                    <select class="transition-03 form-control vieclam-select2 select2" name="tuyendung_gioitinh" tabindex="-1" aria-hidden="true">
                                    	
										                                            <option value="-1">
												Không yêu cầu                                            </option>
											                                            <option value="1">
												Nam                                            </option>
											                                            <option value="0">
												Nữ                                            </option>
											                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-0">
                                    <label class="required">
                                        Yêu cầu tuyển dụng
                                        <small>(Giới hạn <b class="text-dark">1.000</b> ký tự)</small>
                                    </label>
                                    <textarea class="form-control" name="tuyendung_yeucau" rows="6" required="" maxlength="1000" minlength="20" placeholder="- Số lượng: 02 (Nam/Nữ).
- Thời gian làm việc 8 tiếng/ngày.
- Giao tiếp tiếng Anh cơ bản."></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-ntd overflow-hidden">
                    <div class="card-header py-3 bg-white">
                        <div class="card-title text-uppercase blue-color h6 fw-600 mb-0">
                            Chế độ phúc lợi
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group active">
                                    <div class="overflowHeight">
                                        <div class="row">
											                                                <div class="col-md-4">
                                                    <div class="checkbox mb-2">
                                                        <label role="button">
                                                            <input type="checkbox"  value="1" role="button" name="quyenloi_baohiem">
                                                            <i class="fal fa-first-aid ml-1"></i>
															Chế độ bảo hiểm                                                        </label>
                                                    </div>
                                                </div>
												                                                <div class="col-md-4">
                                                    <div class="checkbox mb-2">
                                                        <label role="button">
                                                            <input type="checkbox" value="1" role="button" name="quyenloi_nghiphep">
                                                            <i class="fal fa-glass-cheers ml-1"></i>
															Nghỉ phép năm                                                        </label>
                                                    </div>
                                                </div>
												                                                <div class="col-md-4">
                                                    <div class="checkbox mb-2">
                                                        <label role="button">
                                                            <input type="checkbox" value="1" role="button" name="quyenloi_dongphuc">
                                                            <i class="fal fa-tshirt ml-1"></i>
															Đồng phục                                                        </label>
                                                    </div>
                                                </div>
												                                                <div class="col-md-4">
                                                    <div class="checkbox mb-2">
                                                        <label role="button">
                                                            <input type="checkbox" value="1" role="button" name="quyenloi_tangluong">
                                                            <i class="fal fa-chart-line ml-1"></i>
															Tăng lương                                                        </label>
                                                    </div>
                                                </div>
												                                                <div class="col-md-4">
                                                    <div class="checkbox mb-2">
                                                        <label role="button">
                                                            <input type="checkbox" value="1" role="button" name="quyenloi_thuong">
                                                            <i class="fal fa-usd-circle ml-1"></i>
															Chế độ thưởng                                                        </label>
                                                    </div>
                                                </div>
												                                                <div class="col-md-4">
                                                    <div class="checkbox mb-2">
                                                        <label role="button">
                                                            <input type="checkbox"  value="1" role="button" name="quyenloi_daotao">
                                                            <i class="fal fa-graduation-cap ml-1"></i>
															Đào tạo                                                        </label>
                                                    </div>
                                                </div>
												                                                <div class="col-md-4">
                                                    <div class="checkbox mb-2">
                                                        <label role="button">
                                                            <input type="checkbox" value="1" role="button" name="quyenloi_phucap">
                                                            <i class="fal fa-money-bill-alt ml-1"></i>
															Phụ cấp                                                        </label>
                                                    </div>
                                                </div>
												                                                <div class="col-md-4">
                                                    <div class="checkbox mb-2">
                                                        <label role="button">
                                                            <input type="checkbox" value="1" role="button" name="quyenloi_laptop">
                                                            <i class="fal fa-laptop ml-1"></i>
															Laptop                                                        </label>
                                                    </div>
                                                </div>
												                                                <div class="col-md-4">
                                                    <div class="checkbox mb-2">
                                                        <label role="button">
                                                            <input type="checkbox" value="1" role="button" name="quyenloi_ctphi">
                                                            <i class="fal fa-credit-card ml-1"></i>
															Công tác phí                                                        </label>
                                                    </div>
                                                </div>
												                                                <div class="col-md-4">
                                                    <div class="checkbox mb-2">
                                                        <label role="button">
                                                            <input type="checkbox" value="1" role="button" name="quyenloi_dulich">
                                                            <i class="fal fa-plane ml-1"></i>
															Du lịch                                                        </label>
                                                    </div>
                                                </div>
												                                                <div class="col-md-4">
                                                    <div class="checkbox mb-2">
                                                        <label role="button">
                                                            <input type="checkbox" value="1" role="button" name="quyenloi_phucaptn">
                                                            <i class="fal fa-money-bill-wave ml-1"></i>
															Phụ cấp thâm niên                                                        </label>
                                                    </div>
                                                </div>
												                                                <div class="col-md-4">
                                                    <div class="checkbox mb-2">
                                                        <label role="button">
                                                            <input type="checkbox" value="1" role="button" name="quyenloi_chamsocsk">
                                                            <i class="fal fa-hand-holding-heart ml-1"></i>
															Chăm sóc sức khoẻ                                                        </label>
                                                    </div>
                                                </div>
												                                                <div class="col-md-4">
                                                    <div class="checkbox mb-2">
                                                        <label role="button">
                                                            <input type="checkbox" value="1" role="button" name="quyenloi_xe">
                                                            <i class="fal fa-bus-school ml-1"></i>
															Xe đưa đón                                                        </label>
                                                    </div>
                                                </div>
												                                                <div class="col-md-4">
                                                    <div class="checkbox mb-2">
                                                        <label role="button">
                                                            <input type="checkbox" value="1" role="button" name="quyenloi_clb">
                                                            <i class="fal fa-heartbeat ml-1"></i>
															CLB thể thao                                                        </label>
                                                    </div>
                                                </div>
												                                                <div class="col-md-4">
                                                    <div class="checkbox mb-2">
                                                        <label role="button">
                                                            <input type="checkbox" value="1" role="button" name="quyenloi_dlnuocngoai">
                                                            <i class="fal fa-plane-departure ml-1"></i>
															Du lịch nước ngoài                                                        </label>
                                                    </div>
                                                </div>
												                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-0">
									<textarea class="form-control" name="tuyendung_quyenloi" rows="6" maxlength="1000" minlength="20" placeholder="- Mức lương: không dưới 10 triệu đồng/tháng
- BHXH, BHYT đầy đủ
- Được hưởng % hoa hồng dự án"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-ntd overflow-hidden">
                    <div class="card-header py-3 bg-white">
                        <div class="card-title text-uppercase blue-color h6 fw-600 mb-0">
                            Yêu cầu hồ sơ
                            <small>
                                (Giới hạn <b>1.000</b> ký tự)
                            </small>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group mb-0">
									<textarea class="form-control" name="tuyendung_cachnophs" rows="6" required="" maxlength="1000" minlength="20" placeholder="- Đơn xin việc.
- Sơ yếu lý lịch.
- Hộ khẩu, chứng minh nhân dân và giấy khám sức khỏe.
- Các bằng cấp có liên quan."></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-ntd overflow-hidden">
                    <div class="card-header py-3 bg-white">
                        <div class="card-title text-uppercase blue-color h6 fw-600 mb-0">
                            Cách nộp hồ sơ
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                   <label role="button">
                                        <input type="checkbox" role="button" checked="" name="tuyendung_nophs_online" value="checked">
                                        Ứng tuyển online qua email:
                                    </label>
                                    <div class="input-group">
                                    	
                                        
                                        	@foreach($all_taikhoanntd as $key => $taikhoan)
                                        	@if($taikhoan->ntd_id == $ntd_id)
											<input name="tuyendung_email" class="form-control" type="text" required="" maxlength="20" value="{{$taikhoan->ntd_email}}">
                                        <!-- <span class="input-group-append">
                                            <button type="button" class="btn btn-primary btn-sm btnCallAddMail" id="callModalAddMail">
                                                <i class="fal fa-plus"></i>
                                            </button>
                                        </span> -->
                                    </div>
                                    <small class="mt-2 d-inline-block text-gray">
                                        <i>* Hệ thống sẽ gửi hồ sơ ứng tuyển đến email này, thông tin email sẽ được
                                            bảo mật</i>
                                    </small>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label role="button">
                                        <input role="button" type="checkbox" checked="" name="lienhesdt" value="checked">
                                        Ứng viên có thể liên hệ qua hotline:
                                    </label>
                                    <input name="tuyendung_sdt" class="form-control" type="text" required="" maxlength="20" value="{{$taikhoan->ntd_sdt}}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-1">
                                    <label role="button">
                                        <input role="button" type="checkbox" checked="" name="tuyendung_nophs_tructiep" value="checked">
                                        Nộp trực tiếp tại văn phòng:
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="required">
                                        Người liên hệ
                                    </label>
                                    <input name="tuyendung_tenlienhe" class="form-control" type="text" required="" maxlength="100" placeholder="VD: Phòng nhân sự">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="required">
                                        Đia chỉ liên hệ
                                    </label>
                                    <input type="text" value="{{$taikhoan->ntd_diachi}}" name="tuyendung_diachi" class="form-control">
                                </div>
                            </div>
							                            <div class="col-md-12">
                                
                            </div>
                            <input type="hidden" value="1" name="tuyendung_status" class="form-control">
                            @endif
                            				@endforeach
                            <div class="col-md-12 mt-4">
                                <div class="form-group mb-0 text-center">
                                    <button type="submit" id="btnDangTin" class="btn button-theme button-blue px-3 py-2 rounded-0 size-095rem fw-500 g-recaptcha">
                                        Đăng tuyển dụng
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection