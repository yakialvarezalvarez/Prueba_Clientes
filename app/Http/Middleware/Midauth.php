<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;
use App\Models\Token;
use Carbon\Carbon;

class Midauth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        /*$tokens = $request->bearerToken();

        $tokenRecord = Token::all()->first();
        
        if (!$tokenRecord || Carbon::now()->greaterThan($tokenRecord->expires_at)) {
            return response()->json(['message' => 'Token is invalid or expired'], 401);
        }*/
        
        return $next($request);
    }
}
