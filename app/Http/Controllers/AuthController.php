<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Alert;


class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3|max:100',
            'email' => 'required|email|unique:users,email|max:100',
            'password' => 'required|min:8|max:50',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => '500',
                'error_messages' => $validator->messages()
            ]);
        } else {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            $token = $user->createToken($user->email . '_Token', [''])->plainTextToken;

            return response()->json([
                'status' => 200,
                'token' => $token,
                'email' => $user->email,
                'message' => 'Your In Congratulation ^+^',
            ]);
        }
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 500,
                'message' => $validator->messages()
            ]);
        } else {
            $user = User::where('email', $request->email)->first();

            if (!$user || !Hash::check($request->password, $request->password)) {
                return response()->json([
                    'status' => 401,
                    'message' => 'Invalid Credentials'
                ]);
            } else {


                if ($user->role_as == '0') {
                    $role_as = 'admin';
                    $token = $user->createToken($request->$email . 'admin_Token', ['server:admin'])->plainTextToken;
                } else {
                    $role_as = 'user';
                    $token = $user->createToken($request->$email . '_Token', [''])->plainTextToken;
                }

                return response()->json([
                    'status' => 200,
                    'role_as' => $role_as,
                    'email' => $user->email,
                    'id' => $user->id,
                    'token' => $token,
                    'message' => 'Your Are In ^-^'
                ]);
            }
        }
    }
}
