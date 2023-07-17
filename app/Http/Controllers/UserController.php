<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\User;
use Exception;
use Illuminate\Http\Client\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    // protected $user;
    // public function __construct(HttpRequest $request)
    // {
    //     // return response()->json([
    //     //     "request" => $request->all(),
    //     //     "header" => $request->header(),
    //     // ]);
    //     $token = $request->header('Authorization');
    //     if ($token != '')

    //         //En caso de que requiera autentifiación la ruta obtenemos el usuario y lo almacenamos en una variable, nosotros no lo utilizaremos.
    //         $this->user = JWTAuth::parseToken()->authenticate();
    // }

    public function index(HttpRequest $request): JsonResource
    {
        // return response()->json([
        //     "request" => $request->all(),
        // ]);
        return UserResource::collection(User::all());
    }

    public function store(HttpRequest $request): JsonResponse
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255|min:4',
            'email' => 'required|email',
            'password' => 'required|string|min:6|max:12',
            'role' => 'required|numeric'
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->messages()], 400);
        }

        $newUser = User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => $request->password
        ]);

        $newUser->roles()->attach($request->role);

        return response()->json([
            'status' => 'success',
            'message' => 'User created successfully',
            'user' => new UserResource($newUser),
        ], 201);
    }


    public function update(HttpRequest $request): JsonResponse
    {
        //$credentials = $request->only('email', 'password');
        // return response()->json([
        //     "requets" => $request->all(),
        // ]);

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255|min:4',
            'email' => 'required|email',
            'role' => 'required|numeric'
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->messages()], 400);
        }

        $getUser = User::find($request->id);
        if (is_null($getUser)) {
            return response()->json([
                'status' => 'danger',
                'message' => 'User not found',
            ], 404);
        }

        $getUser->name = $request->name;
        $getUser->email = $request->email;
        $getUser->roles()->sync($request->role);
        $getUser->save();

        return response()->json([
            'status' => 'success',
            'message' => 'User updated successfully',
            'user' => new UserResource($getUser),
        ], 201);
    }

    public function destroy($id)
    {
        $getUser = User::find($id);
        if (is_null($getUser)) {
            return response()->json([
                'status' => 'danger',
                'message' => 'User not found',
            ], 404);
        }

        $getUser->delete();
        return response()->json([
            "status" => "sucess",
            "message" => "User deleted successfully.",
            "user" => new UserResource($getUser),
        ]);
    }
}
