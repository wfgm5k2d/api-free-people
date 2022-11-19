<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;

class UserApiController extends Controller
{
    public function index() {
        $users = User::all();
        return UserResource::collection($users);
    }

    public function getById($id) {
        $user = User::where('id', $id)->get();
        return UserResource::collection($user);
    }

    public function setCar($id, $carId) {
        $user = User::find($id);
        $user->car_id = $carId;

        try{
            if($user->save()) {
                return [
                    'status' => 'success',
                    'message' => trans('car.success')
                ];
            }
        }
        catch(\Exception $e){
            return [
                'status' => 'fail',
                'message' => trans('car.fail')
            ];
        }
    }
}
