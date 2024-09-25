<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(){
        return view('index');
        
    }

    public function login_register(){
        return view('login.login_register');
    }

    public function gracias($transaction_id){
        return view('donation.gracias', [
            'transaction_id' => $transaction_id]);
    }

    // public function numero($numero){
    //     return view('numero', [
    //         'numero' => $numero]);
    // }
}
