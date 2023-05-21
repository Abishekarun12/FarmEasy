<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StripeController extends Controller
{
    public function form(){
        return view('products.payment');
    }
    public function makepayment(Request $request){
        $input = $request->all();
        dd($input);
    }
}
