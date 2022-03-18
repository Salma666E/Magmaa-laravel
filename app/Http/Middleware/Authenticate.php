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
    protected function redirectTo($request)///////law 3ayza ad5 3al login page and i mash login hyrg3n tan 3l login
    {
        if (! $request->expectsJson() ) {
            return route('login');
        }
    }
}
