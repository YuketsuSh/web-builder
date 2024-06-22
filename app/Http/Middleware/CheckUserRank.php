<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckUserRank{
    public function handle(Request $request, Closure $next){
        $user = $request->route('user');
        $currentUser = Auth::user();

        if ($currentUser->hasRole('moderator') && $user->hasRole('admin')){
            return redirect()->route('admin.users.index')->with('error', 'You do not have permission to modify this user.');
        }

        return $next($request);
    }
}
