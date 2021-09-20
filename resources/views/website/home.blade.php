
@extends('layouts.master_website')
@section('style')
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.css')}}">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <style>
        label[class=error] {
            color: red;
        }
        #error-msg-registration{
            color: red;
        }
        #error_msg_login{
             color: red;
        }
    </style>
@endsection
@section('content')

<header>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-6 p-1 logo-header">
                <a href="{{route('home')}}"> <img src="{{asset('images/logo1.png')}}"> </a>
            </div><!--col-lg-3-->
            <div class="col-lg-3 col-6 mobile">
                <a href="{{route('home')}}">   <img src="{{asset('images/logo2.png')}}"> </a>
            </div><!--col-lg-3-->

            <div class="col-lg-6 col-md-6">
                <ul class="counter">
                    <li id="done"> <h3>Launch event</h3></li>
                    <li id="days" class="bg"><span>days</span></li>
                    <li id="hours" class="bg"></li>
                    <li id="mins" class="bg"></li>
                    <li> <h2 id="end" ></h2></li>
                </ul>

            </div><!--col-lg-6-->
            <div class="col-lg-3 col-md-3 web">
                <a href="#">  <img class="home-logo2" src="{{asset('images/logo2.png')}}"> </a>
            </div><!--col-lg-3-->

        </div><!--row-->
    </div><!--container-->
</header>
<section class="banner">
    <img class="image-banner" src="{{asset('images/banner.png')}}">
    <div class="overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="social">
                        <a href="https://www.facebook.com/Limitless.Naturals.eg/"><img src="{{asset('images/facebook.png')}}" ></a>
                        <a href="https://instagram.com/limitless_naturals"><img src="{{asset('images/instegram.png')}}"></a>
                    </div>
{{--                    <h3>Advanced <span>Solution</span></h3>--}}
{{--                    <p class="text-p">Offering higher efficacy through an innovative medication for--}}
{{--                        neuropathy patients</p>--}}
                </div><!--col-lg-6-->
                <div class="col-lg-6">
                    <div class="main-div web-reserve">
                       {{-- <div >
                            <img class="img-cal" src="{{asset('images/cal.png')}}">
                            <p> <span class="red-color">30<sup>th</sup>July</span ><span class="dates-span">5:30 pm to 10:00 p.m</span></p>
                            <p class="block-span text-left"><b><span class="red-color dates-span2">2<sup>nd</sup> of September</span></b>
                                <br><span >5:00 PM to 10:00 PM</span></p>
                        </div> --}}
                        <a href="#reserve">Reserve Your Spot <span><img src="{{asset('images/arrow.png')}}"></span></a>
                    </div><!--main-div-->
                </div><!--col-lg-6-->

            </div><!--row-->
        </div><!--container-->
    </div><!--overlay-->
</section>
<div class="mobile-reserve">
    <div class="container">
        <div class="row" style="justify-content: center;">
            <div class="col-lg-12 col-md-6 col-12">
                <div class="main-div">
{{--                    <div class="pl-3">--}}
{{--                        <img class="img-cal" src="{{asset('images/cal.png')}}">--}}
{{--                        <p class="block-span text-left"><b><span class="red-color dates-span2">2<sup>nd</sup> of September</span></b>--}}
{{--                            <br><span >5:00 PM to 10:00 PM </span></p>--}}
{{--                    </div>--}}
                    <a  href="#reserve">Reserve Your Spot <span><img src="{{asset('images/arrow2.png')}}"></span></a>
                </div><!--main-div-->
            </div><!--col-lg-12-->
        </div>

    </div><!--container-->

