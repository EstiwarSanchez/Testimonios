<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function errorResponse($errors = [], $code = 400, $message = 'Error')
    {
        return response()->json([
            'status' => 0,
            'message' => $message,
            'errors' => $errors
        ], $code);
    }

    public function successResponse($message, $data = [])
    {
        return response()->json([
            'status' => 1,
            'message' => $message,
            'data' => $data
        ], 200);
    }
}
