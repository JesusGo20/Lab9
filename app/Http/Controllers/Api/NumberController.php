<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NumberController extends Controller
{
    //
    function suma($num1, $num2)
    {
        return $num1 + $num2;
    }

    function multiplicacion($num1, $num2)
    {
        return $num1 * $num2;
    }
}
