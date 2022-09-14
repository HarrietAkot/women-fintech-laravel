<?php

namespace App\Http\Controllers;

use App\Models\Business;
use App\Models\User;
use Illuminate\Http\Request;

class InvestmentController extends Controller
{
    public function businessList(){
        $list = Business::all();
        return $list;

    }
    public function userList(){
        $list = User::with('wallet')->with('investment')->get();
        return $list;
    }
}
