<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/why-us', function () {
    return view('why-us');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/jobs', function () {
    return view('jobs');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/contact', function () {
    return view('contact-us');
});

//

Route::get('/apply-for-a-job', function () {
    return view('apply-for-a-job');
});
Route::get('/candidate-profile', function () {
    return view('candidate-profile');
});
Route::get('/candidates', function () {
    return view('candidates');
});
Route::get('/client-reivew', function () {
    return view('client-reivew');
});
Route::get('/companies', function () {
    return view('companies');
});
Route::get('/company-profile', function () {
    return view('company-profile');
});
Route::get('/employer-profile', function () {
    return view('employer-profile');
});
Route::get('/employers', function () {
    return view('employers');
});
Route::get('/listing-left', function () {
    return view('listing-left');
});
Route::get('/listing-single', function () {
    return view('listing-single');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/message', function () {
    return view('message');
});
Route::get('/post-a-job', function () {
    return view('post-a-job');
});
Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/single-job', function () {
    return view('single-job');
});
Route::get('/single-post', function () {
    return view('single-post');
});
Route::get('/terms-and-conditions', function () {
    return view('terms-and-conditions');
});

// Services
Route::get('services/contract-care-workers', function () {
    return view('services.contract-care-workers');
});
Route::get('services/domiciliary-care-workers', function () {
    return view('services.domiciliary-care-workers');
});
Route::get('services/part-time-or-night-carers', function () {
    return view('services.part-time-or-night-carers');
});
Route::get('services/permanent-nursing-staff', function () {
    return view('services.permanent-nursing-staff');
});
Route::get('services/short-term-care-workers', function () {
    return view('services.short-term-care-workers');
});
Route::get('services/staffing-services', function () {
    return view('services.staffing-services');
});
Route::get('services/temporary-and-short-term-care-workers', function () {
    return view('services.temporary-and-short-term-care-workers');
});