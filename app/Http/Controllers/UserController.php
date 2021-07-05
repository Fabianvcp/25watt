<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTareaRequest;
use App\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateTareaRequest $request
     * @return JsonResponse
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $input['password'] = Hash::make($request->password);
        User::create($input);
        return response()->json([
            'res' => true,
            'message' =>'Usuario creado correctamente'
        ], 200);
    }

    /**
     * @param Request $request
     * @return string
     */

    public function login(Request $request){
        $user = User::whereEmail($request->email)->first();

        if(!is_null($user) && $request->password == $user->password){

            $user->api_token = Str::random(100);
            $user->save();

            return response()->json([
                'res' => true,
                'token' => $user->api_token,
                'message' =>'Usuario Ingresado correctamente'
            ], 200);
        }else{
            $message="El usuario se ha creado";
            toastr($message, 'warning');
            return response()->json([
                'res' => true,
                'message' =>'Error en los datos'
            ], 200);
        }
    }
    public function logout()
    {
        $user = auth()->user();
        $user->api_token = null;
        $user->save();

        return response()->json([
            'res' => true,
            'message' =>'Adios'
        ], 200).redirect('/');

    }
}
