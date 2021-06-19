<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
Paginator::useBootstrap();

class EtudiantsController extends Controller
{
    public function AuthEtudiant(Request $request){
     
        $email=$request->input('lg');
        $password=$request->input('pass');
        $nm = DB::select('select count(*) from etudiants where email =? and password = ?', [ $email,$password]);
      if(count($nm)==0)
        return view('login');
        else return view('index');
     
   
       
      
    }
}
