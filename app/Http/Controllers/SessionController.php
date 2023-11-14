<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function index(Request $request)
    {
        echo json_encode($request->session()->all());
        return view('home');
    }

    public function setSingle(Request $request){
        //$request->session()->put('name', 'Annie');

        session(['name'=>'Yolando']);
        return redirect('/')->with('status', 'single session set successfully');
    }

    public function getSingle(Request $request){
        //$name = $request->session()->get('name');
        $name = session('name');
        return redirect('/')->with('status', $name);
    }

    public function setMultiple(Request $request){
        $data = ['1'=>"one", '2'=>"two", '3'=>"three"];
        
        $request->session()->put(['data', $data]);
        return redirect('/')->with(['data', $data]);
      
    }

    public function deleteSession(Request $request){
        $request->session()->flush();
        return view('home');
    }
}
