@extends('ungvien.trang_quan_ly')
@section('content1')
@foreach($detail_uv as $key => $detail)
<link rel="stylesheet"
    href="https://vieclamcantho.com.vn/view/ungvien/assets/styles/bundle.css?ver=311">
<link rel="stylesheet" type="text/css"
    href="/view/ungvien/assets/vendor/dropzone/dropzone.css"/>
<link rel="stylesheet" type="text/css"
    href="https://vieclamcantho.com.vn/view/ungvien/hoso/css/capnhathoso.css?ver=311"/>
<script src="https://kit.fontawesome.com/c3d7e64cbd.js" crossorigin="anonymous"></script>
<script src="https://vieclamcantho.com.vn/view/ungvien/assets/vendor/jquery/dist/jquery.js"></script>
<script src="https://vieclamcantho.com.vn/view/public/assets/lib/sweetalert2/sweetalert2.min.js"></script>
<script src="https://vieclamcantho.com.vn/view/public/assets/js/function.js?ver=317"></script>
<!-- main area -->
<div class="main-content">
    <!--  <div class="alert alert-danger">
        <button class="btn btn-bitbucket mr10" id="btnXacThucSDT" type="button">
            XÁC THỰC SỐ ĐIỆN THOẠI
        </button>
        <i>* Tài khoản đã xác thực số điện thoại sẽ được đánh dấu ĐÃ XÁC THỰC</i>
        </div>   -->  
    <div class="panel">
        <div class="panel-body">
            <div class="lineWizard"></div>
            <ul class="wizard-nav">
                <li >
                    <a href="{{URL::to('/thong-tin-ca-nhan/'.$detail->taikhoan_id)}}" class="info">
                        <div>
                            <i class="fa fa-user"></i>
                        </div>
                        <p>Thông tin cá nhân</p>
                        
                    </a>
                </li>
                <li>
                    <a href="{{URL::to('/thong-tin-ho-so/'.$detail->taikhoan_id)}}" data-type="hoso" class="hoso">
                        <div>
                            <i class="fa fa-info-circle"></i>
                        </div>
                        <p>Thông tin hồ sơ</p>
                        
                    </a>
                </li>
                <li>
                    <a data-type="bangcap" class="bangcap" href="{{URL::to('/hocvan-bangcap/'.$detail->taikhoan_id)}}">
                        <div>
                            <i class="fa fa-graduation-cap"></i>
                        </div>
                        <p>Học vấn bằng cấp</p>
                        
                    </a>
                </li>
                <li>
                    <a data-type="kinhnghiem" class="kinhnghiem" href="{{URL::to('/kinhnghiem-lamviec/'.$detail->taikhoan_id)}}">
                        <div>
                            <i class="fa fa-calendar-day"></i>
                        </div>
                        <p>Kinh nghiệm làm việc</p>
                    </a>
                </li>
                <li class="active">
                    <a data-type="kynang" class="kynang kynangchuyenmon" href="{{URL::to('/kynang/'.$detail->taikhoan_id)}}">
                        <div>
                            <i class="fa fa-bolt"></i>
                        </div>
                        <p>Kỹ năng</p>

                    </a>
                </li>
                <li>
                    <a data-type="tinhoc" class="tinhoc ngoaingu" href="{{URL::to('/tinhoc-ngoaingu/'.$detail->taikhoan_id)}}">
                        <div>
                            <i class="fa fa-computer"></i>
                        </div>
                        <p>Tin học - Ngoại ngữ</p>
                    </a>
                </li>
            </ul>
            <!--  <div class="row">
                <div class="col-md-3 col-xs-6">
                    <div class="checkbox checbox-switch switch-primary">
                        <label>
                            <input id="ungvien_hienthihs" type="checkbox"
                                   name="" checked/>
                            <span></span>
                        </label>
                        <span style="font-weight: 500; color: #707070; font-size: 14px">Cho phép nhà tuyển dụng tìm kiếm</span>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="checkbox">
                        <label id="hidden_info">
                            <i class="fa fa-eye-slash"></i>
                            <span style="font-weight: 500; color: #707070; font-size: 14px">Ẩn thông tin</span>
                        </label>
                    </div>
                </div>
                                    <div class="col-md-3 col-xs-6"></div>
                    <div class="col-md-3 col-xs-6 vieclam03 hidden">
                        <div class="vieclamBody">
                            <div class="text-center px-3 my-2">
                                <p class="mb-0 mt-3">
                                    Xem <span id="num-cvht">3</span> nội dung cần làm</p>
                                <a href="javascript:void(0)"
                                   class="expanded-button expanded-divider">
                                    <span><i class="fas fa-angle-down"></i></span>
                                </a>
                            </div>
                            <ul class="content list-unstyled mb-0">
                                <li style="display: block;" class="hidden list-hths" data-key="kynangchuyenmon">Kỹ năng chuyên môn</li><li style="display: block;" class="hidden list-hths" data-key="ungvien_image">Avatar</li><li style="display: block;" class="hidden list-hths" data-key="ungvien_xacthucsdt">Xác thực SĐT</li>                            </ul>
                        </div>
                    </div>
                            </div> -->
        </div>
    </div>
    <!--  <div id="panelContent">
        <div class="panel">
            <div class="panel-body">
                <div class="lds-ellipsis" style="margin: 0 auto">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
        </div> -->

