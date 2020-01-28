<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AuthController extends Controller
{
    public function register(Request $request) {
        
        $validatedData = $request->validate([
            'email' => 'required',
            'username' => 'required',
            'password' => 'required',
            'image' => 'required',
        ]);
        
        $user = new User;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->image = $request->image;
        $user->password = Hash::make($request->password);
        $user->role_id = 3;
        $user->news_size_id = 1;
        $user->save();
            
        $http = new Client;

        $response = $http->post(url('oauth/token'), [
            'form_params' => [
                'grant_type' => 'password',
                'client_id' => '2',
                'client_secret' => 'X1N3z7wC8fDw6Ol6wDbk9wF2M4OrxCJhOSMAyiop',
                'username' => $request->email,
                'password' => $request->password,
                'scope' => '',
            ],
        ]);

        return response(['data'=>json_decode((string) $response->getBody(), true), 'user'=>$user]); 


    }
    public function login(Request $request) {
        $validatedData = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return response(['status'=>'error', 'message'=>'User not found']);
        }

        if (Hash::check($request->password, $user->password)) {
            $http = new Client;

            $response = $http->post(url('oauth/token'), [
                'form_params' => [
                    'grant_type' => 'password',
                    'client_id' => '2',
                    'client_secret' => 'X1N3z7wC8fDw6Ol6wDbk9wF2M4OrxCJhOSMAyiop',
                    'username' => $request->email,
                    'password' => $request->password,
                    'scope' => '',
                ],
            ]);
            return response(['data'=>json_decode((string) $response->getBody(), true), 'user'=>$user]);
            //return response(['data'=>json_decode((string) $response->getBody(), true)]);
            //return response(['auth'=>json_decode((string) $response->getBody(), true)] ); 
        }
        
    }

}