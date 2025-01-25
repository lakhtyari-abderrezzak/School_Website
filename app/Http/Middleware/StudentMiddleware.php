<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;


class StudentMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
       // Check if the user is authenticated
       if (Auth::check()) {
        // If the user is authenticated, check their role
        if (Auth::user()->role !== 'student') {
            return redirect()->route('login'); // Redirect to login if not a student
        }
    } 
        return $next($request);
    }
}
