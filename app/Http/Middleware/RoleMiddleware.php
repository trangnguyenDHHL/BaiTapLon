<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next, $role)
    {
        if (!Auth::check() || Auth::user()->role !== $role) {
            // Nếu không có quyền, chuyển hướng hoặc trả về lỗi
            return redirect('/'); // Hoặc trả về response khác tùy ý
        }

        return $next($request);
    }
}
