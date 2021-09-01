@extends('layouts.master_website')

@section('content')

    @include('layouts.includes.website.header')

    <section class="content">
        <div class="banner-survey">
            <img src="images/survey-banner.png">

        </div>
        <!--banner-survey-->
        {{ Form::open(['route' => 'survey.store', 'method' => 'POST']) }}
        <div class="survey">
            <div class="container">
                <div class="survey-content">
                    <h4>Survey Questions</h4>

                    <div class="progress-steps row pt-4">
                        <div class="done col-12">
                            <div class="step">
                                <div class="text">
                                    <h3>How satisfied were you with the event?</h3>
                                    <div class="content-step">
                                        <div class="content-step flex-radio">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="question_1" class="custom-control-input"
                                                       id="customRadio_question_1" value="1">
                                                <label class="custom-control-label" for="customRadio_question_1">1</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="question_1" class="custom-control-input"
                                                       id="customRadio2_question_1" value="2">
                                                <label class="custom-control-label" for="customRadio2_question_1">2</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="question_1" class="custom-control-input"
                                                       id="customRadio3_question_1" value="3">
                                                <label class="custom-control-label" for="customRadio3_question_1">3</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="question_1" class="custom-control-input"
                                                       id="customRadio4_question_1" value="4">
                                                <label class="custom-control-label" for="customRadio4_question_1">4</label>
                                            </div>

                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="question_1" class="custom-control-input"
                                                       id="customRadio5_question_1" value="5">
                                                <label class="custom-control-label" for="customRadio5_question_1">5</label>
                                            </div>

                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="question_1" class="custom-control-input"
                                                       id="customRadio6_question_1" value="6">
                                                <label class="custom-control-label" for="customRadio6_question_1">6</label>
                                            </div>

                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="question_1" class="custom-control-input"
                                                       id="customRadio7_question_1" value="7">
                                                <label class="custom-control-label" for="customRadio7_question_1">7</label>
                                            </div>

                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="question_1" class="custom-control-input"
                                                       id="customRadio8_question_1" value="8">
                                                <label class="custom-control-label" for="customRadio8_question_1">8</label>
                                            </div>

                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="question_1" class="custom-control-input"
                                                       id="customRadio9_question_1" value="9">
                                                <label class="custom-control-label" for="customRadio9_question_1">9</label>
                                            </div>

                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="question_1" class="custom-control-input"
                                                       id="customRadio10_question_1" value="10">
                                                <label class="custom-control-label" for="customRadio10_question_1">10</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="done col-12">
                            <div class="step">
                                <div class="text">
                                    <h3>How satisfied were you with the logistics?</h3>
                                    <div class="content-step">
                                        <div class="content-step flex-radio">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="question_2" class="custom-control-input"
                                                       id="customRadio_question_2" value="1">
                                                <label class="custom-control-label" for="customRadio_question_2">1</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="question_2" class="custom-control-input"
                                                       id="customRadio2_question_2" value="2">
                                                <label class="custom-control-label" for="customRadio2_question_2">2</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="question_2" class="custom-control-input"
                                                       id="customRadio3_question_2" value="3">
                                                <label class="custom-control-label" for="customRadio3_question_2">3</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="question_2" class="custom-control-input"
                                                       id="customRadio4_question_2" value="4">
                                                <label class="custom-control-label" for="customRadio4_question_2">4</label>
                                            </div>

                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="question_2" class="custom-control-input"
                                                       id="customRadio5_question_2" value="5">
                                                <label class="custom-control-label" for="customRadio5_question_2">5</label>
                                            </div>

                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="question_2" class="custom-control-input"
                                                       id="customRadio6_question_2" value="6">
                                                <label class="custom-control-label" for="customRadio6_question_2">6</label>
                                            </div>

                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="question_2" class="custom-control-input"
                                                       id="customRadio7_question_2" value="7">
                                                <label class="custom-control-label" for="customRadio7_question_2">7</label>
                                            </div>

                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="question_2" class="custom-control-input"
                                                       id="customRadio8_question_2" value="8">
                                                <label class="custom-control-label" for="customRadio8_question_2">8</label>
                                            </div>

                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="question_2" class="custom-control-input"
                                                       id="customRadio9_question_2" value="9">
                                                <label class="custom-control-label" for="customRadio9_question_2">9</label>
                                            </div>

                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="question_2" class="custom-control-input"
                                                       id="customRadio10_question_2" value="10">
                                                <label class="custom-control-label" for="customRadio10_question_2">10</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="done col-12">
                            <div class="step">
                                <div class="text">
                                    <h3>Communication emails</h3>
                                    <div class="content-step">
                                        <div class="content-step flex-radio">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="question_3" class="custom-control-input"
                                                       id="customRadio_question_3" value="1">
                                                <label class="custom-control-label" for="customRadio_question_3">1</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="question_3" class="custom-control-input"
                                                       id="customRadio2_question_3" value="2">
                                                <label class="custom-control-label" for="customRadio2_question_3">2</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="question_3" class="custom-control-input"
                                                       id="customRadio3_question_3" value="3">
                                                <label class="custom-control-label" for="customRadio3_question_3">3</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="question_3" class="custom-control-input"
                                                       id="customRadio4_question_3" value="4">
                                                <label class="custom-control-label" for="customRadio4_question_3">4</label>
                                            </div>

                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="question_3" class="custom-control-input"
                                                       id="customRadio5_question_3" value="5">
                                                <label class="custom-control-label" for="customRadio5_question_3">5</label>
                                            </div>

                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="question_3" class="custom-control-input"
                                                       id="customRadio6_question_3" value="6">
                                                <label class="custom-control-label" for="customRadio6_question_3">6</label>
                                            </div>

                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="question_3" class="custom-control-input"
                                                       id="customRadio7_question_3" value="7">
                                                <label class="custom-control-label" for="customRadio7_question_3">7</label>
                                            </div>

                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="question_3" class="custom-control-input"
                                                       id="customRadio8_question_3" value="8">
                                                <label class="custom-control-label" for="customRadio8_question_3">8</label>
                                            </div>

                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="question_3" class="custom-control-input"
                                                       id="customRadio9_question_3" value="9">
                                                <label class="custom-control-label" for="customRadio9_question_3">9</label>
                                            </div>

                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="question_3" class="custom-control-input"
                                                       id="customRadio10_question_3" value="10">
                                                <label class="custom-control-label" for="customRadio10_question_3">10</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="done col-12">
                            <div class="step">
                                <div class="text">
                                    <h3>Welcome activity</h3>
                                    <div class="content-step">
                                        <div class="content-step flex-radio">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="question_4" class="custom-control-input"
                                                       id="customRadio_question_4" value="1">
                                                <label class="custom-control-label" for="customRadio_question_4">1</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="question_4" class="custom-control-input"
                                                       id="customRadio2_question_4" value="2">
                                                <label class="custom-control-label" for="customRadio2_question_4">2</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="question_4" class="custom-control-input"
                                                       id="customRadio3_question_4" value="3">
                                                <label class="custom-control-label" for="customRadio3_question_4">3</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="question_4" class="custom-control-input"
                                                       id="customRadio4_question_4" value="4">
                                                <label class="custom-control-label" for="customRadio4_question_4">4</label>
                                            </div>

                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="question_4" class="custom-control-input"
                                                       id="customRadio5_question_4" value="5">
                                                <label class="custom-control-label" for="customRadio5_question_4">5</label>
                                            </div>

                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="question_4" class="custom-control-input"
                                                       id="customRadio6_question_4" value="6">
                                                <label class="custom-control-label" for="customRadio6_question_4">6</label>
                                            </div>

                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="question_4" class="custom-control-input"
                                                       id="customRadio7_question_4" value="7">
                                                <label class="custom-control-label" for="customRadio7_question_4">7</label>
                                            </div>

                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="question_4" class="custom-control-input"
                                                       id="customRadio8_question_4" value="8">
                                                <label class="custom-control-label" for="customRadio8_question_4">8</label>
                                            </div>

                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="question_4" class="custom-control-input"
                                                       id="customRadio9_question_4" value="9">
                                                <label class="custom-control-label" for="customRadio9_question_4">9</label>
                                            </div>

                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="question_4" class="custom-control-input"
                                                       id="customRadio10_question_4" value="10">
                                                <label class="custom-control-label" for="customRadio10_question_4">10</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="done col-12">
                            <div class="step">
                                <div class="text">
                                    <h3>Museum Tour</h3>
                                    <div class="content-step">
                                        <div class="content-step flex-radio">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="question_5" class="custom-control-input"
                                                       id="customRadio_question_5" value="1">
                                                <label class="custom-control-label" for="customRadio_question_5">1</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="question_5" class="custom-control-input"
                                                       id="customRadio2_question_5" value="2">
                                                <label class="custom-control-label" for="customRadio2_question_5">2</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="question_5" class="custom-control-input"
                                                       id="customRadio3_question_5" value="3">
                                                <label class="custom-control-label" for="customRadio3_question_5">3</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="question_5" class="custom-control-input"
                                                       id="customRadio4_question_5" value="4">
                                                <label class="custom-control-label" for="customRadio4_question_5">4</label>
                                            </div>

                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="question_5" class="custom-control-input"
                                                       id="customRadio5_question_5" value="5">
                                                <label class="custom-control-label" for="customRadio5_question_5">5</label>
                                            </div>

                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="question_5" class="custom-control-input"
                                                       id="customRadio6_question_5" value="6">
                                                <label class="custom-control-label" for="customRadio6_question_5">6</label>
                                            </div>

                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="question_5" class="custom-control-input"
                                                       id="customRadio7_question_5" value="7">
                                                <label class="custom-control-label" for="customRadio7_question_5">7</label>
                                            </div>

                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="question_5" class="custom-control-input"
                                                       id="customRadio8_question_5" value="8">
                                                <label class="custom-control-label" for="customRadio8_question_5">8</label>
                                            </div>

                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="question_5" class="custom-control-input"
                                                       id="customRadio9_question_5" value="9">
                                                <label class="custom-control-label" for="customRadio9_question_5">9</label>
                                            </div>

                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="question_5" class="custom-control-input"
                                                       id="customRadio10_question_5" value="10">
                                                <label class="custom-control-label" for="customRadio10_question_5">10</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="done col-12">
                            <div class="step">
                                <div class="text">
                                    <h3>Venue</h3>
                                    <div class="content-step">
                                        <div class="content-step flex-radio">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="question_6" class="custom-control-input"
                                                       id="customRadio_question_6" value="1">
                                                <label class="custom-control-label" for="customRadio_question_6">1</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="question_6" class="custom-control-input"
                                                       id="customRadio2_question_6" value="2">
                                                <label class="custom-control-label" for="customRadio2_question_6">2</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="question_6" class="custom-control-input"
                                                       id="customRadio3_question_6" value="3">
                                                <label class="custom-control-label" for="customRadio3_question_6">3</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="question_6" class="custom-control-input"
                                                       id="customRadio4_question_6" value="4">
                                                <label class="custom-control-label" for="customRadio4_question_6">4</label>
                                            </div>

                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="question_6" class="custom-control-input"
                                                       id="customRadio5_question_6" value="5">
                                                <label class="custom-control-label" for="customRadio5_question_6">5</label>
                                            </div>

                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="question_6" class="custom-control-input"
                                                       id="customRadio6_question_6" value="6">
                                                <label class="custom-control-label" for="customRadio6_question_6">6</label>
                                            </div>

                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="question_6" class="custom-control-input"
                                                       id="customRadio7_question_6" value="7">
                                                <label class="custom-control-label" for="customRadio7_question_6">7</label>
                                            </div>

                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="question_6" class="custom-control-input"
                                                       id="customRadio8_question_6" value="8">
                                                <label class="custom-control-label" for="customRadio8_question_6">8</label>
                                            </div>

                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="question_6" class="custom-control-input"
                                                       id="customRadio9_question_6" value="9">
                                                <label class="custom-control-label" for="customRadio9_question_6">9</label>
                                            </div>

                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="question_6" class="custom-control-input"
                                                       id="customRadio10_question_6" value="10">
                                                <label class="custom-control-label" for="customRadio10_question_6">10</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="done col-12">
                            <div class="step">
                                <div class="text">
                                    <h3>Activities</h3>
                                    <div class="content-step">
                                        <div class="content-step flex-radio">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="question_7" class="custom-control-input"
                                                       id="customRadio_question_7" value="1">
                                                <label class="custom-control-label" for="customRadio_question_7">1</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="question_7" class="custom-control-input"
                                                       id="customRadio2_question_7" value="2">
                                                <label class="custom-control-label" for="customRadio2_question_7">2</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="question_7" class="custom-control-input"
                                                       id="customRadio3_question_7" value="3">
                                                <label class="custom-control-label" for="customRadio3_question_7">3</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="question_7" class="custom-control-input"
                                                       id="customRadio4_question_7" value="4">
                                                <label class="custom-control-label" for="customRadio4_question_7">4</label>
                                            </div>

                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="question_7" class="custom-control-input"
                                                       id="customRadio5_question_7" value="5">
                                                <label class="custom-control-label" for="customRadio5_question_7">5</label>
                                            </div>

                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="question_7" class="custom-control-input"
                                                       id="customRadio6_question_7" value="6">
                                                <label class="custom-control-label" for="customRadio6_question_7">6</label>
                                            </div>

                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="question_7" class="custom-control-input"
                                                       id="customRadio7_question_7" value="7">
                                                <label class="custom-control-label" for="customRadio7_question_7">7</label>
                                            </div>

                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="question_7" class="custom-control-input"
                                                       id="customRadio8_question_7" value="8">
                                                <label class="custom-control-label" for="customRadio8_question_7">8</label>
                                            </div>

                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="question_7" class="custom-control-input"
                                                       id="customRadio9_question_7" value="9">
                                                <label class="custom-control-label" for="customRadio9_question_7">9</label>
                                            </div>

                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="question_7" class="custom-control-input"
                                                       id="customRadio10_question_7" value="10">
                                                <label class="custom-control-label" for="customRadio10_question_7">10</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="done col-12">
                            <div class="step">
                                <div class="text">
                                    <h3>Additional feedback on logistics</h3>
                                    <div class="content-step">
                                        <input name="question_8" placeholder="Please write your feedback...">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="done col-12">
                            <div class="step">
                                <div class="text">
                                    <h3>How satisfied were you with the session content?</h3>
                                    <div class="content-step">
                                        <div class="content-step flex-radio">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="question_9" class="custom-control-input"
                                                       id="customRadio_question_9" value="1">
                                                <label class="custom-control-label" for="customRadio_question_9">1</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="question_9" class="custom-control-input"
                                                       id="customRadio2_question_9" value="2">
                                                <label class="custom-control-label" for="customRadio2_question_9">2</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="question_9" class="custom-control-input"
                                                       id="customRadio3_question_9" value="3">
                                                <label class="custom-control-label" for="customRadio3_question_9">3</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="question_9" class="custom-control-input"
                                                       id="customRadio4_question_9" value="4">
                                                <label class="custom-control-label" for="customRadio4_question_9">4</label>
                                            </div>

                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="question_9" class="custom-control-input"
                                                       id="customRadio5_question_9" value="5">
                                                <label class="custom-control-label" for="customRadio5_question_9">5</label>
                                            </div>

                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="question_9" class="custom-control-input"
                                                       id="customRadio6_question_9" value="6">
                                                <label class="custom-control-label" for="customRadio6_question_9">6</label>
                                            </div>

                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="question_9" class="custom-control-input"
                                                       id="customRadio7_question_9" value="7">
                                                <label class="custom-control-label" for="customRadio7_question_9">7</label>
                                            </div>

                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="question_9" class="custom-control-input"
                                                       id="customRadio8_question_9" value="8">
                                                <label class="custom-control-label" for="customRadio8_question_9">8</label>
                                            </div>

                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="question_9" class="custom-control-input"
                                                       id="customRadio9_question_9" value="9">
                                                <label class="custom-control-label" for="customRadio9_question_9">9</label>
                                            </div>

                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="question_9" class="custom-control-input"
                                                       id="customRadio10_question_9" value="10">
                                                <label class="custom-control-label" for="customRadio10_question_9">10</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="done col-12">
                            <div class="step">
                                <div class="text">
                                    <h3>Any additional comments regarding the sessions or overall agenda?</h3>
                                    <div class="content-step">
                                        <input name="question_10" placeholder="Please write your feedback...">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
{{--                    <ul class="progress-steps">--}}
{{--                        <li>--}}
{{--                            <div class="step">--}}
{{--                                <div class="text">--}}
{{--                                    <h3>On a scale from 1 to 10, To what extent do you believe in the role of Benfotiamine--}}
{{--                                        in delaying diabetic complications? </h3>--}}
{{--                                    <div class="content-step flex-radio">--}}
{{--                                        <div class="custom-control custom-radio">--}}
{{--                                            <input type="radio" name="question_11" class="custom-control-input"--}}
{{--                                                id="customRadio_question_11" value="1">--}}
{{--                                            <label class="custom-control-label" for="customRadio_question_11">1</label>--}}
{{--                                        </div>--}}
{{--                                        <div class="custom-control custom-radio">--}}
{{--                                            <input type="radio" name="question_11" class="custom-control-input"--}}
{{--                                                id="customRadio2_question_11" value="2">--}}
{{--                                            <label class="custom-control-label" for="customRadio2_question_11">2</label>--}}
{{--                                        </div>--}}
{{--                                        <div class="custom-control custom-radio">--}}
{{--                                            <input type="radio" name="question_11" class="custom-control-input"--}}
{{--                                                id="customRadio3_question_11" value="3">--}}
{{--                                            <label class="custom-control-label" for="customRadio3_question_11">3</label>--}}
{{--                                        </div>--}}
{{--                                        <div class="custom-control custom-radio">--}}
{{--                                            <input type="radio" name="question_11" class="custom-control-input"--}}
{{--                                                id="customRadio4_question_11" value="4">--}}
{{--                                            <label class="custom-control-label" for="customRadio4_question_11">4</label>--}}
{{--                                        </div>--}}

