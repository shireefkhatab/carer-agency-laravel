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
                            <h2>client reivew</h2>
                        </div>
                        <div class="jp_tittle_breadcrumb_main_wrapper">
                            <div class="jp_tittle_breadcrumb_wrapper">
                                <ul>
                                    <li><a href="#">Home</a> <i class="fa fa-angle-right"></i></li>
                                    <li><a href="#">Pages</a> <i class="fa fa-angle-right"></i></li>
                                    <li>client reivew</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jp Tittle Wrapper End -->
    <!-- client rivew wrapper start -->
    <div class="client_rivew_wrapper">

        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 main-section">

                    <div class="section_heading3">
                        <h2>feedback</h2>
                    </div>

                    <div class="progress_box_Wrapper">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-12 rating-part-left text-center">
                                <h1>1.3</h1>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <p>Average Rating</p>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%"></div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%"></div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width:20%"></div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:14%"></div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100" style="width:5%"></div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12 rating-part-right">
                                <div class="row">
                                    <div class="col-md-12">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <span>70%</span>
                                    </div>
                                    <div class="col-md-12">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                        <span>40%</span>
                                    </div>
                                    <div class="col-md-12">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                        <span>20%</span>
                                    </div>
                                    <div class="col-md-12">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                        <span>14%</span>
                                    </div>
                                    <div class="col-md-12">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                        <span>5%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="review-section">
                        <div class="section_heading3">
                            <h2>reivews</h2>
                        </div>

                        <div class="row rievew_Section_comment">
                            <div class="col-lg-3 col-md-4 col-xs-4 review-part-left">
                                <div class="row">
                                    <div class="col-md-5 col-sm-4 col-xs-5">
                                        <img src='{{ asset("images/content/resume_img1.jpg") }}'alt="img">
                                    </div>
                                    <div class="col-md-6 col-sm-8 col-xs-7 client_reivew_img">
                                        <p>8 days ago</p>
                                        <span><a href="#">Tom kok</a></span>
                                        <br>
                                        <small>designer</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-8 col-xs-8 review-part-right">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <p>Sollicitudin, lorem quis bibendum en auctor, aks consequat ipsum, nec a sagittis sem nibh id elit. Duis sed odo nibh vulputate Proin gravida nibh vel velit auctor aliquet.sem nibh id elit. Duis Aenean sollicitudin
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row rievew_Section_comment">
                            <div class="col-lg-3 col-md-4 col-xs-4 review-part-left">
                                <div class="row">
                                    <div class="col-md-5 col-sm-4 col-xs-5">
                                        <img src='{{ asset("images/content/resume_img2.jpg") }}'alt="img">
                                    </div>
                                    <div class="col-md-6 col-sm-8 col-xs-7 client_reivew_img">
                                        <p>2 days ago</p>
                                        <span><a href="#">Vin Desal</a></span>
                                        <br>
                                        <small>Report</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-8 col-xs-8 review-part-right">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <p>Sollicitudin, lorem quis bibendum en auctor, aks consequat ipsum, nec a sagittis sem nibh id elit. Duis sed odo nibh vulputate Proin gravida nibh vel velit auctor aliquet.sem nibh id elit. Duis Aenean sollicitudin
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row rievew_Section_comment">
                            <div class="col-lg-3 col-md-4 col-xs-4 review-part-left">
                                <div class="row">
                                    <div class="col-md-5 col-sm-4 col-xs-5">
                                        <img src='{{ asset("images/content/resume_img3.jpg") }}'alt="img">
                                    </div>
                                    <div class="col-md-5 col-sm-8 col-xs-7 client_reivew_img">
                                        <p>12 days ago</p>
                                        <span><a href="#">Liza Bin</a></span>
                                        <br>
                                        <small>designer</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-8 col-xs-8 review-part-right">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <p>Sollicitudin, lorem quis bibendum en auctor, aks consequat ipsum, nec a sagittis sem nibh id elit. Duis sed odo nibh vulputate Proin gravida nibh vel velit auctor aliquet.sem nibh id elit. Duis Aenean sollicitudin
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row rievew_Section_comment">
                            <div class="col-lg-3 col-md-4 col-xs-4 review-part-left">
                                <div class="row">
                                    <div class="col-md-5 col-sm-4 col-xs-5">
                                        <img src='{{ asset("images/content/resume_img4.jpg") }}'alt="img">
                                    </div> 
                                    <div class="col-md-7 col-sm-8 col-xs-7 client_reivew_img">
                                        <p>15 days ago</p>
                                        <span><a href="#">Saniya Neo</a></span>
                                        <br>
                                        <small>Report</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-8 col-xs-8 review-part-right">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <p>Sollicitudin, lorem quis bibendum en auctor, aks consequat ipsum, nec a sagittis sem nibh id elit. Duis sed odo nibh vulputate Proin gravida nibh vel velit auctor aliquet.sem nibh id elit. Duis Aenean sollicitudin
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row rievew_Section_comment">
                            <div class="col-lg-3 col-md-4 col-xs-4 review-part-left">
                                <div class="row">
                                    <div class="col-md-5 col-sm-4 col-xs-5">
                                        <img src='{{ asset("images/content/resume_img5.jpg") }}'alt="img">
                                    </div>
                                    <div class="col-md-7 col-sm-8 col-xs-7 client_reivew_img">
                                        <p>5 month ago</p>
                                        <span><a href="#">Jeck Spero</a></span>
                                        <br>
                                        <small>Report</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-8 col-xs-8 review-part-right">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <p>Sollicitudin, lorem quis bibendum en auctor, aks consequat ipsum, nec a sagittis sem nibh id elit. Duis sed odo nibh vulputate Proin gravida nibh vel velit auctor aliquet.sem nibh id elit. Duis Aenean sollicitudin
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row rievew_Section_comment">
                            <div class="col-lg-3 col-md-4 col-xs-4 review-part-left">
                                <div class="row">
                                    <div class="col-md-5 col-sm-4 col-xs-5">
                                        <img src='{{ asset("images/content/resume_img2.jpg") }}'alt="img">
                                    </div>
                                    <div class="col-md-7 col-sm-8 col-xs-7 client_reivew_img">
                                        <p>2 month ago</p>
                                        <span><a href="#">Jeck Spero</a></span>
                                        <br>
                                        <small>Reporter</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-8 col-xs-8 review-part-right">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <p>Sollicitudin, lorem quis bibendum en auctor, aks consequat ipsum, nec a sagittis sem nibh id elit. Duis sed odo nibh vulputate Proin gravida nibh vel velit auctor aliquet.sem nibh id elit. Duis Aenean sollicitudin
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row rievew_Section_comment">
                            <div class="col-lg-3 col-md-4 col-xs-4 review-part-left">
                                <div class="row">
                                    <div class="col-md-5 col-sm-4 col-xs-5">
                                        <img src='{{ asset("images/content/resume_img6.jpg") }}'alt="img">
                                    </div>
                                    <div class="col-md-7 col-sm-8 col-xs-7 client_reivew_img">
                                        <p>8 month ago</p>
                                        <span><a href="#">fark smith</a></span>
                                        <br>
                                        <small>developer</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-8 col-xs-8 review-part-right">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <p>Sollicitudin, lorem quis bibendum en auctor, aks consequat ipsum, nec a sagittis sem nibh id elit. Duis sed odo nibh vulputate Proin gravida nibh vel velit auctor aliquet.sem nibh id elit. Duis Aenean sollicitudin
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection