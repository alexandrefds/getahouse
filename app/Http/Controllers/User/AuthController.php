<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function __invoke(UserRequest $request)
    {
        if (Auth::attempt($request->toArray())) {
            return response()->json([
                'message' => 'Login successful',
                'user' => Auth::user(),
            ], 200);
        }


        return response()->json([
            'message' => 'Invalid credentials'
        ], 401);
    }
}