{{--                                        <div class="custom-control custom-radio">--}}
{{--                                            <input type="radio" name="question_11" class="custom-control-input"--}}
{{--                                                id="customRadio5_question_11" value="5">--}}
{{--                                            <label class="custom-control-label" for="customRadio5_question_11">5</label>--}}
{{--                                        </div>--}}

{{--                                        <div class="custom-control custom-radio">--}}
{{--                                            <input type="radio" name="question_11" class="custom-control-input"--}}
{{--                                                id="customRadio6_question_11" value="6">--}}
{{--                                            <label class="custom-control-label" for="customRadio6_question_11">6</label>--}}
{{--                                        </div>--}}

{{--                                        <div class="custom-control custom-radio">--}}
{{--                                            <input type="radio" name="question_11" class="custom-control-input"--}}
{{--                                                id="customRadio7_question_11" value="7">--}}
{{--                                            <label class="custom-control-label" for="customRadio7_question_11">7</label>--}}
{{--                                        </div>--}}

{{--                                        <div class="custom-control custom-radio">--}}
{{--                                            <input type="radio" name="question_11" class="custom-control-input"--}}
{{--                                                id="customRadio8_question_11" value="8">--}}
{{--                                            <label class="custom-control-label" for="customRadio8_question_11">8</label>--}}
{{--                                        </div>--}}

