<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcAdd extends Controller
{
 
    public function add($a, $b)
    {
        return $a + $b;
    }
    public function tinhtong(Request $request)
    {
        $sum = $request->soA + $request->soB;
        return view('sum', compact('sum'));
    }

}