<!-- /main area -->
<div id="panelContent"><div class="panel">
    
        <div class="row">
            <div class="col-sm-12">
                <div class="panel-heading">
                    <?php
                $message = Session::get('message');
                if($message){
                echo '<span class="text-success">'.$message.'</span>';
                 Session::put('message',null);
                }
            ?><br>
                    <span>Kỹ năng mềm</span>
                </div>
                <div class="col-sm-12">
                <form class="form-horizontal" id="frmHD" action="{{URL::to('/add-kynang/'.$detail->taikhoan_id)}}" method="post">
                    @csrf
                @foreach($all_kynang as $key => $kynang)
                @if($detail->taikhoan_id == $kynang->knmem_id_uv)
                <div class="col-md-4 col-sm-4 col-xs-12 mb20">
               <label class="control-label"><span>*</span> Giải quyết vấn đề</label>
                    <div class="">
                        <select class="form-control" name="ungvien_giaiquyetvande" required="">
                             <option value="">
                                ----Chọn----
                            </option>
                            
                            @foreach($loai_kynang as $key => $loaikn)
                            @if($kynang->knmem_id_uv == $detail->taikhoan_id and $kynang->knmem_giaiquyetvande == $loaikn->loaikynang_loai)
                            <option value="{{$loaikn->loaikynang_loai}}" selected>
                                {{$loaikn->loaikynang_loai}}                                
                            </option>
                            @else
                            <option value="{{$loaikn->loaikynang_loai}}" >
                                {{$loaikn->loaikynang_loai}}                                
                            </option>
                            @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 mb20">
                    <label class="control-label"><span>*</span> Làm việc nhóm</label>
                    <div class="">
                       
                       
                        <select class="form-control" name="ungvien_lamviecnhom" required="">
                             <option value="">
                                ----Chọn----
                            </option>
                            
                            @foreach($loai_kynang as $key => $loaikn)
                            @if($kynang->knmem_id_uv == $detail->taikhoan_id and $kynang->knmem_lamviecnhom == $loaikn->loaikynang_loai)
                            <option value="{{$loaikn->loaikynang_loai}}" selected>
                                {{$loaikn->loaikynang_loai}}                                
                            </option>
                            @else
                            <option value="{{$loaikn->loaikynang_loai}}" >
                                {{$loaikn->loaikynang_loai}}                                
                            </option>
                            @endif
                            @endforeach
                        </select>
            </div>

        </div>
        <div class="col-md-4 col-sm-4 col-xs-12 mb20">
                    <label class="control-label"><span>*</span> Tư duy sáng tạo</label>
                    <div class="">
                        <select class="form-control" name="ungvien_tuduysangtao" required="">
                            <option value="">
                                ----Chọn----
                            </option>
                            
                            @foreach($loai_kynang as $key => $loaikn)
                            @if($kynang->knmem_id_uv == $detail->taikhoan_id and $kynang->knmem_tuduysangtao == $loaikn->loaikynang_loai)
                            <option value="{{$loaikn->loaikynang_loai}}" selected>
                                {{$loaikn->loaikynang_loai}}                                
                            </option>
                            @else
                            <option value="{{$loaikn->loaikynang_loai}}" >
                                {{$loaikn->loaikynang_loai}}                                
                            </option>
                            @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 mb20">
                    <label class="control-label"><span>*</span> Học và tự học</label>
                    <div class="">
                        <select class="form-control" name="ungvien_hocvatuhoc" required="">
                             <option value="">
                                ----Chọn----
                            </option>
                            
                            @foreach($loai_kynang as $key => $loaikn)
                            @if($kynang->knmem_id_uv == $detail->taikhoan_id and $kynang->knmem_hocvatuhoc == $loaikn->loaikynang_loai)
                            <option value="{{$loaikn->loaikynang_loai}}" selected>
                                {{$loaikn->loaikynang_loai}}                                
                            </option>
                            @else
                            <option value="{{$loaikn->loaikynang_loai}}" >
                                {{$loaikn->loaikynang_loai}}                                
                            </option>
                            @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 mb20">
                    <label class="control-label"><span>*</span> Thuyết trình</label>
                    <div class="">
                        <select class="form-control" name="ungvien_thuyettrinh" required="">
                            <option value="">
                                ----Chọn----
                            </option>
                            
                            @foreach($loai_kynang as $key => $loaikn)
                            @if($kynang->knmem_id_uv == $detail->taikhoan_id and $kynang->knmem_thuyettrinh == $loaikn->loaikynang_loai)
                            <option value="{{$loaikn->loaikynang_loai}}" selected>
                                {{$loaikn->loaikynang_loai}}                                
                            </option>
                            @else
                            <option value="{{$loaikn->loaikynang_loai}}" >
                                {{$loaikn->loaikynang_loai}}                                
                            </option>
                            @endif
                            @endforeach
                           
                        </select>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 mb20">
                    <label class="control-label"><span>*</span> Giao tiếp và tạo lập quan hệ</label>
                    <div class="">
                        <select class="form-control" name="ungvien_giaotiep" required="">
                           <option value="">
                                ----Chọn----
                            </option>
                            
                            @foreach($loai_kynang as $key => $loaikn)
                            @if($kynang->knmem_id_uv == $detail->taikhoan_id and $kynang->knmem_giaotiep == $loaikn->loaikynang_loai)
                            <option value="{{$loaikn->loaikynang_loai}}" selected>
                                {{$loaikn->loaikynang_loai}}                                
                            </option>
                            @else
                            <option value="{{$loaikn->loaikynang_loai}}" >
                                {{$loaikn->loaikynang_loai}}                                
                            </option>
                            @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                
        <div class="row">
            <div class="col-sm-12">
                <div class="panel-heading">
                    <?php
                $message1 = Session::get('message1');
                if($message1){
                echo '<span class="text-success">'.$message1.'</span>';
                 Session::put('message1',null);
                }
            ?><br>
                    <span>Kỹ năng chuyên môn</span>
                </div>
                <div class="panel-body" id="kncm">
                    @foreach($kynang_chuyenmon as $key => $kncm)
                    @if($kncm->kncm_id_uv == $detail->taikhoan_id)
                    <div class="col-md-4 col-sm-4 col-xs-12 mb20">
                    <label class="control-label"><span>*</span> {{$kncm->kncm_ten}}</label>

                    <div class="">
                        <select class="form-control" name="ungvien_giaotiep" required="">
                           <option value="">
                                ----Chọn----
                            </option>
                            
                            @foreach($loai_kynang as $key => $loaikn)
                            @if($kncm->kncm_id_uv == $detail->taikhoan_id and $kncm->kncm_loai == $loaikn->loaikynang_loai)
                            <option value="{{$loaikn->loaikynang_loai}}" selected>
                                {{$loaikn->loaikynang_loai}}                                
                            </option>
                            @else
                            <option value="{{$loaikn->loaikynang_loai}}" >
                                {{$loaikn->loaikynang_loai}}                                
                            </option>
                            @endif
                            @endforeach
                        </select>
                        <a class="btn btn-danger btn-block btn-xs btnDelTrinhDo" href="{{URL::to('/xoa-kncm/'.$detail->taikhoan_id.'/'.$kncm->kncm_id)}}" title="Xóa thông tin" >
                                        <i class="fa fa-trash-alt"></i>
                                        </a>
                    </div>
                </div>
                    @endif
                    @endforeach
                    <div class="col-sm-12 mb10">
                        <a href="{{URL::to('/them-kynang-chuyenmon/'.$detail->taikhoan_id)}}" id="addMoreSkill"><i class="fas fa-plus-circle"></i>
                            Thêm kỹ năng
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="panel-heading">
                    <span>Hoạt động</span>
                </div>
                @if($kynang->knmem_hoatdong != NULL)
                <div class="panel-body">
                    <textarea class="form-control" maxlength="1000" placeholder="Tối đa 1000 ký tự" rows="4" name="hoatdong">{{$kynang->knmem_hoatdong}}</textarea>
                </div>
                @else
                <div class="panel-body">
                    <textarea class="form-control" maxlength="1000" placeholder="Tối đa 1000 ký tự" rows="4" name="hoatdong"></textarea>
                </div>
                @endif
            </div>
            <div class="col-sm-6">
                <div class="panel-heading">
                    <span>Thành tích</span>
                </div>
                 @if($kynang->knmem_thanhtich != NULL)
                <div class="panel-body">
                    <textarea class="form-control" maxlength="1000" placeholder="Tối đa 1000 ký tự" rows="4" name="thanhtich">{{$kynang->knmem_thanhtich}}</textarea>
                </div>
                @else
                <div class="panel-body">
                    <textarea class="form-control" maxlength="1000" placeholder="Tối đa 1000 ký tự" rows="4" name="thanhtich"></textarea>
                </div>
                @endif
            </div>
        </div>
        @endif
        @endforeach
        <div class="row">
            <div class="col-sm-12 text-center">
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btnSub" style="width: 150px">
                        <i class="far fa-check-circle"></i> Cập nhật
                    </button>
                </div>
            </div>
        </div>

    </form>
