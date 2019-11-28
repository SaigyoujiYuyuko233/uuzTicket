<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{

    public function rootRedirection()
    {
        return redirect('admin.dashboard');
    }

    public function show()
    {
        return 'work in process';
    }

}
