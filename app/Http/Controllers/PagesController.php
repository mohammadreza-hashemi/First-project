<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\CompileReport;
class PagesController extends Controller
{
   
    public function home(){
        $data=['mohammad','ehsan','amin'];
        return view('welcome',['people'=>$data]);
    }
    public function aboute(){
        
        return view('aboute');
    }
    public function store(Request $request){
        
        $this->validate($request ,[
           'email.*' =>'required|email', 
        ],[
            'email.*'=>'ایمیل خطاست!',
        ]);
        
        return 'Okay';
    }
    public function index(Request $request){
        $job=new CompileReport($request->input('reportId'));
        $this->dispatch($job); //dispatch fire jobs
        return "DONE";
    }
}
