<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

    use App\Models\User;
    use Auth;

    class ProAccountController extends Controller
    {
        public function index()
        {
            return view('user/become_pro');
        }
    }
