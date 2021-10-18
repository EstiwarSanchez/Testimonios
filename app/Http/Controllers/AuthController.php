<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreAuthRequest;
use App\Models\User;

class AuthController extends BaseController
{
    public function getToken(StoreAuthRequest $request){

        if(!Auth::attempt($request->only('email','password'))){
            return $this->errorResponse([],401,'Detalles de acceso incorrectos');
        }

        $user = User::where('email',$request['email'])->firstOrFail();

        $token = $user->createToken('auth_token')->plainTextToken;

        return $this->successResponse('Token generado correctamente', $token );
    }
}
