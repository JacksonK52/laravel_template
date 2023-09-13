<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Index
     * =============================
     */
    public function index() {
        $users = User::orderBy('created_at', 'desc')->get();

        $context = [
            'users' => $users
        ];
        return view('users.index', $context);
    }
}
