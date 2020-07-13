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
                            <h2>APPLY FOR A JOB</h2>
                        </div>
                        <div class="jp_tittle_breadcrumb_main_wrapper">
                            <div class="jp_tittle_breadcrumb_wrapper">
                                <ul>
                                    <li><a href="/">Home</a> <i class="fa fa-angle-right"></i></li>
                                    <li>APPLY FOR A JOB</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jp Tittle Wrapper End -->
    <!-- jp ad post Wrapper Start -->
    <div class="jp_adp_main_section_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="jp_adp_form_heading_wrapper">
                        <h2>Apply for a job</h2>
                    </div>
                    <div class="jp_adp_form_wrapper">
                        <input name="yourName" id="yourName" type="text" placeholder="Your Name">
                    </div>

                    <div class="jp_adp_form_wrapper">
                        <input name="yourAddress" id="yourAddress" type="text" placeholder="Your Address">
                    </div>

                    <div class="jp_adp_form_wrapper">
                        <input name="yourNumber" id="yourNumber" type="phone" placeholder="Your Number">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 bottom_line_Wrapper">
                    <div class="jp_adp_form_heading_wrapper">
                        <p>Fields with * are mandetory</p>
                    </div>
                    <div class="jp_adp_form_wrapper">
                        <select>
                            <option>Job Type</option>
                            <option>Permenant</option>
                            <option>Temporary</option>
                        </select>
                    </div>
                    <div class="jp_adp_form_wrapper">
                        <select>
                            <option>Job Timing</option>
                            <option>Full Time</option>
                            <option>Part Time</option>
                        </select>
                    </div>
                    <div class="jp_adp_form_wrapper">
                        <select>
                            <option>Job Value</option>
                            <option>Paid Job</option>
                            <option>Volunteering</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_adp_textarea_main_wrapper">
                        <textarea rows="7" placeholder="Additional Notes"></textarea>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_adp_choose_resume">
                        <p>Company Post</p>
                        <div class="custom-input">
                            <span><i class="fa fa-upload"></i> &nbsp;Upload CV</span>
                            <input type="file" name="resume" id="resume" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_adp_choose_resume_bottom_btn_post">
                        <ul>
                            <li><a href="/"><i class="fa fa-plus-circle"></i>&nbsp; Submit</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jp ad post Wrapper End -->
@endsection