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
            $request->session()->put('id', $ministry->idMinistry);
            $request->session()->put('fullName', $ministry->fullName);
            return Redirect::route("welcome");
        } catch (Exception $e) {
            return Redirect::route("login")->with('error', [
                "message" => 'Đăng nhập lỗi',
                "email" => $email,
            ]);
        }
    }

    public function logout(Request $request)
    {
        // Xóa session
        $request->session()->flush();
        // Điều hướng nó về trang login
        return Redirect::route("login");
    }
}
