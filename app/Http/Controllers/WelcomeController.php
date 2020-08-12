<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;


class WelcomeController extends Controller {

    public function index() {
        if (Auth::hasUser()) {
            redirect('home');
        }
        return view('welcome');
    }

}
