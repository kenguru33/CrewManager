<?php

namespace App\Http\Controllers\Users;

use App\Contracts\SmsMessengerContract;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    public function index(User $user)
    {
        $users = $user->all();

        return view('users.list',['users' => $users]);
    }
    
    public function create()
    {
        return view('users.create');
    }

    public function edit()
    {
        return 'edit user';    
    }
    
    public function delete()
    {
        return 'delete user';
    }
    
    public function store()
    {
        return 'store user';
    }
    
    
    public function sendSms(Request $request, SmsMessengerContract $smsMessenger, User $user)
    {
        $smsMessenger->send('91679501','Hei på deg Herr Anker');
        dump($smsMessenger);
        dump($user);
        $t = $request->all();
        dump($t);
        return 'jabbadabba';
    }
}
