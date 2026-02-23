<?php

namespace App\Helpers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class ApiResponse
{
    public static function success($data = null, $message = null, $statusCode = 200)
    {
        return response()->json([
            'status' => 'success',
            'message' => $message,
            'data' => $data,
        ], $statusCode);
    }

    public static function error($message = null, $statusCode)
    {
        return response()->json([
            'status' => 'error',
            'message' => $message,
            'data' => null,
        ], $statusCode);
    }
}
