<?php

    namespace App\Http\Middleware;

    use Closure;
    use Illuminate\Support\Facades\Session;
    use Illuminate\Support\Facades\Redirect;

    class isAdminLoggedMiddleware
    {
        /**
         * Handle an incoming request.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  \Closure  $next
         * @return mixed
         */
        public function handle($request, Closure $next)
        {
            if ( !session('logged') ) {
                flash('Zone interdite, merci de vous cennecter.')->error();
                return Redirect::route('home');
            }
            return $next($request);
        }
    }
