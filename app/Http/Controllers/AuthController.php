<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class AuthController extends Controller
{
    public function index(){ View :
        return view('index');
    }

    public function index_login(){ View :
        return view('login');
    }

    public function index_home(){ View :
        return view('home');
    }

    public function index_cadastrar(){ View :
        return view('cadastro');
    }
}
