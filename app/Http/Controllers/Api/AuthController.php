<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request){
        $response = [];
        try {
            $validate = Validator::make($request->all(), [
                'username' => 'required|email',
                'password' => 'required'
            ]);

        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