</div>
<section class="content">
    <div class="div-video">
        <img class="abs-image" src="{{asset('images/img1.png')}}">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Limitless Naturals</h2>
                </div><!--col-12-->
            </div> <!--row-->
            <div class="row" style="justify-content: center;">
                <div class="col-10">
                    <div class="video">
                        <div class="first-layer" id="layer1">
                            <img class="main-layer" src="{{asset('images/image-video.png')}}" >
                            <div class="overlay"><img src="{{asset('images/play.png')}}" onclick="showVideo()"></div><!--overlay-->
                        </div><!--first-layer-->
                        <div class="second-layer" style="display: none;" id="layer2">
                            <video   controls  id="myVideo">
                                <source src="{{asset('VID-20210308-WA0042.mp4')}}" type="video/mp4">
                            </video>

                        </div><!--second-layer-->
                    </div><!--video-->
                </div><!--col-10-->
            </div> <!--row-->

        </div><!--container-->
    </div><!--div-video-->


    <div class="registration-div"  id="reserve" >
        <img class="image-regist" src="{{asset('images/image-regist.png')}}">
        <div class="container">
            <div class="row" style="justify-content: center;">
                <div class="col-10">
                    <h2 class="mb-2">Reserve your Spot</h2>

                    <div class="border-content">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#regitration">Registration</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#login">login</a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            {{--regitration section--}}

                            <div class="tab-pane container active" id="regitration">
                                {{ Form::open(['route' => 'registrations.store','method'=>'POST','name'=>'registration_form'])}}
                                <div class="row reserve" >

                                    <div class="col-lg-6 col-12 div-field">
                                        <label>First Name <span>*</span></label>
                                        <input type="text" class="form-control" placeholder="Enter first name"  required name="first_name" >
                                    </div><!--col-12-->
                                    <div class="col-lg-6 col-12 div-field">
                                        <label>Last Name <span>*</span> </label>
                                        <input type="text" class="form-control" placeholder="Enter last name" required name="last_name" >
                                    </div><!--col-12-->

                                    <div class="col-lg-6 col-12 div-field">
                                        <label>Email <span>*</span> </label>
                                        <input type="email" class="form-control" placeholder="Enter email address" required name="email" >
                                    </div><!--col-12-->
                                    <div class="col-lg-6 col-12 div-field">
                                        <label>whatsApp Number  <span>*</span> </label>
                                        <input  class="form-control" placeholder="Enter mobile number"  id="phone-registration"  type="tel" required  >
                                        <input type="hidden" name="phone" id="full_phone">
                                        <span id="error-msg-registration" class="hide"></span>
                                    </div><!--col-12-->
{{--                                    <div class="col-lg-6 col-12 div-field">--}}
{{--                                        <label>Choose the Governorate <span>*</span> </label>--}}
{{--                                        <select name="governorate" required>--}}
{{--                                            <option value=""></option>--}}
{{--                                            <option value="Matruh">Matruh</option>--}}
{{--                                            <option value="Alexandria">Alexandria</option>--}}
{{--                                            <option value="Beheira" >Beheira</option>--}}
{{--                                            <option value="Kafr El Sheikh" >Kafr El Sheikh</option>--}}
{{--                                            <option value="Dakahlia" >Dakahlia</option>--}}
{{--                                            <option value="Damietta" >Damietta</option>--}}
{{--                                            <option value="Port Said">Port Said</option>--}}
{{--                                            <option value="North Sinai" >North Sinai</option>--}}
{{--                                            <option value="Gharbia">Gharbia</option>--}}
{{--                                            <option value="Monufia">Monufia</option>--}}
{{--                                            <option value="Qalyubia">Qalyubia</option>--}}
{{--                                            <option value="Sharqia">Sharqia</option>--}}
{{--                                            <option value="Ismailia">Ismailia</option>--}}
{{--                                            <option value="Giza">Giza</option>--}}
{{--                                            <option value="Faiyum">Faiyum</option>--}}
{{--                                            <option value="Cairo">Cairo</option>--}}
{{--                                            <option value="Suez">Suez</option>--}}
{{--                                            <option value="South Sinai" >South Sinai</option>--}}
{{--                                            <option value="Beni Suef">Beni Suef</option>--}}
{{--                                            <option value="Minya">Minya</option>--}}
{{--                                            <option value="New Valley">New Valley</option>--}}
{{--                                            <option value="Asyut">Asyut</option>--}}
{{--                                            <option value="Red Sea">Red Sea</option>--}}
{{--                                            <option value="Sohag">Sohag</option>--}}
{{--                                            <option value="Qena">Qena</option>--}}
{{--                                            <option value="Aswan">Aswan</option>--}}
{{--                                            <option value="Luxor">Luxor</option>--}}
{{--                                        </select>--}}
{{--                                    </div><!--col-12-->--}}

                                    <div class="col-lg-6 col-12 div-field">
                                        <label>Choose the event <span>*</span> </label>
                                        <select name="venue" id="venueSelect" required>
                                            {{--                                            <option value=""></option>--}}
                                            <option value="OBGYN Conference 16-17.9.2021" selected>OBGYN Conference 16-17.9.2021</option>
                                            <option value="LPLP (St.Regis Cairo) 24.9.2021">LPLP (St.Regis Cairo) 8.10.2021</option>
                                            <option value="LPLP (Golden Jewel, Alex) 8.10.2021">LPLP (Golden Jewel, Alex) 15.10.2021</option>
                                        </select>
                                    </div><!--col-12-->
                                    <div class="col-lg-6 col-12 div-field d-none" id="invited_by">
                                        <label>Invited By:<span>*</span> </label>
                                        <select name="invited_by" required >
                                            @foreach(medicalReps() as $key => $value )
                                                <option value="{{$value}}">{{$value}}</option>
                                            @endforeach
                                        </select>
                                    </div><!--col-12-->
                                    <div class="col-lg-6 col-12 div-field">
                                        <label>Register as <span>*</span> </label>
                                        <select name="register_as" id="register_as" required>
                                            <option value=""></option>
                                            <option value="Physician">Physician</option>
                                            <option value="Pharmacist">Pharmacist</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-6 col-12 div-field d-none" id="other">
                                        <label>Other <span>*</span> </label>
                                        <select name="other">
                                            <option value="">choose one</option>
                                            <option value="Staff">Staff</option>
                                            <option value="Celebrity">Celebrity</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-6 col-12 div-field d-none" id="physician">
                                        <label>Physician <span>*</span> </label>
                                        <select name="physician" id="physician_select">
                                            <option value="">choose one</option>
                                            <option value="Nutrition">Nutrition</option>
                                            <option value="Internal Medicine">Internal Medicine</option>
                                            <option value="Gynecology">Gynecology</option>
                                            <option value="Dermatology">Dermatology</option>
                                            <option value="General Practice">General Practice</option>
                                            <option value="Pediatrics">Pediatrics</option>
                                            <option value="Pediatrics">Pediatrics</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-6 col-12 div-field d-none" id="physician_other">
                                        <label>Other <span>*</span> </label>
                                        <input type="text" class="form-control" placeholder="" name="physician_other" >

                                    </div>
                                    <div class=" col-12">
                                        <div class="send">
                                            <button type="submit" id="registration_form">Submit <img src="{{asset('images/arrow.png')}}"></button>
                                        </div>
                                    </div><!--col-12-->


                                </div><!--row-->
                                {{Form::close()}}
                            </div><!--end tab1-->

                            {{--login section--}}
                            <div class="tab-pane container fade" id="login">

                                {{ Form::open(['route' => 'user.login','method'=>'POST','name'=>'login_form'])}}
                                <div class="row reserve login-div" >
                                    <div class="col-lg-6 col-12">
                                        <label>whatsApp Number </label>
                                        <input class="form-control" placeholder="Enter mobile number" id="phone-login"  type="tel" required >
                                        <input type="hidden" name="number_phone" id="full_phone_login">
                                        <span id="error_msg_login" class="hide"></span>
                                    </div><!--col-12-->
                                    <div class=" col-12">
                                        <div class="send">
                                            <button type="submit" id="login_form" >login <img src="{{asset('images/arrow.png')}}"></button>
                                        </div>
                                    </div><!--col-12-->
                                </div><!--row-->
                                {{Form::close()}}
                            </div><!--end tab2-->
                        </div>

                    </div>
                </div><!--col-10-->
            </div> <!--row-->
        </div><!--container-->


    </div><!--registration-div-->
</section><!--content-->

@endsection('content')
@push('js')
    <script>
        $('#register_as').on('change', function() {
             if (this.value === 'other'){
                 $('#other').removeClass('d-none');
             }else {
                 $('#other').addClass('d-none');
                 $('#other select').attr('required', false).val('');
             }
            if (this.value === 'Physician'){
                $('#physician').removeClass('d-none');
                $('#physician select').attr('required', true);
            }else {
                $('#physician').addClass('d-none');
                $('#physician select').attr('required', false).val('');
                $('#physician_other').addClass('d-none');
                $('#physician_other input').attr('required', false).removeAttr('value').val('');
            }
        });
        $('#physician_select').on('change', function() {
            if (this.value === 'other'){
                $('#physician_other').removeClass('d-none');
                $('#physician_other input').attr('required', true);
            }else {
                $('#physician_other').addClass('d-none');
                $('#physician_other input').attr('required', false).removeAttr('value').val('');
            }
        });
        $('#venueSelect').on('change', function() {
            if (this.value === 'OBGYN Conference 16-17.9.2021'){
                $('#invited_by').addClass('d-none');
            }else {
                $('#invited_by').removeClass('d-none');
            }
        });

    </script>
@endpush