{{--                                        <div class="custom-control custom-radio">--}}
{{--                                            <input type="radio" name="question_11" class="custom-control-input"--}}
{{--                                                id="customRadio9_question_11" value="9">--}}
{{--                                            <label class="custom-control-label" for="customRadio9_question_11">9</label>--}}
{{--                                        </div>--}}

{{--                                        <div class="custom-control custom-radio">--}}
{{--                                            <input type="radio" name="question_11" class="custom-control-input"--}}
{{--                                                id="customRadio10_question_11" value="10">--}}
{{--                                            <label class="custom-control-label" for="customRadio10_question_11">10</label>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                </div>--}}
{{--                                <!--text-->--}}
{{--                            </div>--}}
{{--                            <!--step-->--}}

{{--                        </li>--}}


{{--                        <li>--}}
{{--                            <div class="step">--}}
{{--                                <div class="text">--}}
{{--                                    <h3>On a scale from 1 to 10, To what extent do would you recommend Milga Advance over--}}
{{--                                        injectable vitamin B complex?</h3>--}}
{{--                                    <div class="content-step flex-radio">--}}
{{--                                        <div class="custom-control custom-radio">--}}
{{--                                            <input type="radio" name="question_12" class="custom-control-input"--}}
{{--                                                id="customRadio_question_12" value="1">--}}
{{--                                            <label class="custom-control-label" for="customRadio_question_12">1</label>--}}
{{--                                        </div>--}}
{{--                                        <div class="custom-control custom-radio">--}}
{{--                                            <input type="radio" name="question_12" class="custom-control-input"--}}
{{--                                                id="customRadio2_question_12" value="2">--}}
{{--                                            <label class="custom-control-label" for="customRadio2_question_12">2</label>--}}
{{--                                        </div>--}}
{{--                                        <div class="custom-control custom-radio">--}}
{{--                                            <input type="radio" name="question_12" class="custom-control-input"--}}
{{--                                                id="customRadio3_question_12" value="3">--}}
{{--                                            <label class="custom-control-label" for="customRadio3_question_12">3</label>--}}
{{--                                        </div>--}}
{{--                                        <div class="custom-control custom-radio">--}}
{{--                                            <input type="radio" name="question_12" class="custom-control-input"--}}
{{--                                                id="customRadio4_question_12" value="4">--}}
{{--                                            <label class="custom-control-label" for="customRadio4_question_12">4</label>--}}
{{--                                        </div>--}}

