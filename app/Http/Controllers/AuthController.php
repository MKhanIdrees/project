<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class AuthController extends Controller
{

    // widow Login
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:6',
            'role' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422); // Return validation errors
        } else if ($request->role != 'admin') {
            return response()->json(['errors' => "You are not allowed"], 422); // Return validation errors
        }
        return $this->CheckLogin($request);
    }
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:6',
            'role' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422); // Return validation errors
        } else if ($request->role != 'admin') {
            return response()->json(['errors' => "You are not allowed"], 422); // Return validation errors
        }
        return $this->CheckLogin($request);
    }




    // widow Login
    public function loginWidow(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:6',
            'role' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422); // Return validation errors
        } else if ($request->role != 'widow') {
            return response()->json(['errors' => "You are not allowed"], 422); // Return validation errors
        }
        return $this->CheckLogin($request);
    }
    public function loginShop(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:6',
            'role' => 'required',
        ]);


        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422); // Return validation errors
        } else if ($request->role != 'shop') {
            return response()->json(['errors' => "You are not allowed"], 422); // Return validation errors
        }
        return $this->CheckLogin($request);
    }

    // shopkeeper Login
    public function registerWidow(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'role' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422); // Return validation errors
        } else if ($request->role != 'widow') {
            return response()->json(['errors' => "You are not allowed"], 422); // Return validation errors
        }
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => $request->role,
        ]);

        return response()->json(['message' => 'Registration successful', 'user' => $user], 201);
    }
    public function registerShop(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'role' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422); // Return validation errors
        } else if ($request->role != 'shop') {
            return response()->json(['errors' => "You are not allowed"], 422); // Return validation errors
        }
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => $request->role, // Assuming 'role' is another field in your User model
        ]);

        return response()->json(['message' => 'Registration successful', 'user' => $user], 201);
        return $this->register($request);
    }

    public function CheckLogin(Request $request)
    {
        $credentials = $request->only('email', 'password');

        try {
            if (!$token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'Invalid credentials'], 401);
            }
        } catch (JWTException $e) {
            return response()->json(['error' => 'Could not create token'], 500);
        }

        return response()->json([
            'user' => Auth::user(),
            'token' => $token
        ]);
    }

    public function checkToken()
    {
        try {
            $user = Auth::user();
            return response()->json(['user' => $user]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Token is invalid']);
        }
    }
}
