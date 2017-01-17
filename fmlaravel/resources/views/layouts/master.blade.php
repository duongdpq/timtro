<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:400,300,500,700&amp;subset=latin,latin-ext">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" type="text/css" href="{{ url('public/assets/libraries/Font-Awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/assets/libraries/bootstrap-select/dist/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/assets/libraries/bootstrap-fileinput/css/fileinput.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/assets/libraries/nvd3/nv.d3.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/assets/libraries/OwlCarousel/owl-carousel/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/assets/css/realsite.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/assets/css/dropzone.css')}}">
    <title>@yield('title') | TimTro</title>
</head>
<style type="text/css">
 .select-style {
    border: 1px solid #ccc;
    width: 392px;
    height: 48px;
    border-radius: 3px;
    overflow: hidden;
    background: #fff url("http://www.scottgood.com/jsg/blog.nsf/images/arrowdown.gif") no-repeat 97% 50%;
}

.select-style select {
    padding: 5px 8px;
    width: 130%;
    border: none;
    box-shadow: none;
    background: transparent;
    background-image: none;
    -webkit-appearance: none;
}

.select-style select:focus {
    outline: none;
}
</style>
<body>

<div class="page-wrapper">
    @yield('main')
</div><!-- /.page-wrapper-->
<!-- // js thu vien luon dat o dau` phien ban tren la phien ban bao nhieu 2.1.1-->
<!-- <script type="text/javascript" src="{{ url('public/assets/js/jquery.js')}}"></script> -->


<script src="https://code.jquery.com/jquery-2.2.4.js"></script>

<script type="text/javascript" src="{{ url('public/assets/libraries/jquery-transit/jquery.transit.js')}}"></script>

<!-- <script type="text/javascript" src="{{ url('public/assets/libraries/bootstrap/assets/javascripts/bootstrap/dropdown.js')}}"></script> -->
<script type="text/javascript" src="{{ url('public/assets/libraries/bootstrap/assets/javascripts/bootstrap/collapse.js')}}"></script>
<!-- <script type="text/javascript" src="{{ url('public/assets/libraries/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script> -->
<script type="text/javascript" src="{{ url('public/assets/libraries/bootstrap-fileinput/js/fileinput.min.js')}}"></script>

<script type="text/javascript" src="{{ url('public/assets/libraries/autosize/jquery.autosize.js')}}"></script>
<script type="text/javascript" src="{{ url('public/assets/libraries/isotope/dist/isotope.pkgd.min.js')}}"></script>
<script type="text/javascript" src="{{ url('public/assets/libraries/OwlCarousel/owl-carousel/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{ url('public/assets/libraries/jquery.scrollTo/jquery.scrollTo.min.js')}}"></script>
<script type="text/javascript" src="{{ url('public/assets/libraries/nvd3/lib/d3.v3.js')}}"></script>
<script type="text/javascript" src="{{ url('public/assets/libraries/nvd3/lib/d3.v3.js')}}"></script>
<script type="text/javascript" src="{{ url('public/assets/libraries/nvd3/nv.d3.min.js')}}"></script>

<script type="text/javascript" src="{{ url('public/assets/js/realsite.js')}}"></script>
<script type="text/javascript" src="{{ url('public/assets/js/charts.js')}}"></script>
<script type="text/javascript" src="{{ url('public/assets/js/dropzone.js')}}"></script>
<!-- <script type="text/javascript" src="{{ url('public/assets/js/map.js')}}"></script> -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDWqLcuyVtlTlHmld_Ykq3ODli8yFGvkF0"</script>
<!-- <script type="text/javascript">
  $("#province").on('change',function(e){
    console.log(e);
    var prov_id = e.target.value;
   
    $.get('/district?prov_id=' + prov_id, function(data){
      $('#district').empty();
        $.each(data, function(index,DistrictObj){
            $('#district').append('<option  class="'+prov_id+'" value="'+DistrictObj.id+'">'+DistrictObj.name+'</option>');
        });
    })
   
  });
