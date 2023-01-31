@extends('nhatuyendung.trang_quan_ly')
@section('content2')
<?php
                            
                                        $ntd_id = Session::get('ntd_id');
                                        $today = date("Y-m-d");
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
                <a class="nav-link active" href="{{URL::to('/nha-tuyen-dung/quan-ly-tin')}}" role="tab">
                Tuyển dụng
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{URL::to('/nha-tuyen-dung/dang-tin')}}" role="tab">
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
    <div class="row">
        <div class="col-md-12">
            <div class="table-employer" id="table-employer">
                <div class="template-card_tab bg-white">
                    <div class="card card-table">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <div class="card-title">
                                        Danh sách tin đăng
                                    </div>
                                    <?php
                    $message = Session::get('message');
                    if($message){
                    echo '<span class="text-success">'.$message.'</span>';
                     Session::put('message',null);
                    }
                    ?>
                                </div>
                                <div class="col-md-4">
                                    <div class="card-search">
                                        <input type="text" class="form-control" id="txt-search" placeholder="Tìm kiếm...">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-theme">
                                <div class="table-loading" style="display: none; height: 48px;">
                                    <div class="table-loading-bg">
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                    </div>
                                </div>
                                <table class="table-style" id="tbl-custom">
                                    <thead>
                                        <tr>
                                            <th>
                                                Vị trí tuyển dụng
                                            </th>
                                            <th >
                                                Trạng thái
                                            </th>
                                            <th>
                                                Hạn nộp
                                            </th>
                                            <th >
                                                Hiển thị
                                                </th>
                                            <th >
                                                Công cụ
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	
                                    	@foreach($all_dangtin as $key => $dangtin)
                                    	@if($ntd_id == $dangtin->dangtin_id_ntd)
                                        <tr>
                                            <td>{{$dangtin->dangtin_chucdanh}}</td>
                                            @if($dangtin->dangtin_status == 0)
                                            <td>Tuyển dụng đã ẩn</td>
                                            @elseif (strtotime($today) <= strtotime($dangtin->dangtin_hannop_hs))
                                            <td>Tuyển dụng còn thời hạn</td>
                                            
                                            @else
                                            <td>Tuyển dụng quá hạn</td>
                                            @endif
                                            <td>{{date("d-m-Y", strtotime($dangtin->dangtin_hannop_hs))}}</td>
                                            <td>
                                                <?php
					                            if($dangtin->dangtin_status == 0){
					                            ?>
					                        <a href="{{URL::to('/active-tintuyendung/'.$dangtin->dangtin_id)}}"><span class="fal fa-toggle-off" style='font-size:28px'></span></a>
					                        <?php
					                            }else{
					                            ?>
					                        <a href="{{URL::to('/unactive-tintuyendung/'.$dangtin->dangtin_id)}}"><span class="fal fa-toggle-on" style='font-size:28px'></span></a>
					                        <?php
					                            }
					                            ?>  
                                            </td>
                                            <td ><a style="width: 35px; margin: 1px;" class="btn btn-sm btn-info" href="{{URL::to('/xem-tin-tuyen-dung/'.$dangtin->dangtin_id.'/'.$ntd_id)}}" data-toggle="tooltip" title="Xem tin tuyển dụng"><i class="fal fa-eye"></i></a><!-- <a style="width: 35px; margin: 1px;" class="btn btn-sm btn-success btnLamMoiTin" href="javascrit:void(0)" data-toggle="tooltip" title="" data-id="32552" data-original-title="Làm mới tin tuyển dụng"><i class="fas fa-sync"></i></a> --><a style="width: 35px; margin: 1px;" class="btn btn-sm btn-primary btnEdit" href="{{URL::to('/cap-nhat-tin-tuyen-dung/'.$dangtin->dangtin_id.'/'.$ntd_id)}}" data-toggle="tooltip" title="Cập nhật tin tuyển dụng"><i class="fal fa-edit"></i></a><a style="width: 35px; margin: 1px;" class="btn btn-sm btn-danger btnDelete" data-id="32552" href="{{URL::to('/delete-tin/'.$dangtin->dangtin_id)}}"  onclick="return confirm('Bạn chắc chắn muốn xóa không?')" data-toggle="tooltip" title="Xóa tin tuyển dụng"><i class="fal fa-trash-alt"></i></a></td>
                                        </tr>
                                        @endif
                                        @endforeach
                                    </tbody>
                                </table>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection