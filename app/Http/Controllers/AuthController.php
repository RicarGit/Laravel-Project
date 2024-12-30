<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller {
  public function loginForm() {
    return \view('login');
  }

  public function signUpForm() {
    return \view('sign-up');
  }

}