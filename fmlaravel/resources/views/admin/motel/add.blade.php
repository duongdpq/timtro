@extends('admin.master')
@section('content')
 
 <div class="row">
   
    <div class="col-md-7">
      <div class="card">
        <div class="card-body">
          <form class="form form-horizontal" action="{!! url('/admin/motel/add') !!}" method="POST" enctype="multipart/form-data">
           <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
  <div class="section">
    <div class="section-title">Information</div>
    <div class="section-body">
      <div class="form-group">
        <label class="col-md-3 control-label">Tỉnh/ Thành Phố</label>
        <div class="col-md-7">
          <div class="input-group">
            <select class="select2" name="province" id="province" >
            <option value="">--Chọn tỉnh/TP--</option>
            @foreach($province as $item)
              <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
            </select>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-3 control-label">Quận/ Huyện</label>
        <div class="col-md-4">
          <div class="input-group">
            <select class="select2" name="district" id="district">
            <option value="">----Chọn quận/ huyện----</option>
              
            </select>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-3 control-label">Phường/ Xã</label>
        <div class="col-md-4">
          <div class="input-group">
            <select class="select2" name="ward" id="ward">
            <option value="">----Chọn phường/ xã----</option>
              
            </select>
          </div>
        </div>
      </div>
       <div class="form-group">
        <label class="col-md-3 control-label">Số lượng phòng</label>
        <div class="col-md-4">
          <input type="text" class="form-control" placeholder="" name="number_room">
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-3 control-label">Diện tích</label>
        <div class="col-md-4">
          <input type="text" class="form-control" placeholder="" name="area">
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-3 control-label">Giá phòng</label>
        <div class="col-md-4">
          <div class="input-group">
            <span class="input-group-addon">VND</span>
            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="price">
          </div>
        </div>
      </div>
       <div class="form-group">
        <label class="col-md-3 control-label">Giá nước</label>
        <div class="col-md-4">
          <div class="input-group">
            <span class="input-group-addon">VND</span>
            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="price_water">
          </div>
        </div>
      </div>
       <div class="form-group">
        <label class="col-md-3 control-label">Giá điện</label>
        <div class="col-md-4">
          <div class="input-group">
            <span class="input-group-addon">VND</span>
            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="price_electric">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="section">
    <div class="section-title">Warranty</div>
    <div class="section-body">
      <div class="form-group">
        <label class="col-md-3 control-label">Địa chỉ</label>
        <div class="col-md-9">
          <input type="text" class="form-control" placeholder="" name="address">
        </div>
      </div>
     <div class="form-group">
        <label class="col-md-3 control-label">Số điện thoại</label>
        <div class="col-md-9">
          <input type="text" class="form-control" placeholder="" name="phone">
        </div>
      </div>
    </div>
  </div>
   <div class="section">
    <div class="section-title">Warranty</div>
    <div class="section-body">
      <div class="form-group">
        <label class="col-md-3 control-label">Ten nha tro</label>
        <div class="col-md-9">
          <input type="text" class="form-control" placeholder="" name="name">
        </div>
      </div>
     <div class="form-group">
        <label class="col-md-3 control-label">Mo ta</label>
        <div class="col-md-9">
          <input type="text" class="form-control" placeholder="" name="description">
        </div>
      </div>
    </div>

  </div>
  <div class="section">
    <div class="section-title">Warranty</div>
    <div class="form-group">
        <label class="col-md-3 control-label"></label>
        <div class="col-md-9">
        <img src="http://placehold.it/150x150" id="showimages" style="width: 200px;height: 200px">
          <input type="file" id="inputimages" class="form-control" name="file" >
        </div>
      </div>
     
    
  </div>
  <div class="form-footer">
    <div class="form-group">
      <div class="col-md-9 col-md-offset-3">
        <button type="submit" class="btn btn-primary">Save</button>
        <button type="button" class="btn btn-default">Cancel</button>
      </div>
    </div>
  </div>
</form>
        </div>
      </div>
    </div>
     <div class="col-md-5">
      <div class="card">
        <div class="card-header">
          Chọn ảnh
        </div>
        <div class="card-body">
          <div class="row">
  <div class="col-md-12">
   
      {!! Form::open([ 'route' => [ 'dropzone.store' ], 'files' => true, 'enctype' => 'multipart/form-data', 'class' => 'dropzone', 'id' => 'image-upload' ]) !!}

                <div class="dz-message">
                    <strong>Kéo thả</strong> hoặc <strong>Click</strong> vào đây <br><br>
                    <label style="font-weight: normal;font-size:14px;color: #ff0000;margin-left: 8px">Lưu ý: Tin có ảnh không liên quan đến phòng trọ sẽ bị xóa mà không thông báo trước</label>
                </div>
 {!! Form::close() !!}
     
  </div>
  
</div>
        </div>
      </div>
    </div>
  </div>
</div>


  </div>
@section('script')
<script type="text/javascript">
  $("#province").on('change',function(e){
    console.log(e);
    var prov_id = e.target.value;
    if ($(this).val() !== "") {
    $.get('/district?prov_id=' + prov_id, function(data){
      $('#district').html('');
      $('#district').append('<option value="" selected="selected">Quận/Huyện</option>');
        $.each(data, function(index,DistrictObj){
            $('#district').append('<option value="'+DistrictObj.id+'">'+DistrictObj.name+'</option>');
        });
    })
    }
    else {
                $('#district').html('');
                $('#district').append('<option value="" selected="selected">Quận/Huyện</option>');
                
            }
  });
</script>
<script type="text/javascript">
  $("#district").on('change',function(f){
    console.log(f);
    var dist_id = f.target.value;
    $.get('/ward?dist_id=' + dist_id, function(data){
      $('#ward').empty();
        $.each(data, function(index,WardObj){
            $('#ward').append('<option value="'+WardObj.id+'">'+WardObj.name+'</option>');
        });
    })
  });
</script>
 <script type="text/javascript">
  function readURL(input){
    if(input.files && input.files[0]){
      var reader = new FileReader();
      reader.onload = function(e){
        $('#showimages').attr('src',e.target.result);
      }
      reader.readAsDataURL(input.files[0]);
    }
  }
  $("#inputimages").change(function(){
    readURL(this);
  });
</script>
@endsection() 
@endsection()