<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (!$request->expectsJson()) {
            // return route('login');
            if ($request->routeIs('admin.*')) {
                session()->flash('failed', 'Admin must login first!');
                return route("admin.login");
            }
            session()->flash('failed', 'You must login first!');
            return route('login');
        }
        /*
        if (!$request->expectsJson()) {
            // return route('login');
            if ($request->routeIs('author.*')) {
                session()->flash('failed', 'You must sign in first');
                return redirect()->route('author/login');
            }
            // 3. goto RedirectIfAuthenticated
        }
        */
    }
}
