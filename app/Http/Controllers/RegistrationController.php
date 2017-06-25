<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationRequest;
use App\Mail\Welcome;
use App\User;
use Illuminate\Http\Request;
use Mail;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('registration.create');
    }

    public function store(RegistrationRequest $request)
    {
        $user = User::create($request->only(['name', 'email', 'password']));

        auth()->login($user);

        Mail::to($user)->send(new Welcome($user));

        return redirect()->home();
    }
}
