<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ForgotPassword extends Controller
{
    //
    public function forgot_pass(){
        return view("forgot_password.masukkan_email");
    }
    public function otp_page(){
        return view("forgot_password.otp_page");
    }
    public function new_pass(){
        return view("forgot_password.password_baru");
    }
}
