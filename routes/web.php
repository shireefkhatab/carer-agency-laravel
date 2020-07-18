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
    // return Auth()->id();
    // Auth::logout();
    return view('index');
});

Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/why-us', function () {
    return view('why-us');
})->name('why-us');
Route::get('/services', function () {
    return view('services');
})->name('services');
Route::get('/jobs', function () {
    return view('jobs');
})->name('jobs');
Route::get('/jobs_loop', function () {
    return view('jobs_loop');
})->name('jobs');
Route::get('/blog', function () {
    return view('blog');
})->name('blog');
Route::get('/contact', function () {
    return view('contact-us');
})->name('contact');

//

Route::get('/apply-for-a-job', function () {
    return view('apply-for-a-job');
})->name('apply-for-a-job');
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
// Route::get('/login', function () {
//     return view('login');
// });
// Route::get('/register', function () {
//     return view('register');
// });
Route::get('/message', function () {
    return view('message');
});
Route::get('/post-a-job', 'JobController@create')->name('post-a-job');

Route::post('/post-a-job','JobController@store')->name('post-a-job');

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

Route::get('facebook', function () {
    return view('facebook');
});
// Route::get('auth/facebook', 'Auth\FacebookController@redirectToFacebook');
// Route::get('auth/facebook/callback', 'Auth\FacebookController@handleFacebookCallback');

Route::get('/admin-password', function () {
    return view('admin.admin-password');
});


Auth::routes();


// Route::get('secure/user/admin/dashboard', function () {
//         return view('admin.index');})->name('dashboard')->middleware('is_admin');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('secure/user/admin', function () {
        return view('admin.login');
    })->name('admin.login');

Route::group(['prefix' => 'secure/user/admin','middleware' => 'is_admin', 'as' => 'admin.'],function(){
    Route::get('/', function () {
        return view('admin.login');
    });
    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('dashboard');
    Route::get('/jobs', function () {
        return view('admin.jobs');
    })->name('jobs');
    Route::get('/candidates', function () {
        return view('admin.candidates');
    })->name('candidates');
    Route::get('/logout', function () {
        Auth::logout();
        return view('admin.login');
    });

});



Route::get('/logout', function () {
    Auth::logout();
    return redirect()->back();
});

