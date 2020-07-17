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
                            <h2>Jobs</h2>
                        </div>
                        <div class="jp_tittle_breadcrumb_main_wrapper">
                            <div class="jp_tittle_breadcrumb_wrapper">
                                <ul>
                                    <li><a href="/">Home</a> <i class="fa fa-angle-right"></i></li>
                                    <li>Jobs</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jp Tittle Wrapper End -->

    <!-- jp recent jobs Wrapper Start -->
    <div class="jp_recent_job_main_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="cc_featured_product_main_wrapper">
                        <div class="jp_hiring_heading_wrapper jp_job_post_heading_wrapper">
                            <h2>Recent Jobs</h2>
                        </div>
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#best" aria-controls="best" role="tab"
                                    data-toggle="tab">Featured</a></li>
                            <li role="presentation"><a href="#hot" aria-controls="hot" role="tab"
                                    data-toggle="tab">Remotely</a></li>
                            <li role="presentation"><a href="#trand" aria-controls="trand" role="tab"
                                    data-toggle="tab">Part Time</a></li>
                            <li role="presentation"><a href="#best" aria-controls="best" role="tab"
                                    data-toggle="tab">Full Time </a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        @for($a = 0; $a < 1; $a++)
                        <div role="tabpanel" class="tab-pane fade in active" id="best">
                            <div class="ss_featured_products">
                                <div class="owl-carousel owl-theme">
                                @for($b = 0; $b < 3; $b++)
                                    <div class="item" data-hash= {{$b}}>
                                        <div class="row">
                                        @foreach($data as $job)
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                <div class="jp_job_post_main_wrapper_cont">
                                                
                                                    <div class="jp_job_post_main_wrapper">
                                                        <div class="row">
                                                            
                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                <div class="jp_job_post_side_img">
                                                                    <img src='{{ asset("images/content/job_post_img1.jpg")}}'
                                                                        alt="post_img" />
                                                                </div>
                                                                <div class="jp_job_post_right_cont">
                                                                    <h4> {{ $job->{'title'} }} </h4>
                                                                    <p>{{ $job->{'description'} }}.</p>
                                                                    <ul>
                                                                        <li><i class="fa fa-cc-paypal"></i>&nbsp; {{ $job->{'salary'} }}k P.A.</li>
                                                                        <li><i class="fa fa-map-marker"></i>&nbsp;
                                                                        {{ $job->{'location'} }}</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                <div class="jp_job_post_right_btn_wrapper">
                                                                    <ul>
                                                                        <li><a href="apply-for-a-job"><i
                                                                                    class="fa fa-heart-o"></i></a></li>
                                                                        <li><a href="single-job">Job Details</a></li>
                                                                        <li><a href="apply-for-a-job">Apply</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                           
                                                        </div>
                                                    </div>
                                                    <div class="jp_job_post_keyword_wrapper">
                                                        <ul>
                                                            <li><i class="fa fa-tags"></i>Keywords :</li>
                                                            <li><a href="apply-for-a-job">ui designer,</a></li>
                                                            <li><a href="apply-for-a-job">developer,</a></li>
                                                            <li><a href="apply-for-a-job">senior</a></li>
                                                        </ul>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    @endfor 
                                </div>
                            </div>
                            <div class="video_nav_img_wrapper">
                                <div class="video_nav_img">
                                    <ul>
                                        <li><a class="button secondary url owl_nav" href="#zero">1</a></li>
                                        <li><a class="button secondary url owl_nav" href="#one">2</a></li>
                                        <li><a class="button secondary url owl_nav active" href="#two">3</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jp recent jobs Wrapper End -->
        <!-- jp popular Categories Wrapper Start -->
        <div class="jp_popular_category_main_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_popu_cate_heading_wrapper">
                        <h4>Popular Categories</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="jp_popu_cate_box_main_wrapper jp_popu_cate_box_main_wrapper_second">
                        <div class="jp_top_jobs_category_wrapper">
                            <div class="jp_top_jobs_category">
                                <i class="fa fa-code"></i>
                                <h3><a href="/">Health care</a></h3>
                                <p>(240 jobs)</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="jp_popu_cate_box_main_wrapper jp_popu_cate_box_main_wrapper_second">
                        <div class="jp_top_jobs_category_wrapper">
                            <div class="jp_top_jobs_category">
                                <i class="fa fa-laptop"></i>
                                <h3><a href="/">Nurse Practitioner</a></h3>
                                <p>(504 jobs))</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="jp_popu_cate_box_main_wrapper jp_popu_cate_box_main_wrapper_second">
                        <div class="jp_top_jobs_category_wrapper">
                            <div class="jp_top_jobs_category">
                                <i class="fa fa-bar-chart"></i>
                                <h3><a href="/">Administrative </a></h3>
                                <p>(2250 jobs))</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="jp_popu_cate_box_main_wrapper jp_popu_cate_box_main_wrapper_second">
                        <div class="jp_top_jobs_category_wrapper">
                            <div class="jp_top_jobs_category">
                                <i class="fa fa-medkit"></i>
                                <h3><a href="/">Medical</a></h3>
                                <p>(202 jobs)</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="jp_popu_cate_box_main_wrapper jp_popu_cate_box_main_wrapper2">
                        <div class="jp_top_jobs_category_wrapper">
                            <div class="jp_top_jobs_category">
                                <i class="fa fa-university"></i>
                                <h3><a href="/">Occupational Therapist</a></h3>
                                <p>(1457 jobs)</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="jp_popu_cate_box_main_wrapper jp_popu_cate_box_main_wrapper2">
                        <div class="jp_top_jobs_category_wrapper">
                            <div class="jp_top_jobs_category">
                                <i class="fa fa-newspaper-o"></i>
                                <h3><a href="/">Physical Therapist</a></h3>
                                <p>(2142 jobs)</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="jp_popu_cate_box_main_wrapper jp_popu_cate_box_main_wrapper2">
                        <div class="jp_top_jobs_category_wrapper">
                            <div class="jp_top_jobs_category">
                                <i class="fa fa-cutlery"></i>
                                <h3><a href="/">Home Health Aide</a></h3>
                                <p>(2342 jobs)</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="jp_popu_cate_box_main_wrapper jp_popu_cate_box_main_wrapper2">
                        <div class="jp_top_jobs_category_wrapper">
                            <div class="jp_top_jobs_category">
                                <i class="fa fa-th-large"></i>
                                <h3><a href="/">All Jobs</a></h3>
                                <p>(2000+ jobs)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jp popular Categories Wrapper End -->
        <!-- jp our services Wrapper Start -->
    <div class="jp_best_deal_main_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_best_deal_heading_wrapper">
                        <div class="jp_best_deal_heading">
                            <h4>What We Do</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="jp_best_deal_main_cont_wrapper">
                        <div class="jp_best_deal_icon_sec">
                            <i class="flaticon-magnifying-glass"></i>
                        </div>
                        <div class="jp_best_deal_cont_sec">
                            <h4><a href=" {{ asset('services/staffing-services') }}.">Staffing Services </a></h4>
                            <p>At Carer Agency UK, we work together with clients in the healthcare and social care sector, to ensure you have ...</p>
                            <a class="btn btn-primary" href=" {{ asset('services/staffing-services') }}.">Read More </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="jp_best_deal_main_cont_wrapper">
                        <div class="jp_best_deal_icon_sec">
                            <i class="flaticon-users"></i>
                        </div>
                        <div class="jp_best_deal_cont_sec">
                            <h4><a href=" {{ asset('services/permanent-nursing-staff') }}.">Permanent Nursing Staff</a></h4>
                            <p>If you have more long term needs with your nursing staff and want to recruit on a permanent basis...</p>
                            <a class="btn btn-primary" href=" {{ asset('services/permanent-nursing-staff') }}.">Read More </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="jp_best_deal_main_cont_wrapper jp_best_deal_main_cont_wrapper2">
                        <div class="jp_best_deal_icon_sec">
                            <i class="flaticon-shield"></i>
                        </div>
                        <div class="jp_best_deal_cont_sec">
                            <h4><a href=" {{ asset('services/temporary-and-short-term-care-workers') }}.">Temporary and Short Term Care Workers</a></h4>
                            <p>The role of a Care Worker is one which is vital in helping to improve the quality of a vulnerable...</p>
                            <a class="btn btn-primary" href=" {{ asset('services/temporary-and-short-term-care-workers') }}.">Read More </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="jp_best_deal_main_cont_wrapper jp_best_deal_main_cont_wrapper2">
                        <div class="jp_best_deal_icon_sec">
                            <i class="flaticon-notification"></i>
                        </div>
                        <div class="jp_best_deal_cont_sec">
                            <h4><a href=" {{ asset('services/short-term-care-workers') }}.">Short Term Care Workers</a></h4>
                            <p>The demands of the care industry are such that quite often, you can find yourself with too many ...</p>
                            <a class="btn btn-primary" href=" {{ asset('services/short-term-care-workers') }}.">Read More </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="jp_best_deal_main_cont_wrapper jp_best_deal_main_cont_wrapper2">
                        <div class="jp_best_deal_icon_sec">
                            <i class="flaticon-wallet"></i>
                        </div>
                        <div class="jp_best_deal_cont_sec">
                            <h4><a href=" {{ asset('services/contract-care-workers') }}.">Contract Care Workers</a></h4>
                            <p>If you need care workers to cover a specific contract, we can also help with this. For instance, you ...</p>
                            <a class="btn btn-primary" href=" {{ asset('services/contract-care-workers') }}.">Read More </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="jp_best_deal_main_cont_wrapper jp_best_deal_main_cont_wrapper2">
                        <div class="jp_best_deal_icon_sec">
                            <i class="flaticon-people"></i>
                        </div>
                        <div class="jp_best_deal_cont_sec">
                            <h4><a href=" {{ asset('services/part-time-or-night-carers') }}.">Part Time/Night Carers</a></h4>
                            <p>The nature of care work is that staff are required for all kinds of different shift patterns and quite ...</p>
                            <a class="btn btn-primary" href=" {{ asset('services/part-time-or-night-carers') }}.">Read More </a>
                        </div>
                    </div>
                </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="jp_best_deal_main_cont_wrapper jp_best_deal_main_cont_wrapper2">
                        <div class="jp_best_deal_icon_sec">
                            <i class="flaticon-people"></i>
                        </div>
                        <div class="jp_best_deal_cont_sec">
                            <h4><a href=" {{ asset('services/domiciliary-care-workers') }}.">Domiciliary Care Workers</a></h4>
                            <p>We also have domiciliary care workers who are on hand to provide support to those with disabilities...</p>
                            <a class="btn btn-primary" href=" {{ asset('services/domiciliary-care-workers') }}.">Read More </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jp our services Wrapper End -->
    <!-- jp register Wrapper Start -->
    <div class="jp_register_section_main_wrapper">
        <div class="jp_regis_left_side_box_wrapper">
            <div class="jp_regis_left_side_box">
                <img src='{{ asset("images/content/regis_icon.png") }}'alt="icon" />
                <h4>I’m an EMPLOYER</h4>
                <p>Signed in companies are able to post new<br> job offers, searching for candidate...</p>
                <ul>
                    <li><a href="register."><i class="fa fa-plus-circle"></i> &nbsp;REGISTER AS A COMPANY</a></li>
                </ul>
            </div>
        </div>
        <div class="jp_regis_right_side_box_wrapper">
            <div class="jp_regis_right_img_overlay"></div>
            <div class="jp_regis_right_side_box">
                <img src='{{ asset("images/content/regis_icon2.png") }}'alt="icon" />
                <h4>I’m an candidate</h4>
                <p>Signed in companies are able to post new<br> job offers, searching for candidate...</p>
                <ul>
                    <li><a href="register."><i class="fa fa-plus-circle"></i> &nbsp;REGISTER AS A CANDIDATE</a></li>
                </ul>
            </div>
            <div class="jp_regis_center_tag_wrapper">
                <p>OR</p>
            </div>
        </div>

    </div>
    <!-- jp ragister Wrapper End -->
       <!-- jp counter Wrapper Start -->
       <div class="jp_counter_main_wrapper">
        <div class="gc_counter_cont_wrapper">
            <div class="count-description">
                <span class="timer">2540</span><i class="fa fa-plus"></i>
                <h5 class="con1">Jobs Available</h5>
            </div>
        </div>
        <div class="gc_counter_cont_wrapper2">
            <div class="count-description">
                <span class="timer">7325</span><i class="fa fa-plus"></i>
                <h5 class="con2">Members</h5>
            </div>
        </div>
        <div class="gc_counter_cont_wrapper3">
            <div class="count-description">
                <span class="timer">1924</span><i class="fa fa-plus"></i>
                <h5 class="con3">Resumes</h5>
            </div>
        </div>
        <div class="gc_counter_cont_wrapper4">
            <div class="count-description">
                <span class="timer">4275</span><i class="fa fa-plus"></i>
                <h5 class="con4">Company</h5>
            </div>
        </div>
    </div>
    <!-- jp counter Wrapper End -->
    <div class="aboutus_page_2_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
                    <div class="aboutus_text_section abt_txt_page_2">
                        <h2>Who We <span>Are</span></h2>
                        <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                            aliqua. iat nulla pariatur. Excepteur sint occaecat cupidatat non proluptate velit esse
                            cillum dolore euur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                            officia deserunt mollit anim id est laborum.</p>
                        <div class="row">
                            <div class="col-md-6">
                                <ul>
                                    <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>&nbsp;&nbsp;Audit
                                        &amp; Assurance</li>
                                    <li><i class="fa fa-arrow-circle-o-right"
                                            aria-hidden="true"></i>&nbsp;&nbsp;Business Services</li>
                                    <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>&nbsp;&nbsp;IT
                                        Control Solutions</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul>
                                    <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>&nbsp;&nbsp;Audit
                                        &amp; Assurance</li>
                                    <li><i class="fa fa-arrow-circle-o-right"
                                            aria-hidden="true"></i>&nbsp;&nbsp;Business Services</li>
                                    <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>&nbsp;&nbsp;IT
                                        Control Solutions</li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
                    <div class="accordion_wrapper abt_page_2_wrapper">
                        <div class="panel-group" id="accordion_threeLeft">
                            <div class="panel panel-default">
                                <div class="panel-heading desktop">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion_threeLeft"
                                            href="#collapseTwentyLeftone" aria-expanded="true">
                                            Our Visions and Missions
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwentyLeftone" class="panel-collapse collapse" aria-expanded="true"
                                    role="tablist">
                                    <div class="panel-body">
                                        Praesent in nisl egestas mauris aliquam luctus. Ut auctor faucibus orci, nec
                                        semper purus ultrices idorbi nec lorem risus orbi vitae felis gravida
                                        Pellentesque id eros quis massa convallis feugiat eu quis urna.
                                    </div>
                                </div>
                            </div>
                            <!-- /.panel-default -->
                            <div class="panel panel-default">
                                <div class="panel-heading horn">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion_threeLeft"
                                            href="#collapseTwentyLeftTwo" aria-expanded="false">
                                            Our Corporate Responsibility
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwentyLeftTwo" class="panel-collapse collapse in" aria-expanded="false"
                                    role="tablist">
                                    <div class="panel-body">
                                        Praesent in nisl egestas mauris aliquam luctus. Ut auctor faucibus orci, nec
                                        semper purus ultrices idorbi nec lorem risus orbi vitae felis gravida
                                        Pellentesque id eros quis massa convallis feugiat eu quis urna.
                                    </div>
                                </div>
                            </div>
                            <!-- /.panel-default -->
                            <div class="panel panel-default">
                                <div class="panel-heading bell">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion_threeLeft"
                                            href="#collapseTwentyLeftThree" aria-expanded="false">
                                            Visual Page Builder
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwentyLeftThree" class="panel-collapse collapse" aria-expanded="false"
                                   role="tablist">
                                    <div class="panel-body">
                                        Praesent in nisl egestas mauris aliquam luctus. Ut auctor faucibus orci, nec
                                        semper purus ultrices idorbi nec lorem risus orbi vitae felis gravida
                                        Pellentesque id eros quis massa convallis feugiat eu quis urna.
                                    </div>
                                </div>
                            </div>
                            <!-- /.panel-default -->
                        </div>
                        <!--end of /.panel-group-->
                    </div>
                </div>
                <!--end of /.col-sm-6-->
            </div>
        </div>
    </div>
    <!--end of /.col-sm-6-->

    @endsection