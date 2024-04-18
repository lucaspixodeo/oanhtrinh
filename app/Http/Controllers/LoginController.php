<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    public function register(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'username' => ['required', 'string', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:6'],
            ]);

            // Create a new user
            $user = User::create([
                'name' => $validatedData['username'],
                'username' => $validatedData['username'],
                'password' => Hash::make($validatedData['password']),
            ]);

            return response()->json([
                'message' => 'User registered successfully',
                'user' => $user
            ], Response::HTTP_CREATED);

        } catch (ValidationException $e) {
            return response()->json([
                'message' => 'Validation failed',
                'errors' => $e->errors(),
            ], Response::HTTP_UNPROCESSABLE_ENTITY);

        } catch (\Exception $e) {
            return response()->json([
                'message' => $e->getMessage(),
            ], Response::HTTP_BAD_REQUEST);
        }
    }

    public function login(Request $request)
    {
        try {
            $credentials = $request->validate([
                'username' => ['required', 'string'],
                'password' => ['required', 'string'],
            ]);

            if (Auth::attempt($credentials)) {
                $user = Auth::user();
                $token = $user->createToken('authToken')->plainTextToken;

                return response()->json([
                    'user' => $user,
                    'token' => $token,
                ]);
            }

            return response()->json([
                'message' => 'Tài khoản hoặc mật khẩu chưa đúng',
            ], Response::HTTP_UNAUTHORIZED);

        } catch (ValidationException $e) {
            return response()->json([
                'message' => 'Validation failed',
                'errors' => $e->errors(),
            ], Response::HTTP_UNPROCESSABLE_ENTITY);

        } catch (\Exception $e) {
            return response()->json([
                'message' => $e->getMessage(),
            ], Response::HTTP_BAD_REQUEST);
        }
    }

    public function username()
    {
        return 'username';
    }
}
