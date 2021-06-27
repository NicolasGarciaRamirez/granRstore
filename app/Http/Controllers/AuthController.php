<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\loginUser;
use Illuminate\Http\Request;


/**
 * Class AuthController
 * @package App\Http\Controllers
 */
class AuthController extends Controller
{
    /**
     * @param loginUser $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(loginUser $request)
    {
        $credentials = $request->only('email', 'password');

        if (\Auth::attempt($credentials, true)) {
            return response()->json([
                'user' => \Auth::user(),
                'auth' => true,
            ], 200);
        } else {
            return response()->json([
                'errors' => ['errors' => "Email and password did not match"],
            ], 422);
        }

    }

    public function loginView()
    {
        return view('login');
    }

    /**
     * @param Request $request
     */
    public function register(Request $request)
    {
        \DB::beginTransaction();

        try {
            $user = new User($request->all());
            $user->save();

            \DB::commit();
            return response()->json([
                'saved' => true,
                'errors' => null
            ]);
        }catch(\Exception $e){
            \DB::rollBack();
            return response()->json([
                'saved' => false,
                'errors' => $e->getMessage()
            ],422);
        }

    }

    public function registerView()
    {
        return view('register');
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        \Auth::logout();

        return response()->json([
            'logout' => true
        ]);
    }

}
