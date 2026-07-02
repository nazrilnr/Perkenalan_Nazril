<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ProtectProjectDashboard
{
    public function handle(Request $request, Closure $next): Response
    {
        $staticPassword = '123';

        // Cek apakah session login admin sudah ada dan benar
        if (session('is_admin_logged_in') === true) {
            return $next($request);
        }

        return redirect()->route('project.login');
    }
}