@extends('layouts.master_website')

@section('content')

    @include('layouts.includes.website.header')

    <section class="banner">
        <img class="image-banner" src="{{ asset('images/banner.png') }}">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="social">
                            <a href="https://www.facebook.com/Limitless.Naturals.eg/" target="_blank"><img
                                    src="{{asset('images/facebook.png')}}"></a>
                            <a href="https://instagram.com/limitless_naturals" target="_blank"><img
                                    src="{{asset('images/instegram.png')}}"></a>
                        </div>
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
            <img class="abs-image" src="{{ asset('images/img1.png') }}">
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
                    @if (\Session::has('message'))
                        <div class="col-12 mb-4">
                            <div class="alert alert-success text-center">
                                <ul>
                                    <li>{!! \Session::get('message') !!}</li>
                                </ul>
                            </div>
                        </div>
                    @endif
                    @if(!getCurrentUser()->join_club)
                        <div class="col-12 mb-4">
                            <h2 class="title-left  pl-0">Dear esteemed Doctor would you like to join our LPLP Club?</h2>
                        </div>


                        <div class="col-md-12 ">
                            <form action="{{route('join')}}" method="post">
                                @csrf
                                <div class="custom-control custom-radio mb-2">
                                    <input type="radio" id="customRadioInline2" name="join"
                                           class="custom-control-input" value="Yes" required>
                                    <label class="custom-control-label" for="customRadioInline2"  style="cursor: pointer">Yes</label>
                                </div>
                                <div class="custom-control custom-radio " >
                                    <input type="radio" id="customRadioInline1" name="join"
                                    class="custom-control-input" value="No">

                                    <label class="custom-control-label" for="customRadioInline1" style="cursor: pointer">No</label>
                                </div>
                                <button type="submit" class="btn btn-success mt-4">Submit</button>
                            </form>

                        </div>
                    @endif

                    <!--col-10-->
                </div>
                <!--row-->
            </div>
            <!--container-->


        </div>
        <!--registration-div-->


{{--            <div class="speakers" id="speakers">--}}
{{--                <div class="container">--}}
{{--                    <h4>Meet our conference Speakers & Chairmen</h4>--}}
{{--                        <div class="row speakers-row">--}}
{{--                            <div class="col-12 col-md-4 col-lg-3 col-xl-4 speaker-main-div">--}}
{{--                                <img src="{{ asset('images/speaker2.png') }}">--}}
{{--                                <p class="speaker-title"> <b>1st star guest</b></p>--}}
{{--                                <p class="speaker-desc text-center">--}}
{{--                                    President of the Hungarian Diabetes Association--}}
{{--                                </p>--}}
{{--                            </div>--}}

{{--                            <div class="col-12 col-md-4 col-lg-3 col-xl-4 speaker-main-div">--}}
{{--                                <img src="{{ asset('images/speaker1.png') }}">--}}
{{--                                <p class="speaker-title"><b>Dr. Riad Armanious</b></p>--}}
{{--                                <p class="speaker-desc">--}}
{{--                                    EVA Pharma CEO--}}
{{--                                </p>--}}
{{--                            </div>--}}

{{--                            <div class="col-12 col-md-4 col-lg-3 col-xl-4 speaker-main-div">--}}
{{--                                <img src="{{ asset('images/speaker2.png') }}">--}}
{{--                                <p class="speaker-title"> <b>2nd star guest</b></p>--}}
{{--                                <p class="speaker-desc text-center">--}}
{{--                                    Professor of Internal Medicine, Cairo University--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                </div>--}}
{{--            </div>--}}
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
