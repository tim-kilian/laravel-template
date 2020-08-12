<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;


class WelcomeController extends Controller {

    public function index() {
        if (!is_null(Auth::user())) {
            return redirect('home');
        }
        return view('welcome');
    }

}
