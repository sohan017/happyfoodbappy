<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
   //   public function index()
   //  {
   //     return view('admin.dashboard');
   //  }
    
     public function datatable()
    {
       return view('admin.pages.datatable');
    }
    
     public function generalform()
    {
       return view('admin.pages.generalform');
    }
    
     public function advanceform()
    {
       return view('admin.pages.advanceform');
    }

     public function errorpage()
    {
       return view('admin.pages.errorpage');
    }
     public function blankpage()
    {
       return view('admin.pages.blankpage');
    }
     public function notification()
    {
       return view('admin.pages.notification');
    }
    
}
