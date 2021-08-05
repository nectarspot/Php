<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IimnetController extends Controller
{
    public function index(){
        return view('index');
    }

    public function login(){
        return view('auth.login');
    }
    public function contact(){
        return view('contact-us');
    }

    public function internship(){
        return view('internship.index');
    }

    public function project(){
        return view('internship.project');
    }

    public function freelancing(){
        return view('internship.freelancing');
    }

    public function hiremba(){
        return view('internship.hire-mba');
    }

    public function helpline(){
        return view('helpline.index');
    }

    public function gethelp(){
        return view('helpline.get-help');
    }
    public function volunteer(){
        return view('helpline.volunteer');
    }
    public function gethelpdetails(){
        return view('helpline.get-help-details');
    }
}
