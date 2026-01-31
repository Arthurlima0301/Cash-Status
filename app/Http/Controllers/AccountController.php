<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AccountController extends Controller
{
    /* 
        MOSTRAR TODAS AS CONTAS
    */
    public function index()
    {
        return view('Pages.accounts');
    }


}