</div>
<!-- <script>
    const limitSkill = 6;
    $('#frmHD .checkbo').checkBo();
    $('#frmHD').submit(function () {
        let checkAtleast = false;
        let textEmpty = false;
        $('#divKyNang input[type="checkbox"]').each(function () {
            if ($(this).is(":checked")) {
                checkAtleast = true;
            }
        });
        $("#kncm .row-kncm .col-kncm").each(function () {
            let elm = $(this);
            let checkbox = elm.find('input[type="checkbox"]');
            let textbox = elm.find('input[type="text"]').val();
            if (checkbox.is(":checked")) {
                checkAtleast = true;
                if (textbox.replace(/\s/g, '') != '') {
                    textEmpty = false;
                } else {
                    textEmpty = true;
                }
            }
        });
        if (!checkAtleast) {
            call_noti('Vui lòng chọn ít nhất một kỹ năng', 'warning');
            return false;
        }

        if (textEmpty) {
            alert('Vui nhập tên kỹ năng chuyên môn');
            return false;
        }

        let elm = $('#frmHD .btnSub');
        btnlinkload(elm);
        $.post(URL_ROOT + "ung-vien/taikhoan/updateHD", $(this).serializeArray(), function (r) {
            btnlinkthanhcong(elm, '<i class="far fa-check-circle"></i> Cập nhật');
            if (r.status == 1) {
                call_noti('Cập nhật thành công', 'success');
                updateDiem(r.diem);
                $('.wizard-nav a[data-type="kynang"]').trigger('click');
                $("html, body").animate({scrollTop: 0}, '150');
                $('.wizard-nav a[data-type="kynang"] .notYet').remove();
            } else
                call_noti(r.message, 'error');
        }, 'JSON');
        return false;
    });
    $('#divKyNang .rating span').click(function (e) {
        e.preventDefault();
        let value = $(this).attr('data-value');
        let divRating = $(this).parent();
        // xử lý check nếu checkbox chưa checked
        let labelChecbox = divRating.prev();
        let elmInputCheckbox = labelChecbox.find('input[type="checkbox"]');

        if (!elmInputCheckbox.is(':checked')) {
            elmInputCheckbox.prop('checked', true);
            labelChecbox.addClass('checked');

            if ($('#divKyNang input[type="checkbox"]:checked').length > limitSkill) {
                value = 0;
            }

            elmInputCheckbox.change();
        }
        divRating.find('span').removeClass('selected');
        divRating.prev().find('input[name="rating[]"]').val(value);

        divRating.find('span').each(function () {
            value2 = $(this).attr('data-value');
            if (value2 <= value) {
                $(this).addClass('selected');
            }
        });
    });

    $('#kncm').on("click", ".rating span", function (e) {
        value = $(this).attr('data-value');
        divRating = $(this).parent();
        // xử lý check nếu checkbox chưa checked
        labelChecbox = divRating.prev().prev();
        elmInputCheckbox = labelChecbox.find('input[type="checkbox"]');
        if (!elmInputCheckbox.is(':checked')) {
            elmInputCheckbox.prop('checked', true);
            labelChecbox.addClass('checked');
            elmInputCheckbox.change();
        }
        divRating.find('span').removeClass('selected');
        divRating.prev().prev().find('input[name="kynangchuyenmon[rating][]"]').val(value);
        divRating.find('span').each(function () {
            value2 = $(this).attr('data-value');
            if (value2 <= value) {
                $(this).addClass('selected');
            }
        });
        e.preventDefault();
    });

    $('#divKyNang input[type="checkbox"]').change(function () {
        let divStar = $(this).closest('span').next();
        let divRating = $(this).closest('label').next();
        let divLable = $(this).closest('label.cb-checkbox');
        if ($('#divKyNang input[type="checkbox"]:checked').length > limitSkill) {
            $(this).prop("checked", false);
            alert("Chọn tối đa " + limitSkill + " kỹ năng");
        }
        if ($(this).is(":checked")) {
            divStar.attr('name', 'rating[]');
            divStar.val(1);
            divRating.find('span').removeClass('selected');
            divRating.find('span').last().addClass('selected');
        } else {
            divLable.removeClass('checked');
            divStar.removeAttr('name');
            divRating.find('span').removeClass('selected');
        }
    });

    $('#kncm').on('change', 'input[type="checkbox"]', function () {
        let divStar = $(this).closest('span').next();
        let labelChecbox = $(this).closest('label').next();
        let divRating = labelChecbox.next();
        if ($(this).is(":checked")) {
            divStar.attr('name', 'kynangchuyenmon[rating][]');
            divStar.val(1);
            divRating.find('span').removeClass('selected');
            divRating.find('span').last().addClass('selected');
            labelChecbox.prev().addClass('checked');
            labelChecbox.attr('name', 'kynangchuyenmon[text][]');
        } else {
            labelChecbox.prev().removeClass('checked');
            divStar.removeAttr('name');
            divRating.find('span').removeClass('selected');
            labelChecbox.removeAttr('name');
            labelChecbox.prev().find('.num-rating').removeAttr('name');
        }
    });

    $("#addMoreSkill").click(function () {
        let html = `<div class="col-md-4 col-sm-6 col-kncm mb5">
                       <div class="checkbox skill-input">
                           <label class="cb-checkbox cb-sm checked">
                               <span class="cb-inner">
                                    <i>
                                        <input type="checkbox" value="1" name="kynangchuyenmon[check][]" checked>
                                    </i>
                               </span>
                               <input type="hidden" name="kynangchuyenmon[rating][]" value="3" class="num-rating">
                           </label>
                           <input type="text" class="form-control" name='kynangchuyenmon[text][]' minlength="5">
                           <div class="rating">
                              <span data-value="5">
                              ☆
                              </span>
                              <span data-value="4">
                              ☆
                              </span>
                              <span data-value="3" class="selected">
                              ☆
                              </span>
                              <span data-value="2" class="selected">
                              ☆
                              </span>
                              <span data-value="1" class="selected">
                              ☆
                              </span>
                           </div>
                       </div>
                    </div>`;
        // if ($("#kncm .row-kncm .col-kncm").length > 0) {
        //     let numVal = $("#kncm .row-kncm .col-kncm").find('input[name="kynangchuyenmon[rating][]"]').last().val();
        //     let textVal = $("#kncm .row-kncm .col-kncm").find('input[name="kynangchuyenmon[text][]"]').last().val();
        //     if (textVal != '' && numVal > 0) {
        //         $("#kncm .row-kncm").append(html);
        //     } else {
        //         alert('Vui nhập tên kỹ năng và tick chọn');
        //     }
        // } else {
        $("#kncm .row-kncm").append(html);
        // }
    });
</script> --></div>
    </div>
    </div>
</div>
@endforeach
@endsection