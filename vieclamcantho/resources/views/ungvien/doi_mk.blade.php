@extends('ungvien.trang_quan_ly')
@section('content1')
<div class="main-content">
    <div class="panel">
        <div class="panel-body">
<div class="panel mb25">
        <div class="panel-heading border">
            <?php
            $message = Session::get('message');
            if($message){
            echo '<span class="text-success">'.$message.'</span>';
             Session::put('message',null);
            }
            $message1 = Session::get('message1');
            if($message1){
            echo '<span class="text-danger">'.$message1.'</span>';
             Session::put('message1',null);
            }
            ?><br>
            <i class="icofont-ui-lock"></i> Thay đổi mật khẩu
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-5 col-sm-6 col-xs-12">
                    <?php
                            $taikhoan_id = Session::get('taikhoan_id');
                            ?>
                    <form  action="{{URL::to('/change-pass/'.$taikhoan_id)}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label class="control-label">Mật khẩu hiện tại</label>
                            <div>
                                <input placeholder="********" required="" type="password" class="form-control" id="password_old" name="password_old" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Mật khẩu mới</label>
                            <div class="input-group">
                                <input placeholder="********" required="" type="password" class="form-control" id="password" name="password_new" value="">
                                <span class="input-group-btn">
                                    <button class="btn btn-info btnViewPass" data-id="password" type="button">
                                        <i class="fal fa-eye" style="font-size: 16px"></i>
                                    </button>
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Nhập lại mật khẩu mới</label>
                            <div class="input-group">
                                <input placeholder="********" required="" type="password" class="form-control" id="confirm_password" value="">
                                <span class="input-group-btn">
                                    <button class="btn btn-info btnViewPass" data-id="confirm_password" type="button">
                                        <i class="fal fa-eye" style="font-size: 16px"></i>
                                    </button>
                                </span>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit"  class="btn btn-primary btn-md ">
                                <i class="fa fa-pencil"></i> Đổi mật khẩu
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<script src="https://vieclamcantho.com.vn/view/ungvien/taikhoan/js/changepass.js?ver=322"></script>
@endsection