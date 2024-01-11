<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class koszulkiApi extends Controller
{
    function pobierzDane(){
        return ["name"=>"Szymon"];
    }
}
