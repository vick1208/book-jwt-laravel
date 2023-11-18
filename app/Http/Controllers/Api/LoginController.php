<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'email' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()){
            return response()->json($validator->errors(),422);
        }

        $credetialsReq = $request->only('email','password');

        if (!$token = auth()->guard('api')->attempt($credetialsReq)) {
            return response()->json([
                'status' => 401,
                'message' => 'Incorrect email or password',
            ],401);
        }

        return response()->json([
            'status' => 200,
            'user' => auth()->guard('api')->user(),
            'token' => $token
        ],200);
    }
}
