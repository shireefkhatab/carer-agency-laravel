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

    
          <!-- jp Tittle Wrapper Start -->
            <div class="jp_tittle_main_wrapper">
        <div class="jp_tittle_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_tittle_heading_wrapper">
                        <div class="jp_tittle_heading">
                            <h2>Login</h2>
                        </div>
                        <div class="jp_tittle_breadcrumb_main_wrapper">
                            <div class="jp_tittle_breadcrumb_wrapper">
                                <ul>
                                    <li><a href="/">Home</a> <i class="fa fa-angle-right"></i></li>
                                    <li>Login</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jp Tittle Wrapper End -->
    
    <!-- jp login wrapper start -->
    <div class="login_section">
        <!-- login_form_wrapper -->
        <div class="login_form_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <!-- login_wrapper -->
                        <h1>LOGIN TO YOUR ACCOUNT</h1>
                        <div class="login_wrapper">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                                    <a href="/" class="btn btn-primary"> <span>Login with Facebook</span> <i class="fa fa-facebook"></i> </a>
                                </div>
                                <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                                    <a href="/" class="btn btn-primary google-plus"> Login  with Google <i class="fa fa-google-plus"></i> </a>
                                </div>
                            </div>
                            <h2>or</h2>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="formsix-pos">
                                    <div class="form-group i-email">
                                        <input type="email" class="form-control" required="" id="email" name="email" placeholder="Email*">
                                    </div>
                                </div>
                                <div class="formsix-e">
                                    <div class="form-group i-password">
                                        <input type="password" class="form-control" required="" id="password" name="password" placeholder="Password *">
                                    </div>
                                </div>
                                <div class="login_remember_box">
                                    <label class="control control--checkbox">Remember me
                                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <span class="control__indicator"></span>
                                    </label>
<!--                                    <a href="/" class="forget_password">
                                        Forgot Password
                                    </a> -->
                                @if (Route::has('password.request'))
                                    <a class="forgot_password" href="{{ route('password.request') }}">
                                        Forgot Password?
                                    </a>
                                @endif
                                </div>
                                <div class="login_btn_wrapper">
                                    <button type="submit" class="btn btn-primary login_btn">Login</button>
                                </div>
                            </form>
                            <div class="login_message">
                                <p>Don’t have an account ? <a href="/register"> Register Now </a> </p>
                            </div>
                            </div>
                        <p>In case you are using a public/shared computer we recommend that
you logout to prevent any un-authorized access to your account</p>
                        <!-- /.login_wrapper-->
                    </div>
                </div>
            </div>
        </div>
        <!-- /.login_form_wrapper-->
    </div>
    <!-- jp login wrapper end -->

    @endsection