{{--                                        <div class="custom-control custom-radio">--}}
{{--                                            <input type="radio" name="question_12" class="custom-control-input"--}}
{{--                                                id="customRadio5_question_12" value="5">--}}
{{--                                            <label class="custom-control-label" for="customRadio5_question_12">5</label>--}}
{{--                                        </div>--}}

{{--                                        <div class="custom-control custom-radio">--}}
{{--                                            <input type="radio" name="question_12" class="custom-control-input"--}}
{{--                                                id="customRadio6_question_12" value="6">--}}
{{--                                            <label class="custom-control-label" for="customRadio6_question_12">6</label>--}}
{{--                                        </div>--}}

{{--                                        <div class="custom-control custom-radio">--}}
{{--                                            <input type="radio" name="question_12" class="custom-control-input"--}}
{{--                                                id="customRadio7_question_12" value="7">--}}
{{--                                            <label class="custom-control-label" for="customRadio7_question_12">7</label>--}}
{{--                                        </div>--}}

{{--                                        <div class="custom-control custom-radio">--}}
{{--                                            <input type="radio" name="question_12" class="custom-control-input"--}}
{{--                                                id="customRadio8_question_12" value="8">--}}
{{--                                            <label class="custom-control-label" for="customRadio8_question_12">8</label>--}}
{{--                                        </div>--}}

