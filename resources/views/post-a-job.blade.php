@extends('layouts.app')

    @section('content')

    	<style type="text/css">
    		.error{
    			color: red,
    		}
    		.jp_adp_choose_resume_bottom_btn_post button {
			    float: left;
			    width: 170px;
			    height: 50px;
			    line-height: 50px;
			    color: #ffffff;
			    border: #f36969 solid 1px;
			    background: #f36969;
			    text-align: center;
			    text-transform: uppercase;
			    border-radius: 10px;
			    transition: all 0.5s;
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
                            <h2>Add-Posting</h2>
                        </div>
                        <div class="jp_tittle_breadcrumb_main_wrapper">
                            <div class="jp_tittle_breadcrumb_wrapper">
                                <ul>
                                    <li><a href="/">Home</a> <i class="fa fa-angle-right"></i></li>
                                    <li>Add-Posting</li>
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
			<form method="POST" id="form" action="{{ route('post-a-job')}}">
				@csrf
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="jp_adp_form_heading_wrapper">
							<h2>Job Details</h2>
						</div>
						<div class="jp_adp_form_wrapper">
							<input type="text" id="title" name="title" placeholder="Job Title">
						</div>
						<div class="jp_adp_form_wrapper">
							<select name="location" id="location">
								<option value="location">Job Location</option>
							</select>
						</div>
						<div class="row">
							<div class="col-lg-6 col-md-6 col-md-6 col-xs-12">
								<div class="jp_adp_form_wrapper">
									<input type="text" id="min" name="min" placeholder="Salary Min">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-md-6 col-xs-12">
								<div class="jp_adp_form_wrapper">
									<input type="text" id="max" name="max" placeholder="Salary Max">
								</div>
							</div>
						</div>
						<div class="jp_adp_form_wrapper">
							<input type="text" name="notice" id="notice" placeholder="Notic Period">
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 bottom_line_Wrapper">
						<div class="jp_adp_form_heading_wrapper">
							<p>Fields with * are mandetory</p>
						</div>
						<div class="jp_adp_form_wrapper">
							<select name="category" id="category">
								<option value="job">Job Category</option>
							</select>
						</div>
						<div class="jp_adp_form_wrapper">
							<select name="type" id="type">
								<option value="job">Job Type</option>
							</select>
						</div>
<!-- 						<div class="jp_adp_form_wrapper">
							<input type="text" placeholder="Skills required">
						</div>
						<div class="jp_adp_form_wrapper">
							<input type="text" placeholder="Joining facilities">
						</div> -->
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="jp_adp_textarea_main_wrapper">
							<textarea rows="7" name="description" placeholder="Job Description"></textarea>
						</div>
					</div>
	 				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="jp_adp_choose_resume_bottom_btn_post">
							<button type="submit">
								<i class="fa fa-plus-circle"></i>&nbsp; Post a job
							</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
    <!-- jp ad post Wrapper End -->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script src="http://ajax.microsoft.com/ajax/jquery.validate/1.7/additional-methods.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $( "#form" ).validate({
            rules: {
                title: {
                 	required: true,
                },
                location: {
                	required: true,
                },
                type: {
                    required: true,
                },
                category: {
                    required: true,
                }
            }
        });
    });
</script>


    @endsection