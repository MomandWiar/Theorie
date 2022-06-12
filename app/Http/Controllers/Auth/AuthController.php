<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    // TODO: add description
    public function login(Request $request)
    {
        // check if request is valid
        // check if user already exists
        // return authorized JWT token

        return $request->all();
    }

    // TODO: add description
    public function register(Request $request)
    {
        // check if request is valid
        // check if user already exists
        // store user in database

        return $request->all();
    }
}
