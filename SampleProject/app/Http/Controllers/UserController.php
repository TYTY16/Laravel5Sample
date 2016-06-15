<?php
/**
 * Created by PhpStorm.
 * User: tjted
 * Date: 6/15/2016
 * Time: 1:14 AM
 */

namespace App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class UserController extends Controller
{
    public function login(Request $request){
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'email|required|unique:users',
            'user_name' => 'required|unique::users',
        ]);
    }

    public function register(){

    }
}