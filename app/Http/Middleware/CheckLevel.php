<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class CheckLevel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$id_level): Response
    {
        $user = Auth::user();
        if (!$user) {
            return redirect()->route('login');
        }



        // Check if user's id_level exists in the array of allowed levels
        if (!in_array($user->id_level, $id_level)) {
            Alert::warning('Warning', 'Anda tidak memiliki akses ke menu tersebut');
            return redirect('dashboard');
        }

        return $next($request);
    }
}
