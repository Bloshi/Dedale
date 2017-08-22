<?php

    namespace App\Http\Controllers\Admin;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use App\Http\Requests\ContactAdminRequest;

    use Illuminate\Support\Facades\Input;
    use Illuminate\Support\Facades\Redirect;

    class AddGameAdminController extends Controller
    {
        public function addGame()
        {
            $data = [
                'page' => 'addGame'
            ];
            return view('admin/add-game', $data);
        }
    }
