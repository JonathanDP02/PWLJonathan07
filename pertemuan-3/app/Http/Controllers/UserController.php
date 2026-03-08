<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;

class UserController extends Controller
{
    public function index()
    {
    
    // $user = UserModel::find(1);
    // $user = UserModel::firstWhere('level_id', 1);
    $user = UserModel::findOr (1, ['username', 'nama'], function () {abort(404);});
    return view('user', ['data' => $user]);
    }
}
