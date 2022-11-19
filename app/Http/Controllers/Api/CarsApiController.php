<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CarsResource;
use App\Models\Cars;
use App\Models\User;

class CarsApiController extends Controller
{
    public function index() {
        $cars = Cars::all();
        return CarsResource::collection($cars);
    }

    public function getById($id) {
        $cars = Cars::where('id', $id)->get();
        return CarsResource::collection($cars);
    }

    public function getUserById($userId) {
        $user = User::find($userId);
        if($user->car_id) {
            return (new UserApiController())->getById($user->id);
        } else {
            return [
                'status' => 'fail',
                'message' => trans('user.fail_car')
            ];
        }
    }
}
