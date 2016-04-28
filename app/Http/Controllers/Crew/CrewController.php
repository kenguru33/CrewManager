<?php

namespace App\Http\Controllers\Crew;

use App\Contracts\SmsMessengerContract;
use App\Member;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CrewController extends Controller
{

    public function __construct(\App\User $user)
    {
        //$this->middleware('global_admin');
    }

    public function index()
    {
        
    }
    
    
}
