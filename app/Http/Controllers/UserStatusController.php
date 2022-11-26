<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserStatusController extends Controller
{
    public function index(User $user)
    {
        return view('dashboard.status.index', [
            'user' => $user
        ]);
    }
}
