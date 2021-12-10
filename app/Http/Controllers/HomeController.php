<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $data =[];
    public function index(){
        $this -> data['content'] = "Hoc lap trinh cung van tien";
        $this -> data['name'] = "vo ngo van tien";
        $this -> data['id'] = 1;
         $this -> data['girl'] = [];
        return view('test', $this->data);
    }
}