</script> -->
<!-- <script type="text/javascript">
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
</script> -->
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
<script>
var map;
var markers = [];

            function initialize() {
                var myLatlng = new google.maps.LatLng(21.027764, 105.834160);
                var mapCanvas = document.getElementById('map-canvas');
                var mapOptions = {
                    scrollwheel: false,
                    center: myLatlng,
                    zoom: 18,
                    mapTypeId: google.maps.MapTypeId.ROADMAP

                }

                map = new google.maps.Map(mapCanvas, mapOptions);
                

                google.maps.event.addListener(map, 'click', function (event) {
                    updateLocation(event.latLng);
                });
            }

            function updateLocation(latLng) {

                deleteMarkers();
                addMarker(latLng);

                var lat = latLng.lat();
                var lng = latLng.lng();
                document.getElementById("input-latitude").value = lat;
                document.getElementById("input-longitude").value =lng;
            }

            // Add a marker to the map and push to the array.
            function addMarker(location) {
                var marker = new google.maps.Marker({
                    position: location,
                    map: map
                });
                markers.push(marker);
            }

            // Sets the map on all markers in the array.
            function setAllMap(map) {
                for (var i = 0; i < markers.length; i++) {
                    markers[i].setMap(map);
                }
            }

            // Deletes all markers in the array by removing references to them.
            function deleteMarkers() {
                clearMarkers();
                markers = [];
            }

            // Removes the markers from the map, but keeps them in the array.
            function clearMarkers() {
                setAllMap(null);
            }
            google.maps.event.addDomListener(window, 'load', initialize);
</script>
<script type="text/javascript">
            $("#province").change(function () {
                if (typeof $(this).data('options') === "undefined") {
                    /*Taking an array of all options-2 and kind of embedding it on the select1*/
                    $(this).data('options', $('#district option').clone());
                }
                var id = $(this).val();
                if (id == 0) {
                    var options = $(this).data('options');
                }
                else {
                    var options = $(this).data('options').filter('.' + id);
                }
                $('#district').html(options);
                if (id == 0) {
                    $('#district').val(id);
                }

                var address = $("#district :selected").text() + $("#province :selected").text() + ", Viet Nam";
                getLocByAddress(address);

            });

            $("#district").change(function () {
                var id = $("option:selected", this).attr("class");  //$(this).val();
                $('#province').val(id);

                var address = $("#district :selected").text() + ", " + $("#province :selected").text() + ", Viet Nam";
                getLocByAddress(address);
            });

            //Find Loc and move map when dropdown province, district changed
            function getLocByAddress(address) {
                var mygc = new google.maps.Geocoder();

                mygc.geocode({'address': address}, function (results, status) {

                    if (status == google.maps.GeocoderStatus.OK) {
                        var lat = results[0].geometry.location.lat();
                        var lng = results[0].geometry.location.lng();

                        updateLocation(results[0].geometry.location);

                        var center = new google.maps.LatLng(lat, lng);
                        map.panTo(center);

                    }

                });
            }

        </script>
  <script>

            var list_img = "";

            Dropzone.options.myAwesomeDropzone = {
                maxFilesize: 3, // MB
                maxFiles: 5,
                addRemoveLinks: true,
                acceptedFiles: "image/*",
                paramName: "file",
                init: function () {
                    this.on("addedfile", function (file) {

                    });

                    this.on("success", function (file, response) {
                        //Save server file name in attr server_file_name for use later
                        $(file.previewTemplate).find('.dz-remove').attr('server_file_name', response);

                        var list_img = document.getElementById("list_img").value;
                        var tempStr = list_img.concat(",", response);

                        document.getElementById("list_img").value = tempStr;

                    });

                    this.on("removedfile", function (file) {

                        //Delete image in server
                        var server_file_name = $(file.previewTemplate).find('.dz-remove').attr('server_file_name');
                        $.ajax({
                            url: 'delete_temp_files.php',
                            type: 'GET',
                            data: 'server_file_name=' + server_file_name,
                            dataType: 'text'
                        });


                        //Delete file name in list img hidden field
                        var remove_name = String("," + server_file_name);
                        var list_img = String(document.getElementById("list_img").value);
                        var newTempStr = list_img.replace(remove_name, "");

                        document.getElementById("list_img").value = newTempStr;

                    });

                }
            };

        </script>

        <script type="text/javascript">

            // Catch all events related to changes
            $('input.address').keyup(function (event) {
                // skip for arrow keys
                if (event.which >= 37 && event.which <= 40){
                    return;
                }

                $(this).val(function (index, value) {

                    var str = value;
                    str = str.replace(/^[\u00C0-\u1FFF\u2C00-\uD7FF\w]|\s[\u00C0-\u1FFF\u2C00-\uD7FF\w]/g, function(letter) {
                        return letter.toUpperCase();
                    });

                    if (str !== "") {
                        var address = str + ", " + $("#district :selected").text() + ", " + $("#province :selected").text();
                        $("#lbDiaChi").text("Địa Chỉ:");
                        $("#lbAddress").text(address);
                    } else {
                        $("#lbDiaChi").text("Địa Chỉ");
                        $("#lbAddress").text("");
                    }

                    return str;
                });
            });
        </script>
</body>
</html>