{{--                                        <div class="custom-control custom-radio">--}}
{{--                                            <input type="radio" name="question_12" class="custom-control-input"--}}
{{--                                                id="customRadio9_question_12" value="9">--}}
{{--                                            <label class="custom-control-label" for="customRadio9_question_12">9</label>--}}
{{--                                        </div>--}}

{{--                                        <div class="custom-control custom-radio">--}}
{{--                                            <input type="radio" name="question_12" class="custom-control-input"--}}
{{--                                                id="customRadio10_question_12" value="10">--}}
{{--                                            <label class="custom-control-label" for="customRadio10_question_12">10</label>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                </div>--}}
{{--                                <!--text-->--}}
{{--                            </div>--}}
{{--                            <!--step-->--}}

{{--                        </li>--}}


{{--                        <li>--}}
{{--                            <div class="step">--}}
{{--                                <div class="text">--}}
{{--                                    <h3>On a scale from 1 to 10, To what extent were you satisfied by the whole event?</h3>--}}
{{--                                    <div class="content-step flex-radio">--}}
{{--                                        <div class="custom-control custom-radio">--}}
{{--                                            <input type="radio" name="question_13" class="custom-control-input"--}}
{{--                                                id="customRadio_question_13" value="1">--}}
{{--                                            <label class="custom-control-label" for="customRadio_question_13">1</label>--}}
{{--                                        </div>--}}
{{--                                        <div class="custom-control custom-radio">--}}
{{--                                            <input type="radio" name="question_13" class="custom-control-input"--}}
{{--                                                id="customRadio2_question_13" value="2">--}}
{{--                                            <label class="custom-control-label" for="customRadio2_question_13">2</label>--}}
{{--                                        </div>--}}
{{--                                        <div class="custom-control custom-radio">--}}
{{--                                            <input type="radio" name="question_13" class="custom-control-input"--}}
{{--                                                id="customRadio3_question_13" value="3">--}}
{{--                                            <label class="custom-control-label" for="customRadio3_question_13">3</label>--}}
{{--                                        </div>--}}
{{--                                        <div class="custom-control custom-radio">--}}
{{--                                            <input type="radio" name="question_13" class="custom-control-input"--}}
{{--                                                id="customRadio4_question_13" value="4">--}}
{{--                                            <label class="custom-control-label" for="customRadio4_question_13">4</label>--}}
{{--                                        </div>--}}

