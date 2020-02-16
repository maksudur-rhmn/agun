<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Information;
use Carbon\Carbon;

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
       'created_at'=>Carbon::now(),
     ]);
     return back();
   }

   function information_list ()
   {
     // $lists  =Information::all();
     $lists  =Information::latest()->paginate(5);
     return view('informations.information_list',compact('lists'));
   }
   function individual_user ($user_id)
   {
      $indiv = Information::findorFail($user_id);
      return view('informations.individual_user', compact('indiv'));

   }
   function information_update (Request $request)
   {
     Information::findorFail($request->user_id)->update([
       'name'=>$request->name,
       'email'=>$request->email,
       'project'=>$request->project,
       'git'=>$request->git,
     ]);
     return back();
   }
   function information_delete($user_id)
   {
     Information::findOrFail($user_id)->delete();
     return back();
   }




   // END
}
