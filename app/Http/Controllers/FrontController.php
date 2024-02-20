<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Category;
use Illuminate\Http\Request;

class FrontController extends Controller
{
  public function welcome () {
        $announcements = Announcement::where('is_accepted', true)->orderBy('created_at','desc')->take(6)->get();
        return view('welcome', compact('announcements') );
    }



  public function categoryShow(Category $category){

        return view('categoryShow', compact('category'));
    } 
}
