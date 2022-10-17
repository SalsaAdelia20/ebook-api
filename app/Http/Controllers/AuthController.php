<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\AuthController;

class AuthController extends Controller
{
    public function me(){
        return[
            'NIS' => 3103120205,
            'Name' => 'Salsa Adelia AW',
            'Phone' => '088232877411',
            'Class' => 'XII RPL 6'
        ];
    }
}
