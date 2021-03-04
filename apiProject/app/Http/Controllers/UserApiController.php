<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\User;
use App\Http\Resources\User as UserResource;

class UserApiController extends Controller
{
    public function index()
    {
        //Get users.
         $users = User::get();
       
        //Return collection of users as a resource
         return UserResource::collection($users);
    }
}
