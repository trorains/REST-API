<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Course;
use App\Http\Resources\Course as CourseResource;

class CourseApiController extends Controller
{
    public function index()
    {
        //Get courses.
         $courses = Course::get();
       
        //Return collection of courses as a resource
         return CourseResource::collection($courses);
    }

}
