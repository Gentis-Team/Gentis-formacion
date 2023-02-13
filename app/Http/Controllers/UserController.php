<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function me()
    {
        return response()->json([
            'status' => true,
            'user' => new UserResource(auth()->user())
        ]);
    }
}
