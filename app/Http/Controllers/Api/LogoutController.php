<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PHPOpenSourceSaver\JWTAuth\Exceptions\JWTException;
use PHPOpenSourceSaver\JWTAuth\Exceptions\TokenExpiredException;
use PHPOpenSourceSaver\JWTAuth\Exceptions\TokenInvalidException;
use PHPOpenSourceSaver\JWTAuth\Facades\JWTAuth;

class LogoutController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        try {
            $remToken = JWTAuth::invalidate(JWTAuth::getToken());

            if ($remToken) {
                return response()->json(
                    [
                        'success' => true,
                        'message' => 'Logout Berhasil!',
                    ]
                );
            }
        } catch (JWTException | TokenInvalidException | TokenExpiredException $exception) {
            return response()->json(
                [
                    'success' => false,
                    'message' => "Maaf, proses Log out tidak dapat dilakukan",
                    'exception' => $exception,
                ],
                500
            );
        }
    }
}
