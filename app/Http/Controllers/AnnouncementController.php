<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function __construct(){
        return $this->middleware('auth');
    } 

    public function createAnnouncement(){
        return view('announcement.create');
    }

    public function showAnnouncement(Announcement $announcement)
    {
        return view('announcement.show', compact('announcement'));
    }
   
}
