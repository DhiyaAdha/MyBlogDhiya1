<?php

namespace App\Http\Controllers;

class LocalizationController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function switch($lenguage = 'en')
    {
        
        request()->session()->put('locale', $lenguage);
        return redirect()->back();

    }
}
