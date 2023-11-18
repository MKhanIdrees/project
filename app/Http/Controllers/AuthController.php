<?php

namespace App\Http\Controllers;

use App\Http\Controllers\API\APIController;
use App\Models\shopkeeper;
use App\Models\User;
use App\Models\widow;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class AuthController extends Controller
{

    // Admin Login
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
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'role' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422); // Return validation errors
        } else if ($request->role != 'admin') {
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
            'password' => 'required|min:6',
            'email' => 'required',
            'husband_name' => 'required',
            'widow_contact' => 'required|integer',
            'widow_nic' => 'required|integer',
            'husband_nic' => 'required|integer',
            'Certificate' => 'required',
            'affidavit' => 'required',
            'guardian_name' => 'required',
            'relationship' => 'required',
            'guardian_contact' => 'required|integer',
            'kids' => 'required',
            'form_b' => 'required',
            'widow_district' => 'required',
            'widow_tehsil' => 'required',
            'widow_village' => 'required',
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

        $CertificateUrl = ''; // Initialize variable for Certificate URL
        $affidavitUrl = ''; // Initialize variable for affidavit URL
        $formBUrl = ''; // Initialize variable for form B URL

        if ($request->hasFile('Certificate')) {
            $certificateExtension = $request->file('Certificate')->extension();
            $Certificate = time() . '_certificate.' . $certificateExtension;
            $request->file('Certificate')->move(public_path('widows'), $Certificate);
            $CertificateUrl = url('widows/' . $Certificate); // Store the URL
        }

        if ($request->hasFile('affidavit')) {
            $affidavitExtension = $request->file('affidavit')->extension();
            $affidavit = time() . '_affidavit.' . $affidavitExtension;
            $request->file('affidavit')->move(public_path('widows'), $affidavit);
            $affidavitUrl = url('widows/' . $affidavit); // Store the URL
        }

        if ($request->hasFile('form_b')) {
            $formBExtension = $request->file('form_b')->extension();
            $form_b = time() . '_form_b.' . $formBExtension;
            $request->file('form_b')->move(public_path('widows'), $form_b);
            $formBUrl = url('widows/' . $form_b); // Store the URL
        }

        $widow = new widow();
        $widow->widow_name = $request->input('name');
        $widow->husband_name = $request->input('husband_name');
        $widow->widow_contact = (int)$request->input('widow_contact');
        $widow->widow_nic = $request->input('widow_nic');
        $widow->husband_nic = $request->input('husband_nic');
        $widow->email = $request->input('email');
        $widow->guardian_name = $request->input('guardian_name');
        $widow->relationship = $request->input('relationship');
        $widow->guardian_contact = (int)$request->input('guardian_contact');
        $widow->kids = $request->input('kids');
        $widow->Certificate = $CertificateUrl;
        $widow->affidavit = $affidavitUrl;
        $widow->form_b = $formBUrl;

        $widow->widow_district = $request->input('widow_district');
        $widow->widow_tehsil = $request->input('widow_tehsil');
        $widow->widow_village = $request->input('widow_village');
        $widow->user_id = $user->id;
        if ($widow->save()) {
            return response()->json(
                [
                    'message' => 'Registration successful',
                    'user' => $user,
                    'useruser' => $widow,
                ],
                201
            );
        }
    }

    public function registerShop(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'role' => 'required',
            'shop_name' => 'required',
            'shopkeeper_contact' => 'required|integer',
            'shopkeeper_district' => 'required',
            'shopkeeper_tehsil' => 'required',
            'shopkeeper_village' => 'required',
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

        $shopkeeper = new shopkeeper();
        $shopkeeper->shopkeeper_name = $request->input('name');
        $shopkeeper->shop_name = $request->input('shop_name');
        $shopkeeper->shopkeeper_contact = (int)$request->input('shopkeeper_contact');
        $shopkeeper->shopkeeper_email = $request->input('shopkeeper_email');
        $shopkeeper->shopkeeper_district = $request->input('shopkeeper_district');
        $shopkeeper->shopkeeper_tehsil = $request->input('shopkeeper_tehsil');
        $shopkeeper->shopkeeper_village = $request->input('shopkeeper_village');
        $shopkeeper->user_id = $user->id;
        if ($shopkeeper->save()) {
            return response()->json(
                [
                    'message' => 'Added successful',
                    'user' => $user,
                    'useruserDetail' => $shopkeeper,
                ],
                201
            );
        }
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
