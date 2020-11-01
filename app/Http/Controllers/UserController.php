<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // se recomienda hacerlo en el routes->web para no hacer demasiado largo el controlador
    public function __construct()
    {
        $this->middleware('auth');
    }
}
