<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class arrController extends Controller
{
    public function getIndex() {
        $name = 'phantri';
        $age = '20';
        $class = '20CSE';
        $arr = [
            [
                'name' => $name,
                'age' => $age,
                'class' => $class
            ],
            [
                'name' => 'khanhha',
                'age' => '16',
                'class' => $class
            ]
            
        ];
        return view('info')-> with('student', $arr);
    }
}
