<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ProdutosController extends Controller
{
    public function index(){
return view("products.index");
    }

    public function add(){
return view('products.add');
    }

    public function view(){

    }

    public function addSave(Request $form){
dd($form);
    }
}
