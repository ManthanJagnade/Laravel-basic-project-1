<?php

namespace App\Http\Controllers;
use App\Models\Projectw;

use Illuminate\Http\Request;

class ProjectwController extends Controller
{
    public function store(Request $request)
    {
        $projectw=new Projectw();
        $projectw->username=$request->username;
        $projectw->pwd=$request->pwd;
        $projectw->save();
    }
}
