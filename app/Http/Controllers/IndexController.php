<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        xdebug_break();
        $teste = 'aodubado';
        var_dump($teste);
        dd(phpinfo());
    }

}
