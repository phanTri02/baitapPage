<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class xulyController extends Controller
{
    public function store(Request $request) 
    {
        $input = $request ->input('number');

        if ($input == '') {
            return 'Number is required';
        } elseif (!is_numeric($input)) {
            return 'This is not a number, please try again';
        } elseif ((int) $input < 10) {
            return 'Number must greater than 10';
        } else {
            return 'Correct';
        }
        return view('form')-> with('student', $arr);
    }
}
