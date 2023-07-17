<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Exception;

use Tymon\JWTAuth\Facades\JWTAuth;

class Permission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        try {
            $data_user = JWTAuth::parseToken()->authenticate();
            $user = User::find($data_user['id']);

            if($user->roles[0]->id != 1 ){
                return response()->json([
                    "message"=> "permiso denegado"
                ]);
            }
            // foreach ($user->roles as $role) {
            //     $role->pivot->role_id;
            // }
            // return response()->json([
            //     "response"=>$user,
            //     "role"=>$user->roles[0]->id,
            // ]);


        } catch (Exception $e) {
            if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenInvalidException) {
                return response()->json(['status' => 'Token is Invalid'], 401);
            } else if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenExpiredException) {
                return response()->json(['status' => 'Token is Expired'], 401);
            } else {
                return response()->json(['status' => 'Authorization Token not found'], 401);
            }
        }

        return $next($request);
    }
}
