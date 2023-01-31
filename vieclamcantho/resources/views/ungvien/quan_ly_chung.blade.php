@extends('ungvien.trang_quan_ly')
@section('content1')
@foreach($detail_uv as $key => $detail)

    <div class="main-content">
<div class="row row-bs4 row-same-height">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="margin-bottom: 15px">
            <div class="manage-cv wrapper-manage">
                <div class="manage-cv_head wrapper-manage_head">
                    <div class="title">
                        Hồ sơ online
                        <a href="{{URL::to('/thong-tin-ca-nhan/'.$detail->taikhoan_id)}}" class="pull-right" style="font-size: 14px; font-weight: normal; color: blue">
                            <i class="fal fa-user-edit"></i> Cập nhật hồ sơ
                        </a>
                    </div>
                    <div class="text">
                        Chọn mẫu giao diện cho hồ sơ của bạn
                    </div>
                </div>
                @if($detail->hoso_cv_code != NULL)
                @foreach($all_maucv as $key => $maucv)
                @if($detail->hoso_cv_code  == $maucv->maucv_code)
                <div class="manage-cv_body wrapper-manage_body">
                    <div class="manage-cv_image">
                        <a href="{{URL::to('/use-cv/'.$maucv->maucv_code.'/'.$detail->taikhoan_id)}}">
                        <img class="image" src="{{URL::to('/public/upload/cv/'.$maucv->maucv_img)}}" alt="{{$maucv->maucv_ten}}">
                        </a>
                    </div>
                    <div class="manage-cv_content wrapper-manage_content">
                        <div class="title">
                            {{$maucv->maucv_ten}}                        </div>
                        <a href="javascript:;" class="button">
                            Đang chọn
                        </a>
                        <div class="desc">
                            {{$maucv->maucv_des}}                        </div>
                        <a href="{{URL::to('/tao-cv')}}" class="btn btn-primary link">
                            Xem các mẫu CV khác
                        </a>
                    </div>
                </div>
                @endif
                @endforeach
                @else
                <h3>Bạn chưa có CV nào!</h3>
                @endif
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="manage-files wrapper-manage" id="box-hs-dk">
                <div class="manage-files_head wrapper-manage_head">
                    <div class="title">
                        Hồ sơ đính kèm
                    </div>
                    <div class="text">
                        Ngoài hồ sơ online, bạn có thể tạo thêm hồ sơ đính kèm (Tối đa 3 hồ
                        sơ)
                    </div>
                </div>
                <div class="manage-files_body wrapper-manage_body">
                    <div class="manage-files_list">
                                                    <div class="item no-item">
                                <p>Chưa có file hồ sơ đính kèm</p>
                            </div>
                                            </div>
                </div>
                <div class="manage-files_footer " id="btn-add-hs">
                    <a href="javascript:void(0)" class="btn btn-primary call-modalCV" data-type="1">
                        Thêm hồ sơ <i class="ml5 fal fa-plus"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@endforeach
@endsection