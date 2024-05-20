<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;

class RequestController extends Controller
{
    public function RequestAddUser(UserRequest $req)
    {
        return $req->all();
    }
   
}
