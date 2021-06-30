<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Ministry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AuthenticateController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function loginProcess(Request $request)
    {
        $email = $request->get('email');
        $password = $request->get('password');

        try {
            $ministry = Ministry::where('email', $email)->where('password', $password)->firstOrFail();
            return Redirect::route("welcome");
        } catch (Exception $e) {
            return Redirect::route("login");
        }

        // return $ministry;
    }
}
