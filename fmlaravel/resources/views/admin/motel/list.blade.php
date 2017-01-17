@extends('admin.master')
@section('content')
{{ csrf_field() }}
<div class="row">
<div class="col-xs-12">
      <div class="card">
        <div class="card-header">
          Datatable
        </div>
        <div class="card-body no-padding">
          <table class="datatable table table-striped primary" cellspacing="0" width="100%" id="table">
    <thead>
        <tr>
            <th>STT</th>
            <th>Tên Phòng Trọ</th>
            <th>Số lượng phòng</th>
            <th>Diện tích</th>
            <th>Địa chỉ</th>
            <th>Phone</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($data as $item)
        <tr class="item{{$item->id}}">
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->number_room}}</td>
            <td>{{$item->area}}</td>
            <td>{{$item->address}}</td>
            <td>{{$item->phone}}</td>
            <td><button class="edit-modal btn btn-info" data-id="{{$item->id}}"
                    data-name="{{$item->name}}">
                    <span class="fa fa-edit"></span> Edit
                </button>
                <button class="delete-modal btn btn-danger" data-id="{{$item->id}}"
                    data-name="{{$item->name}}">
                    <span class="fa fa-remove"></span> Delete
                </button></td>
        </tr>
     @endforeach
    </tbody>
</table>
        </div>
        </div>
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="id">ID:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="fid" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="name">Name:</label>
                            <div class="col-sm-10">
                                <input type="name" class="form-control" id="n">
                            </div>
                        </div>
                    </form>
                    <div class="deleteContent">
                        Are you Sure you want to delete <span class="dname"></span> ? <span
                            class="hidden did"></span>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn actionBtn" data-dismiss="modal">
                            <span id="footer_action_button" class='fa fa-delete'> </span>
                        </button>
                        <button type="button" class="btn btn-warning" data-dismiss="modal">
                            <span class='fa fa-remove'></span> Close
                        </button>
                    </div>
                </div>
                </div>
                </div>
</div>
@section('script')
<script type="text/javascript">
    $(document).on('click', '.delete-modal', function() {
        $('#footer_action_button').text(" Delete");
        $('#footer_action_button').removeClass('fa-check');
        $('#footer_action_button').addClass('fa-trash');
        $('.actionBtn').removeClass('btn-success');
        $('.actionBtn').addClass('btn-danger');
        $('.actionBtn').addClass('delete');
        $('.modal-title').text('Delete');
        $('.did').text($(this).data('id'));
        $('.deleteContent').show();
        $('.form-horizontal').hide();
        $('.dname').html($(this).data('name'));
        $('#myModal').modal('show');
    });
$('.modal-footer').on('click', '.delete', function() {
        $.ajax({
            type: 'post',
            url: '/delete',
            data: {
                '_token': $('input[name=_token]').val(),
                'id': $('.did').text()
            },
            success: function(data) {
                $('.item' + $('.did').text()).remove();
            }
        });
    });
</script>
@endsection()
@endsection()