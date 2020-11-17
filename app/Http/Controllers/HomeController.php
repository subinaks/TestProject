<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Department;
use App\Designation;
class HomeController extends Controller
{
    public function  index()
    {
        $users= User::join('designations','designations.id','users.Fk_designation')
        ->join('departments','departments.id','users.Fk_department')
        ->select('users.id','users.Name','departments.Name as department','designations.Name as designation')
        ->get();
        return view('userslist', compact('users'));
    }
    
    public function searchData(Request $request)
    {
        // dd($request->all());
        $search=$request->get('search');
        $users= User::join('designations','designations.id','users.Fk_designation')
        ->join('departments','departments.id','users.Fk_department')
        ->select('users.id','users.Name','departments.Name as department','designations.Name as designation')
        ->orWhere('users.Name','LIKE', "%$search%")
        ->orWhere('departments.Name','LIKE', "%$search%")
        ->orWhere('designations.Name','LIKE', "%$search%")
        ->orderBy('users.Name')
        ->get();

        // dd( $users);
     
        return view('userSearchList',compact('users'));
    }
}
