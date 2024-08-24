<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        return $next($request);
    }
}


namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $role)
    {
        // التحقق من أن المستخدم مسجل دخول
        if (!Auth::check()) {
            return redirect('/login');
        }

        $user = Auth::user();

        // التحقق من أن المستخدم يمتلك الدور المطلوب
        if ($user->role !== $role) {
            return redirect('/home'); // إعادة التوجيه إلى صفحة أخرى إذا لم يكن لديه الدور المطلوب
        }

        return $next($request);
    }
}
