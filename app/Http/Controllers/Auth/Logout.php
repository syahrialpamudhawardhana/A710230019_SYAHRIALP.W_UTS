<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Logout
{
    public function __invoke(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }
}