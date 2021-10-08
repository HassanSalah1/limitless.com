@extends('layouts.master')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Home</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Home</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 mb-5">
{{--                    <form action="{{route('dashboard.home')}}" method="get">--}}
                        <div class="input-group">
                            <select class="custom-select" id="inputGroupSelect04" name="event" aria-label="">
                                <option selected value="">Choose the event</option>
                                <option value="OBGYN Conference 16-17.9.2021">OBGYN Conference 16-17.9.2021</option>
                                <option value="LPLP (St.Regis Cairo) 8.10.2021">LPLP (St.Regis Cairo) 8.10.2021</option>
                                <option value="LPLP (Golden Jewel, Alex) 15.10.2021">LPLP (Golden Jewel, Alex) 15.10.2021</option>
                            </select>
                            <div class="input-group-append">
                                <button class="btn btn-primary" id="filter-event" type="submit">Filter</button>
                            </div>
                        </div>
{{--                    </form>--}}
                </div>
            </div>
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3 id="registrations">{{$registrations->count()}}</h3>

                            <p>Total Submitted Drs.</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="{{route('registrations.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3 id="registrationsAttend">{{$registrationsAttend->count()}}</h3>

                            <p>Total Registered Drs.</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="{{route('registrations.attendees')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3 id="games">{{$games->count()}}</h3>

                            <p>Game Scores</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="{{route('games.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3 id="surveys">{{$surveys->count()}}</h3>
                            <p>Total Surveys</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="{{route('surveys.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection


@push('js')
    <script>
        $(document).ready(function() {


            $('#filter-event').click(function (){
                let event =  $("select#inputGroupSelect04 option").filter(":selected").val();
                if (event !== ""){
                    $.ajax({
                        url:`/admin/home?event=${event}`, // Url to which the request is send
                        type: "GET",             // Type of request to be send, called as method
                        success: function(response)   // A function to be called if request succeeds
                        {
                            $('#registrations').html(response.registrations);
                            $('#registrationsAttend').html(response.registrationsAttend);
                            $('#games').html(response.games);
                            $('#surveys').html(response.surveys);
                        },
                    });
                }
            });

            setInterval(function(){
                let event =  $("select#inputGroupSelect04 option").filter(":selected").val();
                $.ajax({
                    url:`/admin/home?event=${event}`, // Url to which the request is send
                    type: "GET",             // Type of request to be send, called as method
                    success: function(response)   // A function to be called if request succeeds
                    {
                          $('#registrations').html(response.registrations);
                          $('#registrationsAttend').html(response.registrationsAttend);
                          $('#games').html(response.games);
                          $('#surveys').html(response.surveys);
                    },
                });
                //end setTimeout and ajax
            },10000);
        });
    </script>
@endpush
