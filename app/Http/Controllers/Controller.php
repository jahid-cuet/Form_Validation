<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; // Correct Request import
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function AddUser(Request $req)
    {
        $req->validate([
            'username' => 'required|string|max:255',
            'useremail' => 'required|email|max:255',
            'userage' => 'required|integer|min:0',
        ]);
        return $req->all();

        // Assuming you will add logic here to handle the validated data

        
        
    }
}
