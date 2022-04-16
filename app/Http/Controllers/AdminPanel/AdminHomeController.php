<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use function view;

class AdminHomeController extends Controller
{
    //
    public function index() {
        return view('admin.index');
    }
}
