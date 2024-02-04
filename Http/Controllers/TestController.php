<?php
namespace Http\Controllers;

class TestController
{
    public function index() {
       $data['name'] = "salman";
       $data['email'] = "salman.auvi@gmail.com";

       return view('test', $data);
    }
}