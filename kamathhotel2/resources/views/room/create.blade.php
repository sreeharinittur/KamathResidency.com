@extends('layout')
 @section('content')
 <!-- Begin Page Content -->
 <head>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
 <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
</head>
</head>
 <div class="container-fluid">


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Add Room TYpe</h6>
        <a href="{{url('admin/roomtype')}}" class="float-right btn btn-success btn-sm">View All</a>
    </div>
    <div class="card-body">
        @if (Session::has('success'))
        <p class="text-success">Data added</p>
        @endif
        <div class="table-responsive">
            <form method="post" action="{{url('admin/roomtype')}}">
            @csrf
            <table class="table table-bordered">
                
                <tr>
                    <th>Title:
                    </th>
                    <td>
                        <input name="title" type="text" class="form-control"/>

                    </td>
                </tr>

                <tr>
                <th>Detail:
                    </th>
                    <td>
                    <textarea name="detail" class="form-control"></textarea>

                    </td>
                        

                    
                </tr>
                <tr>
                
                    <td colspan="2">
                        <input type="submit" class="btn btn primary"/>
                    </td> 
                    
                </tr>
            </table>
</form>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->
 <!-- Bootstrap core JavaScript-->
 <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
@section('scripts')
<!-- Custom styles for this page -->
<link href="{{asset('public')}}/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
<!-- Page level plugins -->
<script src="{{asset('public')}}/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('public')}}/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="{{asset('public')}}/js/demo/datatables-demo.js"></script>

@endsection


@endsection