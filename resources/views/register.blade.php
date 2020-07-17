@extends('layouts.app')

    @section('content')

        <!-- jp Tittle Wrapper Start -->
        <div class="jp_tittle_main_wrapper">
        <div class="jp_tittle_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_tittle_heading_wrapper">
                        <div class="jp_tittle_heading">
                            <h2>Register</h2>
                        </div>
                        <div class="jp_tittle_breadcrumb_main_wrapper">
                            <div class="jp_tittle_breadcrumb_wrapper">
                                <ul>
                                    <li><a href="/">Home</a> <i class="fa fa-angle-right"></i></li>
                                    <li>Register</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jp Tittle Wrapper End -->

    <!-- jp register wrapper start -->
    <div class="register_section">
        <!-- register_form_wrapper -->
        <div class="register_tab_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div role="tabpanel">

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade in active register_left_form" id="contentOne-1">
									
                                    <div class="jp_regiter_top_heading">
                                        <p>Fields with * are mandetory </p>
                                    </div>
                                    <div class="row">
                                        <!--Form Group-->
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" name="field-name" value="" placeholder="Username*">
                                        </div>

                                        <!--Form Group-->
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">

                                            <input type="text" name="field-name" value="" placeholder="Email*">
                                        </div>
                                        <!--Form Group-->
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">

                                            <input type="password" name="field-name" value="" placeholder=" password*">
                                        </div>
                                        <!--Form Group-->
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <input type="password" name="field-name" value="" placeholder="re-enter password*">
                                        </div>

                                        <!--Form Group-->
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <select name="account-type" required>
                                                <option value="0">Account Type</option>
                                                <option value="candidate">Candidate</option>
                                                <option value="company">Company</option>
                                            </select>
                                        </div>

                    <!-- ######################### If Candidate ########################## -->

                                        <!--Form Group-->
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12 custom_input">
                                            <input type="file" name="resume">
                                            <p>DOC, DOCX, RTF, PDF - 300KB MAX PREFERRED CV FORMAT - DOCX FILE</p>
                                        </div>
                    <!-- /////////////////////////  End If Candidate //////////////////////////// -->

                    <!-- ######################### If Company ############################## -->
                                        
                                        <!--Form Group-->
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" name="field-name" value="" placeholder="company name">
                                        </div>

                                        <!--Form Group-->
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" name="field-name" value="" placeholder="website">
                                        </div>

                                        <!--Form Group-->
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" name="field-name" value="" placeholder="address line">
                                        </div>
                    <!-- ////////////////////// End If Company //////////////////////////// -->
                                    </div>
                                    <div id="row">
                                        <!--Form Group-->
                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <div class="check-box text-center">
                                                <input type="checkbox" name="shipping-option" id="account-option_1"> &ensp;
                                                <label for="account-option_1">I agreed to the <a href="terms-and-conditions." class="check_box_anchr">Terms and Conditions</a> governing the use of jobportal</label>
                                            </div>
                                        </div>
                                    </div>
                                        
                                        <!-- <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12"> -->
                                            <div class="login_btn_wrapper register_btn_wrapper login_wrapper ">
                                                <a href="/" class="btn btn-primary login_btn"> register </a>
                                            </div>
                                            <div class="login_message">
                                                <p>Already a member? <a href="login."> Login Here </a> </p>
                                            </div>
                                        <!-- </div> -->
                                    

                                    
                                </div>

                            </div>
                            <p class="btm_txt_register_form">In case you are using a public/shared computer we recommend that you logout to prevent any un-authorized access to your account</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jp register wrapper end -->
    
    @endsection