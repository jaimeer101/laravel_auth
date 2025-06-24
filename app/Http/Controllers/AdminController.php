<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminDashboard()
    {
        if (Gate::allows('access-admin')) {
            return view('admin.dashboard');
        }
        abort(403, 'Unauthorized!');
    }
}
