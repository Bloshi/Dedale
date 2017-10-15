<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use App\Models\Tags;

    class TagsController extends Controller
    {
        public function index()
        {
            return Tags::all();
        }

        public function store(Request $req)
        {
            return $req->all();
        }
    }
