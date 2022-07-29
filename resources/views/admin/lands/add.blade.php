@extends('templates.layoutadmin')
@section('title', $title)
@section('content')
<!-- Main content -->
<section class="content appTuyenSinh">
    <link rel="stylesheet" href="{{ asset('public_admin/default/bower_components/select2/dist/css/select2.min.css')}} ">
    <style>
        .select2-container--default .select2-selection--single,
        .select2-selection .select2-selection--single {
            padding: 3px 0px;
            height: 30px;
        }

        .select2-container {
            margin-top: -5px;
        }

        option {
            white-space: nowrap;
        }

        .select2-container--default .select2-selection--single {
            background-color: #fff;
            border: 1px solid #aaa;
            border-radius: 0px;
        }

        .select2-container--default .select2-selection--multiple .select2-selection__choice {
            color: #216992;
        }

        .select2-container--default .select2-selection--multiple {
            margin-top: 10px;
            border-radius: 0;
        }

        .select2-container--default .select2-results__group {
            background-color: #eeeeee;
        }
    </style>

    <?php //Hiển thị thông báo thành công
    ?>
    @if ( Session::has('success') )
    <div class="alert alert-success alert-dismissible" role="alert">
        <strong>{{ Session::get('success') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Close</span>
        </button>
    </div>
    @endif
    <?php //Hiển thị thông báo lỗi
    ?>
    @if ( Session::has('error') )
    <div class="alert alert-danger alert-dismissible" role="alert">
        <strong>{{ Session::get('error') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Close</span>
        </button>
    </div>
    @endif
    @if ($errors->any())
    <div class="alert alert-danger alert-dismissible" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Close</span>
        </button>
    </div>
    @endif
    <h2 style="font-style: oblique;">{{$title}}</h2>
    <!-- Phần nội dung riêng của action  -->
    <form class="form-horizontal " action="" method="post" enctype="multipart/form-data">
        @csrf
        <div class="box-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name_bds" class="col-md-3 col-sm-4 control-label">Tên BĐS <span class="text-danger">(*)</span></label>

                        <div class="col-md-9 col-sm-8">
                            <input type="text" name="name_bds" id="name_bds" class="form-control" value="@isset($request['name_bds']){{ $request['name_bds'] }}@endisset">
                            <span id="mes_sdt"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="location" class="col-md-3 col-sm-4 control-label">Địa Chỉ <span class="text-danger">(*)</span></label>
                        <div class="col-md-9 col-sm-8">
                            <input type="text" name="location" id="location" class="form-control" value="@isset($request['location']){{ $request['location'] }}@endisset">
                            <span id="mes_sdt"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="price" class="col-md-3 col-sm-4 control-label">Gía Tiền <span class="text-danger">(*)</span></label>
                        <div class="col-md-9 col-sm-8">
                            <input type="text" name="price" id="price" class="form-control" value="@isset($request['price']){{ $request['price'] }}@endisset">
                            <span id="mes_sdt"></span>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="contact" class="col-md-3 col-sm-4 control-label">Liên Hệ <span class="text-danger">(*)</span></label>
                        <div class="col-md-9 col-sm-8">
                            <input type="text" name="contact" id="contact" class="form-control" value="@isset($request['contact']){{ $request['contact'] }}@endisset">
                            <span id="mes_sdt"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="description" class="col-md-3 col-sm-4 control-label">Mô Tả<span class="text-danger">(*)</span></label>
                        <div class="col-md-9 col-sm-8">
                            <textarea class="form-control" rows="5" id="description" name="description" value="@isset($request['description']){{ $request['description'] }}@endisset"></textarea>
                            <span id="mes_sdt"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="lbds_id" class="col-md-3 col-sm-4 control-label">Loại BĐS<span class="text-danger">(*)</span></label>
                        <div class="col-md-9 col-sm-8">
                            <select class="form-control" name="lbds_id" id="ldbs_id">
                                <option value="@isset($request['contact']){{ $request['contact'] }}@endisset">Chọn Loại BĐS</option>
                                @foreach ($list_lbds as $lbds)
                                <option value="{{$lbds->id}}">{{$lbds->name_lbds}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="image" class="col-md-3 col-sm-4 control-label">Ảnh<span class="text-danger">(*)</span></label>
                        <div class="col-md-9 col-sm-8">
                            <input type="file" name="image" id="image" class="form-control" value="@isset($request['phone']){{ $request['phone'] }}@endisset">
                            <span id="mes_sdt"></span>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <!-- /.box-body -->
        <div class="text-center">
            <button type="submit" class="btn btn-primary"> Save</button>
            <a href="{{route('route_BackEnd_Lands_List')}}" class="btn btn-default">Cancel</a>
        </div>
        <!-- /.box-footer -->
    </form>

</section>
@endsection
@section('script')
<script src="{{ asset('public_admin/default/plugins/input-mask/jquery.inputmask.js') }}"></script>
<script src="{{ asset('public_admin/default/plugins/input-mask/jquery.inputmask.date.extensions.js') }}"></script>
@endsection