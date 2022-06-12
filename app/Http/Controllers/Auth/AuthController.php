<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\UserRegisterRequest;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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

    /**
     * Method register
     *
     * @param UserRegisterRequest $request
     *
     * @return JSON
     */
    public function register(UserRegisterRequest $request)
    {
        // check if request is valid | 👍
        // check if user already exists
        if (User::where('email', $request->email)->exists()) {
            return response()->json([
                'message' => 'Email already in use'
            ], 200);
        }

        // hash the password
        $user = $request->toArray();
        $user['password'] = Hash::make($request->password);

        // store user in database
        try {
            User::create($user);
        } catch (Exception $e) {
            return response()->json([
                'message' => 'Whoops, something went wrong'
            ], 500);
        }

        // return success message
        return response()->json([
            'message' => 'Successfully registered user'
        ], 200);
    }
}
