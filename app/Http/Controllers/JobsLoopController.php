<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobsLoopController extends Controller
{
   
    
    public function index () {

        $jobs = array(
        (object) [
            'id' => 1,
            'title' => 'Health care',
            'description' => 'Frontend web developer html css js',
            'salary' => 1000,
            'location' => '1 main st, Californi, USA'
        ], 
        (object) [
            'id' => 2,
            'title' => 'Nurse Practitioner',
            'description' => 'Frontend web developer html css js',
            'salary' => 2000,
            'location' => '1 main st, Californi, USA'
        ],
        (object) [
            'id' => 3,
            'title' => 'Administrative',
            'description' => 'Frontend web developer html css js',
            'salary' => 1500,
            'location' => '1 main st, Californi, USA'
        ],
        (object) [
            'id' => 1,
            'title' => 'Medical Assistant',
            'description' => 'Frontend web developer html css js',
            'salary' => 1000,
            'location' => '1 main st, Californi, USA'
        ], 
        (object) [
            'id' => 2,
            'title' => 'Occupational Therapist',
            'description' => 'Frontend web developer html css js',
            'salary' => 2000,
            'location' => '1 main st, Californi, USA'
        ],
        (object) [
            'id' => 3,
            'title' => 'Physical Therapist',
            'description' => 'Frontend web developer html css js',
            'salary' => 1500,
            'location' => '1 main st, Californi, USA'
        ],
        (object) [
            'id' => 1,
            'title' => 'Home Health Aide',
            'description' => 'Frontend web developer html css js',
            'salary' => 1000,
            'location' => '1 main st, Californi, USA'
        ], 
        (object) [
            'id' => 2,
            'title' => 'Permenant Nurse',
            'description' => 'Frontend web developer html css js',
            'salary' => 2000,
            'location' => '1 main st, Californi, USA'
        ],
        (object) [
            'id' => 3,
            'title' => 'Care Worker',
            'description' => 'Frontend web developer html css js',
            'salary' => 1500,
            'location' => '1 main st, Californi, USA'
        ]
    );

      
        return view('jobs-loop') ->with(['data'=>$jobs]);;
    }
}