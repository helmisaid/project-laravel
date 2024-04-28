<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class myFirstcontroller extends Controller
{
    public function index() {
        return view('admin.home');
    }

    public function helloworld() {
        echo "Hello World from controller";
    }

    public function withparam($id) {
        echo 'nilai param adalah '.$id;
    }

    public function showmyview() {
        return view('myview');
    }

    public function viewwithdata() {
        $mydata = 10;
        $myarray = array('Darling in the franxx', 'My Heroes Academia', 'Attack on titan');
        
        return view('folderview.viewdata', ['mydata' => $mydata, 'myarray' => $myarray]);
    }
}
