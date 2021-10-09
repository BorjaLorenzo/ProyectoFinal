<?php
namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;

class C_menu extends Controller
{
    protected $model_usuarios;

    public function __construct()
    {
        //$this->model_usuarios=new Usuarios();
    }

    public function verInicio(){
        return view('auth.login');
    }
    public function verMenu(){
        return view('dashboard');
    }
}