{{--                                        <div class="custom-control custom-radio">--}}
{{--                                            <input type="radio" name="question_13" class="custom-control-input"--}}
{{--                                                id="customRadio5_question_13" value="5">--}}
{{--                                            <label class="custom-control-label" for="customRadio5_question_13">5</label>--}}
{{--                                        </div>--}}

{{--                                        <div class="custom-control custom-radio">--}}
{{--                                            <input type="radio" name="question_13" class="custom-control-input"--}}
{{--                                                id="customRadio6_question_13" value="6">--}}
{{--                                            <label class="custom-control-label" for="customRadio6_question_13">6</label>--}}
{{--                                        </div>--}}

{{--                                        <div class="custom-control custom-radio">--}}
{{--                                            <input type="radio" name="question_13" class="custom-control-input"--}}
{{--                                                id="customRadio7_question_13" value="7">--}}
{{--                                            <label class="custom-control-label" for="customRadio7_question_13">7</label>--}}
{{--                                        </div>--}}

{{--                                        <div class="custom-control custom-radio">--}}
{{--                                            <input type="radio" name="question_13" class="custom-control-input"--}}
{{--                                                id="customRadio8_question_13" value="8">--}}
{{--                                            <label class="custom-control-label" for="customRadio8_question_13">8</label>--}}
{{--                                        </div>--}}

