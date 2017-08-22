<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Redirect;

    class LogToAdminController extends Controller
    {
        protected $pw;

        public function signIn()
        {
            $data = [
                'page' => 'logtoadmin'
            ];
            return view('admin/login', $data);
        }

        public function postSignIn(Request $req)
        {
            $pw = md5(sha1($req->password));
            $this->pw = md5(sha1('test'));

            if ( $pw == $this->pw ) {
                session(['logged' => true]);
                flash('Vous êtes bien connecté.')->success();
                return Redirect::route('admin.add.event');
            } else {
                flash('Mauvais mot de passe.')->error();
                return Redirect::route('admin.log');
            }
        }
    }
