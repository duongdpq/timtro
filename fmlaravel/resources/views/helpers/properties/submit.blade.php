<h3><strong>Chọn ảnh phòng trọ (tối đa 5 ảnh)</strong></h3>
            <form action="" class="dropzone" id="myAwesomeDropzone">
                <div class="dz-message">
                    <strong>Kéo thả</strong> hoặc <strong>Click</strong> vào đây <br><br>
                    <label style="font-weight: normal;font-size:14px;color: #ff0000;margin-left: 8px">Lưu ý: Tin có ảnh không liên quan đến phòng trọ sẽ bị xóa mà không thông báo trước</label>
                </div>
</form>
<br>
<form action="{!! url('/motel/add') !!}" method="POST" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{!! csrf_token() !!}" />
<input type="hidden" name="list_img" value="" id="list_img" required>
<div class="box">
    <div class="form-group">
        <input class="form-control" type="text" placeholder="Tên nhà trọ">
    </div><!-- /.form-group -->
</div><!-- /.box -->
 <div class="box">
    <div class="row">
        <div class="col-sm-6">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                <input class="form-control" type="text" placeholder="Giá phòng">
            </div><!-- /.form-group -->
             <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-arrows"></i></span>
                <input class="form-control" type="text" placeholder="Diện tích">
            </div><!-- /.form-group -->
        </div><!-- /.col-* -->

        <div class="col-sm-6">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tint"></i></span>
                <input class="form-control" type="text" placeholder="Số điện thoại">
            </div><!-- /.form-group -->

            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-picture-o"></i></span>
                <input class="form-control" type="text" placeholder="Số lượng phòng">
            </div><!-- /.form-group -->
        </div><!-- /.col-* -->
    </div><!-- /.row -->
</div><!-- /.box -->
<div class="box">
<h3><strong>Mô tả chi tiết</strong></h3>
    <div class="form-group">
       <textarea name="Mota" id="Mota" cols="110" rows="5" placeholder="Có chỗ để xe, gần bến xe bus, blah blah" required></textarea>
        </textarea>
    </div><!-- /.form-group -->
</div><!-- /.box -->
<div class="box">
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group" >
                <select name="province" id="province" class="form-control" >
                 <option value="">--Chọn tỉnh/TP--</option>
                   @foreach($province as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                </select>
            </div><!-- /.form-group -->
        </div><!-- /.col-* -->

        <div class="col-sm-6">
            <div class="form-group">
                <select name="district" id="district" class="form-control" >
                     <option value="">----Chọn quận/ huyện----</option>
                        @foreach($district as $item1)
                    <option class="{{$item1->province_id}}" value="{{$item1->id}}">{{$item1->name}}</option>
                    @endforeach
                </select>
            </div><!-- /.form-group -->
        </div><!-- /.col-* -->
    </div><!-- /.row -->
    <div class="form-group">
        <input type="text" class="address" name="tfDiaChi" id="tfDiaChi" placeholder="12, Ngõ 21, Nguyễn Chí Thanh" required style="">
    </div><!-- /.form-group -->
    <div class="form-group">
    <label id="lbDiaChi" for="tfDiaChi" class="form-group" >Địa chỉ</label><label id="lbAddress" style="font-weight: normal;color: #096;margin-left: 8px" class="form-group"></label>
    </div>
</div><!-- /.box -->
<div class="row">
    <div class="col-sm-12">
        <div class="box" >
        <h3><strong>Click vào bản đồ để xác định vị trí nhà</strong></h3>
            <div id="map-canvas">
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                        <input class="form-control" type="text" placeholder="Latitude" id="input-latitude">
                    </div><!-- /.form-group -->
                </div><!-- /.col-* -->

                <div class="col-sm-6">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                        <input class="form-control" type="text" placeholder="Lontgitude" id="input-longitude">
                    </div><!-- /.form-group -->
                </div><!-- /.col-* -->
            </div><!-- /.row -->
        </div><!-- /.box -->
    </div>

    <div class="col-sm-12">
        <div class="box">
            <input type="file" id="input-file">
        </div><!-- /.box -->
    </div>
</div><!-- /.row -->


<div class="center">
    <button class="btn btn-xl" type="submit">ĐĂNG TIN</button>
</div><!-- /.center -->
</form>