{{--                                        <div class="custom-control custom-radio">--}}
{{--                                            <input type="radio" name="question_13" class="custom-control-input"--}}
{{--                                                id="customRadio9_question_13" value="9">--}}
{{--                                            <label class="custom-control-label" for="customRadio9_question_13">9</label>--}}
{{--                                        </div>--}}

{{--                                        <div class="custom-control custom-radio">--}}
{{--                                            <input type="radio" name="question_13" class="custom-control-input"--}}
{{--                                                id="customRadio10_question_13" value="10">--}}
{{--                                            <label class="custom-control-label" for="customRadio10_question_13">10</label>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                </div>--}}
{{--                                <!--text-->--}}
{{--                            </div>--}}
{{--                            <!--step-->--}}

{{--                        </li>--}}


{{--                        <li>--}}
{{--                            <div class="step">--}}
{{--                                <div class="text">--}}
{{--                                    <h3>On a scale from 1 to 10, To what extent were you satisfied by the sepakers--}}
{{--                                        presentations today?</h3>--}}
{{--                                    <div class="content-step flex-radio">--}}
{{--                                        <div class="custom-control custom-radio">--}}
{{--                                            <input type="radio" name="question_14" class="custom-control-input"--}}
{{--                                                id="customRadio_question_14" value="1">--}}
{{--                                            <label class="custom-control-label" for="customRadio_question_14">1</label>--}}
{{--                                        </div>--}}
{{--                                        <div class="custom-control custom-radio">--}}
{{--                                            <input type="radio" name="question_14" class="custom-control-input"--}}
{{--                                                id="customRadio2_question_14" value="2">--}}
{{--                                            <label class="custom-control-label" for="customRadio2_question_14">2</label>--}}
{{--                                        </div>--}}
{{--                                        <div class="custom-control custom-radio">--}}
{{--                                            <input type="radio" name="question_14" class="custom-control-input"--}}
{{--                                                id="customRadio3_question_14" value="3">--}}
{{--                                            <label class="custom-control-label" for="customRadio3_question_14">3</label>--}}
{{--                                        </div>--}}
{{--                                        <div class="custom-control custom-radio">--}}
{{--                                            <input type="radio" name="question_14" class="custom-control-input"--}}
{{--                                                id="customRadio4_question_14" value="4">--}}
{{--                                            <label class="custom-control-label" for="customRadio4_question_14">4</label>--}}
{{--                                        </div>--}}


