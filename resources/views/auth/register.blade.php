@extends('layouts.app')

@section('content')

    <style type="text/css">
        .error {
            color: red;
        }
        .login_btn_wrapper .login_btn {
            text-align: center;
            text-transform: uppercase;
        }
        .login_wrapper .btn {
            color: #fff;
            width: 100%;
            height: 50px;
            padding: 6px 25px;
            line-height: 36px;
            margin-bottom: 20px;
            text-align: center;
            border-radius: 8px;
            background: #23c0e9;
            font-size: 16px;
            border: #23c0e9 solid 1px;
        }
    </style>

    <!-- jp register wrapper start -->
    <div class="register_section">
        <!-- register_form_wrapper -->
        <div class="register_tab_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div role="tabpanel">
                            <!-- Nav tabs -->
                            <ul id="tabOne" class="nav register-tabs">
                                <li class="active"><a href="#contentOne-1" data-toggle="tab">personal account <br> <span>i am looking for a job</span></a>
                                </li>
                                <li><a href="#contentOne-2" data-toggle="tab">company account <br> <span>We are hiring Employees</span></a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade in active register_left_form" id="contentOne-1">
                                    
                                    <div class="jp_regiter_top_heading">
                                        <p>Fields with * are mandetory </p>
                                    </div>
                                    <div class="row">
                                        <form method="POST" id="form1" action="{{ route('register') }}">
                                                @csrf
                                            <input type="hidden" name="account" value="personal">
                                            <!--Form Group-->
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" id="fname" name="fname" value="" placeholder="First Name*">
                                            </div>

                                            <!--Form Group-->
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" id="lname" name="lname" value="" placeholder="Last Name*">
                                            </div>

                                            <!--Form Group-->
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">

                                                <input type="text" name="email" value="" placeholder="Email*">
                                            </div>
                                            <!--Form Group-->
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">

                                                <input type="password" id="password" name="password" value="" placeholder=" password*">
                                            </div>
                                            <!--Form Group-->
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                <input type="password" id="password-confirm" name="password_confirmation" value="" placeholder="re-enter password*">
                                            </div>
                                            <!--Form Group-->
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">

                                                <input type="text" id="location" name="location" value="" placeholder="current location">

                                            </div>
                                            <!--Form Group-->
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12 custom_input">
                                                <input type="file" name="resume">
                                                <p>DOC, DOCX, RTF, PDF - 300KB MAX PREFERRED CV FORMAT - DOCX FILE</p>
                                            </div>
                                            <!--Form Group-->
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">

                                                <input type="text" id="phone" name="phone" value="" placeholder="phone">
                                            </div>
                                            </div>

                                            <div class="login_btn_wrapper register_btn_wrapper login_wrapper ">
                                                <button type="submit" class="btn btn-primary login_btn">Register</button>
                                                <!-- <a href="/" class="btn btn-primary login_btn"> register </a> -->
                                            </div>
                                        </form>
                                    <div class="login_message">
                                        <p>Already a member? <a href="/login"> Login Here </a> </p>
                                    </div>
                                    </div>

                                <div class="tab-pane fade register_left_form" id="contentOne-2">

                                    <div class="jp_regiter_top_heading">
                                        <p>Fields with * are mandetory </p>
                                    </div>
                                    <div class="row clearfix">
                                    <form method="POST" id="form2" action="{{ route('register') }}">
                                                    @csrf
                                        <input type="hidden" name="account" value="company">
                                        <!--Form Group-->
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="fname" name="fname" value="" placeholder="First Name*">
                                        </div>

                                        <!--Form Group-->
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="lname" name="lname" value="" placeholder="Last Name*">
                                        </div>

                                        <!--Form Group-->
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="email" name="email" value="" placeholder="Email*">
                                        </div>
                                        <!--Form Group-->
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">

                                            <input type="password" id="password" name="password" value="" placeholder="password*">
                                        </div>
                                        <!--Form Group-->
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">

                                            <input type="password" id="password-confirm" name="password_confirmation" value="" placeholder="re-enter password*">
                                        </div>

                                        <!--Form Group-->
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">

                                            <input type="text" name="phone" value="" placeholder="phone">
                                        </div>

                                        <!--Form Group-->
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">

                                            <input type="text" name="company" value="" placeholder="company name">

                                        </div>

                                        <!--Form Group-->
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">

                                            <input type="text" name="website" value="" placeholder="website">

                                        </div>
                                        <!--Form Group-->
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">

                                            <input type="text" name="address" value="" placeholder="address line">
                                        </div>

                                    </div>

                                    <div class="login_btn_wrapper register_btn_wrapper login_wrapper ">
                                        <button type="submit" class="btn btn-primary login_btn">Register</button>
                                        <!-- <a href="/" class="btn btn-primary login_btn"> register </a> -->
                                    </div>
                                    <div class="login_message">
                                        <p>Already a member? <a href="login"> Login Here </a> </p>
                                    </div>

                                </div>

                            </div>
                            <p class="btm_txt_register_form">In case you are using a public/shared computer we recommend that you logout to prevent any un-authorized access to your account</p>
                        </div>
                    </div>
                </div>
            </div>
</div></form>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script src="http://ajax.microsoft.com/ajax/jquery.validate/1.7/additional-methods.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $( "#form1" ).validate({
            rules: {
                fname: {
                  required: true,
                  lettersonly: true,
                },
                lname: {
                  required: true,
                  lettersonly: true,
                },
                email: {
                    required: true,
                    email: true,
                },
                password: {
                    required:true,
                    minlength: 6,
                },
                rePassword: {
                    equalTo: '#password'
                },
                resume: {
                    extension: "doc|docx|rtf|pdf",
                }
            }
        });

        $( "#form2" ).validate({
            rules: {
                fname: {
                  required: true,
                  lettersonly: true,
                },
                lname: {
                  required: true,
                  lettersonly: true,
                },
                email: {
                    required: true,
                    email: true,
                },
                password: {
                    required:true,
                    minlength: 6,
                },
                rePassword: {
                    required: true,
                    equalTo: '#password2'
                }
            }
        });

    });
</script>    

@endsection
