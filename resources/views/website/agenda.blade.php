@extends('layouts.master_website')

@section('content')

    @include('layouts.includes.website.header')

    <section class="banner">
        <img class="image-banner" src="{{ asset('images/banner.png') }}">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        {{--                        <h3>Advanced <span>Solution</span></h3>--}}
                        {{--                        <p class="text-p">Offering higher efficacy through an innovative medication for--}}
                        {{--                            neurophaty Patients</p>--}}
                    </div>
                    <!--col-lg-6-->


                </div>
                <!--row-->
            </div>
            <!--container-->
        </div>
        <!--overlay-->
    </section>

    <section class="content">
        <div class="div-video">
            <img class="abs-image" src="{{ asset('images/img.png') }}">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Limitless Naturals</h2>
                    </div>
                    <!--col-12-->
                </div>
                <!--row-->
                <div class="row" style="justify-content: center;">
                    <div class="col-10">
                        <div class="video">
                            <div class="first-layer" id="layer1">
                                <img class="main-layer" src="{{ asset('images/image-video.png') }}">
                                <div class="overlay"><img src="{{ asset('images/play.png') }}" onclick="showVideo()">
                                </div>
                                <!--overlay-->
                            </div>
                            <!--first-layer-->
                            <div class="second-layer" style="display: none;" id="layer2">
                                <video controls id="myVideo">
                                    <source src="{{ asset('VID-20210308-WA0042.mp4') }}" type="video/mp4">
                                </video>

                            </div>
                            <!--second-layer-->
                        </div>
                        <!--video-->
                    </div>
                    <!--col-10-->
                </div>
                <!--row-->

            </div>
            <!--container-->
        </div>
        <!--div-video-->

        <div class="program-div">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center py-4">
                        <h4>Scientific Program</h4>
                        <p>Feel Free to Contact Us for the Event Conference Info</p>
                    </div>
                    <!--col-lg-6-->
                {{--                    <div class="col-lg-6">--}}
                {{--                        <img src="{{ asset('images/IMG_9109.png') }}">--}}
                {{--                    </div>--}}
                <!--col-lg-6-->

                </div>
            </div>
        </div>
        <!--program-div-->
        <div class="registration-div agenda" id="agenda">
            <div class="container">
                <div class="row" style="justify-content: center;">
                    <div class="col-12 mb-4">
                        <h2 class="title-left">Our Agenda</h2>
                    </div>

                        <div class="col-12 col-lg-2">
                            <div class="event-day-div">
                                 <span class="day-name">Day 1</span>
                                <span class="red-span">2<sup>nd</sup></span>
                                <span class="month-name">September </span>
                            </div>
                        </div>
                        <div class="col-12 col-lg-10">
                            <form class="border-content">
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane  active" id="agenda1">
                                        <div class="line-div">
                                            <ul>
                                                <li> <span class="red-span">5:00 PM - 7:00 PM </span></li>
                                                <li class="border"></li>
                                                <li>
                                                    Registrations
                                                    <br>
                                                    Private Tour
                                                    <br>
                                                    Free activities
                                                    <br>
                                                    white Coffee break
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="line-div py-5">
                                            <h4 class="text-center red-span"><b>Revelation show</b></h4>
                                        </div>
                                        <div class="line-div">
                                            <ul>
                                                <li> <span class="red-span">7:00 PM - 8:00 PM </span></li>
                                                <li class="border"></li>
                                                <li>
                                                    “ Ready to have a Limitless Life”
                                                    <span>
                                                        <img class="main-layer"
                                                             src="{{ asset('images/microphone.png') }}">
                                                        By <span class="span-red">Dr. Riad Armanious,</span> EVA Pharma CEO
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="line-div">
                                            <ul>
                                                <li> <span class="red-span">8:00 PM - 8:45 PM </span></li>
                                                <li class="border"></li>
                                                <li>
                                                    “ Ready to fight for Life”
                                                    <span>
                                                        <img class="main-layer"
                                                             src="{{ asset('images/microphone.png') }}">
                                                        By <span class="span-red">Our 1st star guest</span>
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="line-div">
                                            <ul>
                                                <li> <span class="red-span">8:45 PM - 9:00 PM </span></li>
                                                <li class="border"></li>
                                                <li>
                                                    “Ready To climb Mountains for Life”
                                                    <span>
                                                        <img class="main-layer"
                                                             src="{{ asset('images/microphone.png') }}">
                                                        By <span class="span-red">Our 2nd star guest</span>
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>


                                        <div class="line-div">
                                            <ul>
                                                <li> <span class="red-span">9:00 PM - 10:00 PM </span></li>
                                                <li class="border"></li>
                                                <li>
                                                    Diner and Musical entertainment <br> with Nelly Kassis                                                </li>
                                            </ul>
                                        </div>
                                        <!--line-div-->


                                    </div>
                                    <!--end tab1-->

                                    <!--end tab2-->
                                </div>


                            </form>
                        </div>

                <!--col-10-->
                </div>
                <!--row-->
            </div>
            <!--container-->


        </div>
        <!--registration-div-->


        <div class="speakers" id="speakers">
            <div class="container">
                <h4>Meet our conference Speakers & Chairmen</h4>
                    <div class="row speakers-row">
                        <div class="col-12 col-md-4 col-lg-3 col-xl-4 speaker-main-div">
                            <img src="{{ asset('images/speaker2.png') }}">
                            <p class="speaker-title"> <b>1st star guest</b></p>
                            <p class="speaker-desc text-center">
                                President of the Hungarian Diabetes Association
                            </p>
                        </div>

                        <div class="col-12 col-md-4 col-lg-3 col-xl-4 speaker-main-div">
                            <img src="{{ asset('images/speaker1.png') }}">
                            <p class="speaker-title"><b>Dr. Riad Armanious</b></p>
                            <p class="speaker-desc">
                                EVA Pharma CEO
                            </p>
                        </div>

                        <div class="col-12 col-md-4 col-lg-3 col-xl-4 speaker-main-div">
                            <img src="{{ asset('images/speaker2.png') }}">
                            <p class="speaker-title"> <b>2nd star guest</b></p>
                            <p class="speaker-desc text-center">
                                Professor of Internal Medicine, Cairo University
                            </p>
                        </div>
                    </div>

            </div>
        </div>
        <!--speakers-->

