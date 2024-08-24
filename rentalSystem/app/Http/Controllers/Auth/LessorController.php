<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LessorController extends Controller
{
    public function index()
    {
        // قم بإرجاع العرض المناسب أو تنفيذ المنطق هنا
        return view('lessor.dashboard'); // تأكد من وجود هذا العرض في resources/views
    }
}
