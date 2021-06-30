<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CheckLogged
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Nếu tồn tại session
        if ($request->session()->exists('id')) {
            // thì cho nó đi tiếp
            return Redirect::route('welcome');
        } else {
            // Ngược lại thì quay về trang login
            return $next($request);
        }
    }
}
