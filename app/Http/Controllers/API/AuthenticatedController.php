<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedController extends BaseController
{

    public function username()
    {
        return 'email';
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
          $user = Siswa::where('email', $request->email)->first();
          if (!$user) {
            return $this->sendError('username', $this->username() . ' not found', 401);
          }
          if (!Auth::attempt($request->only($this->username(), 'password'), $request->remember_me)) {
            return $this->sendError('password', 'Wrong Password', 401);
          }
          
          $token = $user->createToken('token')->plainTextToken;
          $dataUser = [
            'id' => $user->idSiswa,
            'name' => $user->nama,
            'email' => $user->email,
            'token' => $token
          ];

            $response = [
                'user' => $dataUser
            ];

            return $this->sendResponse($response, 'User login successfully.');
        } catch (\Throwable $th) {
            return $this->sendError('Unautorized.', ['error' => 'Unautorized'], 401);
        }
    }

    /**
     * Handle logout request.
     */
    public function destroy()
    {
        Auth::guard('web')->logout();
        $user = request()->user();
        $user->tokens()->delete();

        return $this->sendResponse([], 'User logout successfully.');
    }
}
