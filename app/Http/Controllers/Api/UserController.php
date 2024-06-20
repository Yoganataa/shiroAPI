<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function register(Request $request)
    {
        try{
            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'username' => 'required|string|max:255|unique:users',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:8|confirmed',
                'role' => 'required|in:admin,user',
                'date_of_birth' => 'nullable|date'
            ]);
    
            if ($validator->fails()) {
                return response()->json($validator->errors());
            }
    
            $user = User::create([
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => $request->role,
                'date_of_birth' => $request->date_of_birth
            ]);
    
            $token = $user->createToken('auth_token')->plainTextToken;
    
            return response()->json([
                'data' => $user,
                'access_token' => $token,
                'token_type' => 'Bearer'
            ]);
        }catch (\Throwable $th){
            return response()->json([
                'message' => 'Something went wrong',
                'error' => $th->getMessage()
            ], 500);
        }
        
    }

    public function show()
    {
        try{
            $user = auth()->user();

            return response()->json($user);
        }catch (\Throwable $th){
            return response()->json([
                'message' => 'Something went wrong',
                'error' => $th->getMessage()
            ], 500);
        }
        
    }

    public function login(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'email'     => 'required|string|email|max:255|exists:users,email',
                'password'  => 'required|string|min:8',
            ]);
    
            if($validator->fails()){
                return response()->json($validator->errors());       
            }
    
            $user = User::where('email', $request->email)->first();
    
            if (!Hash::check($request->password, $user->password)) {
                return response()->json([
                    'message' => 'Password mismatch'
                ], 401);
            }

    
            $user->tokens()->delete();
    
            $token = $user->createToken('auth_token')->plainTextToken;
    
            return response()->json([
                'access_token' => $token,
                'token_type'   => 'Bearer',
            ]);
    
        } catch (\Throwable $th) {
            return response()->json([
                'message' => 'Something went wrong',
                'error' => $th->getMessage()
            ], 500);
        }
    }

    public function logout()
    {
        try{
            Auth::user()->tokens()->delete();
            return response()->json([
                'message' => 'logout success'
            ]);
        }catch (\Throwable $th){
            return response()->json([
                'message' => 'Something went wrong',
                'error' => $th->getMessage()
            ], 500);
        }
        
    }

    public function update(Request $request)
    {
        try{
            $user = $request->user();

            $validator = Validator::make($request->all(), [
                'name' => 'sometimes|string|max:255',
                'username' => 'sometimes|string|max:255|unique:users,username,' . $user->user_id,
                'email' => 'sometimes|string|email|max:255|unique:users,email,' . $user->user_id,
                'password' => 'sometimes|string|min:8|confirmed',
                'date_of_birth' => 'sometimes|date',
            ]);

            if ($validator->fails()) {
                return response()->json($validator->errors(), 422);
            }

            $data = $request->only(['name', 'username', 'email', 'image', 'date_of_birth']);
            if ($request->filled('password')) {
                $data['password'] = Hash::make($request->password);
            }

            $user->update($data);

            return response()->json($user, 200);
        }catch (\Throwable $th){
            return response()->json([
                'message' => 'Something went wrong',
                'error' => $th->getMessage()
            ], 500);
        }
        
    }
    public function favoriteWebtoon($webtoon_id)
    {
        $user = auth()->user();
        $webtoon = Webtoon::find($webtoon_id);

        if (!$webtoon) {
            return response()->json(['message' => 'Webtoon not found'], 404);
        }

        $user->favorites()->attach($webtoon_id);

        return response()->json(['message' => 'Webtoon favorited successfully']);
    }

    public function unfavoriteWebtoon($webtoon_id)
    {
        $user = auth()->user();
        $webtoon = Webtoon::find($webtoon_id);

        if (!$webtoon) {
            return response()->json(['message' => 'Webtoon not found'], 404);
        }

        $user->favorites()->detach($webtoon_id);

        return response()->json(['message' => 'Webtoon unfavorited successfully']);
    }
}