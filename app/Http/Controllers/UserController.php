<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function index(){
        try {
            $users = User::paginate(5);
            if(!empty($users)){
                $result = [
                    'response' => true,
                    'users' => $users,
                    'message' => 'success'
                ];
            } else {
                $result = [
                    'response' => false,
                    'message' => 'error'
                ];
            }
        } catch (\Throwable $th) {
            $result = [
                'response' => false,
                'message' => $th
            ];
        }
        return response()->json($result);
    }
}
