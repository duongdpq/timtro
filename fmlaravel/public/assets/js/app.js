
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
