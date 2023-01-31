@extends('admin_layout') 
@section('admin_content')
<div class="row">
<div class="col-lg-12">
    <section class="panel">
        <header class="panel-heading">
            Cập nhật mẫu cv
        </header>
        <div class="panel-body">
            <?php
                $message = Session::get('message');
                if($message){
                    echo '<span class="text-alert1">'.$message.'</span>';
                    Session::put('message',null);
                }
                ?>
            <div class="position-center">
                @foreach($edit_cv as $key => $cv)
                <form role="form" action="{{URL::to('/update-cv/'.$cv->maucv_id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1" required="">Tên mẫu cv</label>
                        <input type="text" name="cv_name" class="form-control" id="exampleInputEmail1" value="{{$cv->maucv_ten}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Hình ảnh</label>
                        <input type="file" name="cv_img" class="form-control" id="exampleInputEmail1" enctype="multipart/form-data" >
                        <img src="{{URL::to('public/upload/cv/'.$cv->maucv_img)}}" height="100" width="80">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Mô tả</label>
                        <textarea style="resize: none" row="5" class="form-control" name="cv_des" id="exampleInputPassword1" required>{{$cv->maucv_des}}</textarea> 
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Trạng thái</label>
                        <select name="cv_status" class="form-control input-sm m-bot15">
                            @if($cv->maucv_status == 0)
                            <option value="0" selected>Ẩn</option>
                            <option value="1">Hiển thị</option>
                            @else
                            <option value="0">Ẩn</option>
                            <option value="1" selected>Hiển thị</option>
                            @endif
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" required="">Mã code</label>
                        <input type="text" name="cv_code" class="form-control" id="exampleInputEmail1" value="{{$cv->maucv_code}}" required>
                    </div>
                    <button type="submit" name="add_product" class="btn btn-info">Cập nhật cv</button>
                </form>
                @endforeach
            </div>
        </div>
    </section>
</div>
@endsection