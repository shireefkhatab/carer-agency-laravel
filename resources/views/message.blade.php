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
                            <h2>Messages</h2>
                        </div>
                        <div class="jp_tittle_breadcrumb_main_wrapper">
                            <div class="jp_tittle_breadcrumb_wrapper">
                                <ul>
                                    <li><a href="/">Home</a> <i class="fa fa-angle-right"></i></li>
                                    <li>Messages</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jp Tittle Wrapper End -->
    <!-- message wrapper start -->
    <div class="message_chat_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="dashboard-message-wrapper">
                        <div class="message-lists">
                            <form action="/" class="message-search">
                                <input type="text" placeholder="Search Friend......">
                                <button><i class="fa fa-search"></i></button>
                            </form>
                            <a href="/" class="message-single">
                                <div class="thumb">
                                    <img src='{{ asset("images/content/rc1.png") }}'class="img-fluid" alt="">
                                </div>
                                <div class="body">
                                    <h6 class="username">Laural K.</h6>
                                    <span class="send-time">12 min</span>
                                </div>
                            </a>
                            <a href="/" class="message-single">
                                <div class="thumb">
                                    <img src='{{ asset("images/content/rc2.png") }}'class="img-fluid" alt="">
                                </div>
                                <div class="body">
                                    <h6 class="username">Paul Cox</h6>
                                    <span class="send-time">22 min</span>
                                </div>
                            </a>
                            <a href="/" class="message-single active">
                                <div class="thumb">
                                    <img src='{{ asset("images/content/rc3.png") }}'class="img-fluid" alt="">
                                </div>
                                <div class="body">
                                    <h6 class="username">Carlos</h6>
                                    <span class="text-number">16 min</span>
                                </div>
                            </a>
                            <a href="/" class="message-single">
                                <div class="thumb">
                                    <img src='{{ asset("images/content/rc4.png") }}'class="img-fluid" alt="">
                                </div>
                                <div class="body">
                                    <h6 class="username">Dahlia</h6>
                                    <span class="send-time">45 min</span>
                                </div>
                            </a>
                            <a href="/" class="message-single">
                                <div class="thumb">
                                    <img src='{{ asset("images/content/rs5.jpg") }}'class="img-fluid" alt="">
                                </div>
                                <div class="body">
                                    <h6 class="username">Nathan</h6>
                                    <span class="send-time">45 min</span>
                                </div>
                            </a>
                            <a href="/" class="message-single">
                                <div class="thumb">
                                    <img src='{{ asset("images/content/rs4.jpg") }}'class="img-fluid" alt="">
                                </div>
                                <div class="body">
                                    <h6 class="username">nicloss</h6>
                                    <span class="send-time">26 min</span>
                                </div>
                            </a>
                        </div>
                        <div class="message-box">
                            <div class="message-box-header">

                                <h5>carlos</h5>
                                <div class="navbar navbar-expand-sm drop">

                                    <!-- Links -->
                                    <ul class="navbar-nav">

                                        <!-- Dropdown -->
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="/" id="navbardrop1" data-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-ellipsis-h"></i>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="/"><i class="fa fa-link"></i>&nbsp;&nbsp;Copy this link</a>
                                                <a class="dropdown-item" href="/"><i class="fa fa-tag"></i>&nbsp;&nbsp;Report</a>
                                                <a class="dropdown-item" href="/"><i class="fa fa-flag"></i>&nbsp;&nbsp;Hide</a>

                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <ul class="dashboard-conversation">
                                <li class="conversation in">
                                    <div class="avater">
                                        <img src='{{ asset("images/content/rc3.png") }}'class="img-fluid" alt="">
                                    </div>
                                    <div class="message"><span>This is Photoshop's version  of Lom Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollici's version  of Lom Ipsum. Proin gravida nibh vel velit auctor aliquet. tudin, lorem quis </span></div>
                                    <span class="send-time">2.32 am</span>
                                </li>
                                <li class="conversation out">
                                    <div class="avater">
                                        <img src='{{ asset("images/content/rc1.png") }}'class="img-fluid" alt="">
                                    </div>
                                    <div class="message"><span>This is Photoshop's version  of Lom Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollici's version  of Lom Ipsum. Proin gravida nibh vel velit auctor aliquet. tudin, lorem quis </span></div>
                                    <span class="send-time">2.32 am</span>
                                </li>
                                <li class="conversation in">
                                    <div class="avater">
                                        <img src='{{ asset("images/content/rc3.png") }}'class="img-fluid" alt="">
                                    </div>
                                    <div class="message"><span>This is Photoshop's version  of Lom Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollici's version  of Lom Ipsum. Proin gravida nibh vel velit auctor aliquet. tudin, lorem quis </span></div>
                                    <span class="send-time">2.34 am</span>
                                </li>
                                <li class="conversation out">
                                    <div class="avater">
                                        <img src='{{ asset("images/content/rc1.png") }}'class="img-fluid" alt="">
                                    </div>
                                    <div class="message"><span>This is Photoshop's version  of Lom Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollici's version  of Lom Ipsum. Proin gravida nibh vel velit auctor aliquet. tudin, lorem quis </span></div>
                                    <span class="send-time">2.34 am</span>
                                </li>
                                <li class="conversation in">
                                    <div class="avater">
                                        <img src='{{ asset("images/content/rc3.png") }}'class="img-fluid" alt="">
                                    </div>
                                    <div class="message"><span>This is Photoshop's version  of Lom Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollici's version  of Lom Ipsum. Proin gravida nibh vel velit auctor aliquet. tudin, lorem quis </span></div>
                                    <span class="send-time">2.34 am</span>
                                </li>

                            </ul>
                            <div class="conversation-write-wrap">
                                <form action="/">
                                    <textarea placeholder="Type a message"></textarea>
                                    <label class="send-file">
                                        <input type="file"><i class="fa fa-image"></i>
                                    </label>
                                    <label class="send-image">
                                        <input type="file"><i class="fa fa-file-image-o"></i>
                                    </label>

                                    <button class="send-message"><i class="fa fa-location-arrow"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- message wrapper end -->

    @endsection