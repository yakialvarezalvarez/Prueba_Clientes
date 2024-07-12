<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Token;
use Carbon\Carbon;
use Illuminate\Support\Facades\Route;



class AuthController extends Controller
{
    public function login (Request $request){

        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user && $user->password === sha1($request->password)) {
            $token = $this->generateToken($user->email);
           
           $expiresAt = Carbon::now()->addHours(1);

           Token::create([
                'user_id' => $user->id,
                'token' => $token,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'expires_at' => $expiresAt,
             ]);
             //return response()->json(['token' => $token, 'expires_in' => $expiresAt], 200);
             return redirect('/customers'); 
        }
        return response()->json(['message' => 'Invalid credentials'], 401);
    }

    private function generateToken($email)
    {
        $randomNumber = rand(200, 500);
        $timestamp = Carbon::now()->toDateTimeString();
        $data = $email . $timestamp . $randomNumber;

        return sha1($data);
    }

    public function validateToken(Request $request)
    {
        $request->validate(['token' => 'required']);

        $tokenRecord = Token::where('token', $request->token)->first();

        if (!$tokenRecord || Carbon::now()->greaterThan($tokenRecord->expires_at)) {
            return response()->json(['message' => 'Token is invalid or expired'], 401);
        }

        //return response()->json(['message' => 'Token is valid']);
    }
}
