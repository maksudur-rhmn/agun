<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Information;

class InformationController extends Controller
{
   function index ()
   {
     return view('informations.index');
   }

   function create (Request $request)
   {
     Information::insert([
       'name'=>$request->name,
       'email'=>$request->email,
       'project'=>$request->project,
       'git'=>$request->git,
     ]);
     return back();
   }

   function information_list ()
   {
     // $lists  =Information::all();
     $lists  =Information::latest()->paginate(2);
     return view('informations.information_list',compact('lists'));
   }




   // END
}