{{--        <div class="registration-div agenda score" id="games">--}}
{{--            <div class="container">--}}
{{--                <div class="row" style="justify-content: center;">--}}
{{--                    <div class="col-12">--}}
{{--                        <h2 class="title-left">Games Score</h2>--}}
{{--                    </div>--}}
{{--                    <div class="col-10 padding-score">--}}
{{--                    <!--<h3 class="title-score"><span><img src="{{ asset('images/puzzle.png') }}"></span>Game Score</h3>-->--}}
{{--                        <br>--}}
{{--                        --}}{{-- <p>Can't wait to play? Stay tuned for a lot of the entertaining games that will be live during--}}
{{--                            the event time.</p> --}}
{{--                        <table class="table table-striped">--}}
{{--                            <thead>--}}
{{--                            <tr>--}}
{{--                                <th>#</th>--}}
{{--                                <th>Name</th>--}}
{{--                                <th>Time</th>--}}
{{--                                <th>Score</th>--}}
{{--                            </tr>--}}
{{--                            </thead>--}}
{{--                            <tbody>--}}
{{--                            @if (count($games) > 1)--}}
{{--                                @foreach ($games as $key => $game)--}}
{{--                                    <tr>--}}
{{--                                        <td>{{ $key + 1 }}</td>--}}
{{--                                        <td>--}}
{{--                                            <p><span><img src="{{ asset('images/man.png') }}"></span>{{ $game->name }}--}}
{{--                                            </p>--}}
{{--                                        </td>--}}
{{--                                        <td>{{ $game->created_at }}</td>--}}
{{--                                        <td>{{ $game->score }}</td>--}}
{{--                                    </tr>--}}
{{--                                @endforeach--}}
{{--                            @else--}}
{{--                                <tr>--}}

{{--                                    <td> you</td>--}}
{{--                                    <td> do not</td>--}}
{{--                                    <td> play</td>--}}
{{--                                    <td> yet</td>--}}

{{--                                </tr>--}}

{{--                            @endif--}}
{{--                            </tbody>--}}
{{--                        </table>--}}


{{--                    </div>--}}
{{--                    <!--col-10-->--}}
{{--                </div>--}}
{{--                <!--row-->--}}
{{--            </div>--}}
{{--            <!--container-->--}}


{{--        </div>--}}
        <!--registration-div-->
    </section>
    <!--content-->

@endsection
