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
            <h3 class="card-title">Submitted Drs.</h3>
            <a href="{{route('admin.registrations.import')}}" style="float: right;" class="btn btn-warning pull-right">Bulk import</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            @csrf
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>User Code</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Venue</th>
                    <th>Governorate</th>
                    <th>created_at</th>
                    <th>Register as</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>

                @foreach($registrations as $key=> $registration)
                <tr>
                    <td>{{$key +1}}</td>
                    <td>{{$registration->user_code}}</td>
                    <td>{{$registration->first_name}} {{$registration->last_name}}</td>
                    <td>{{$registration->email}}</td>
                    <td>{{$registration->phone}}</td>
                    <td>{{$registration->venue}}</td>
                    <td>{{$registration->governorate}}</td>
                    <td>{{$registration->created_at}}</td>
                    <td>{{$registration->register_as}}</td>
                    <td>
                        <a class="deleteThisBtnFinle" data-id="{{ $registration->id }}" ><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>#</th>
                    <th>User Code</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Venue</th>
                    <th>Governorate</th>
                    <th>created_at</th>
                    <th>Register as</th>
                    <th>Actions</th>
                </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection

@section('scripts')
    @include('layouts.includes.dashboard.datatables.scriptes')
    <script src="{{asset('js/registrations.js')}}"></script>
@endsection