{{--                                        <div class="custom-control custom-radio">--}}
{{--                                            <input type="radio" name="question_14" class="custom-control-input"--}}
{{--                                                id="customRadio5_question_14" value="5">--}}
{{--                                            <label class="custom-control-label" for="customRadio5_question_14">5</label>--}}
{{--                                        </div>--}}

{{--                                        <div class="custom-control custom-radio">--}}
{{--                                            <input type="radio" name="question_14" class="custom-control-input"--}}
{{--                                                id="customRadio6_question_14" value="6">--}}
{{--                                            <label class="custom-control-label" for="customRadio6_question_14">6</label>--}}
{{--                                        </div>--}}

{{--                                        <div class="custom-control custom-radio">--}}
{{--                                            <input type="radio" name="question_14" class="custom-control-input"--}}
{{--                                                id="customRadio7_question_14" value="7">--}}
{{--                                            <label class="custom-control-label" for="customRadio7_question_14">7</label>--}}
{{--                                        </div>--}}

{{--                                        <div class="custom-control custom-radio">--}}
{{--                                            <input type="radio" name="question_14" class="custom-control-input"--}}
{{--                                                id="customRadio8_question_14" value="8">--}}
{{--                                            <label class="custom-control-label" for="customRadio8_question_14">8</label>--}}
{{--                                        </div>--}}

{{--                                        <div class="custom-control custom-radio">--}}
{{--                                            <input type="radio" name="question_14" class="custom-control-input"--}}
{{--                                                id="customRadio9_question_14" value="9">--}}
{{--                                            <label class="custom-control-label" for="customRadio9_question_14">9</label>--}}
{{--                                        </div>--}}

{{--                                        <div class="custom-control custom-radio">--}}
{{--                                            <input type="radio" name="question_14" class="custom-control-input"--}}
{{--                                                id="customRadio10_question_14" value="10">--}}
{{--                                            <label class="custom-control-label" for="customRadio10_question_14">10</label>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                </div>--}}
{{--                                <!--text-->--}}
{{--                            </div>--}}
{{--                            <!--step-->--}}

{{--                        </li>--}}

{{--                    </ul>--}}
                    <div class="btn-start2">
                        <button type="submit">Submit <span><img src="images/arrow.png"></span></button>
                    </div>
                    <!--btn-start-->
                </div>
            </div>
            <!--container-->
        </div>
        <!--survey-->
        {{ Form::close() }}

    </section>
    <!--content-->


@endsection
