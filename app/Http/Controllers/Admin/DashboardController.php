<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{

    public function rootRedirection()
    {
        return redirect(route('admin.dashboard'));
    }

    public function show()
    {
        return view('layouts.admin');
    }

}
