@extends('layouts.master')

@section('style')

    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">

@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Import Dr.</h3>
            <a href="{{asset('registration_sample.xlsx')}}" download style="float: right;" class="btn btn-warning pull-right">Sample excel file</a>

        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    @if(session()->has('success'))
                        <div class="alert alert-success">{{session()->get('success')}}</div>
                    @endif
                        @if(session()->has('error'))
                            <div class="alert alert-danger">{{session()->get('error')}}</div>
                        @endif
                </div>
            </div>
            <form method="POST" action="{{ route('admin.registrations.store') }}"  enctype="multipart/form-data" style="background-color: #f8f9fa;">
                @csrf
                <div class="row">
                    <div class="col-lg-6 col-12 div-field">
                        <label>Choose the event <span>*</span> </label>
                        <select name="venue" required class="form-control">
                            {{--                                            <option value=""></option>--}}
                            <option value="OBGYN Conference 16-17.9.2021" selected>OBGYN Conference 16-17.9.2021</option>
                            <option value="LPLP (St.Regis Cairo) 24.9.2021">LPLP (St.Regis Cairo) 24.9.2021</option>
                            <option value="LPLP (Golden Jewel, Alex) 8.10.2021">LPLP (Golden Jewel, Alex) 8.10.2021</option>
                        </select>
                    </div><!--col-12-->
                    <div class="col-lg-6">
                        <label>File<span>*</span> </label>

                        <input type="file" class="form-control" name="file">
                    </div>
                    <div class="col-lg-12 mt-4">
                        <input type="submit" value="Submit" class="bt btn-primary" name="file">
                    </div>
                </div>
            </form>
        </div>
        <!-- /.card-body -->
    </div>
@endsection

@section('scripts')

@endsection
