<?php

namespace App\Http\Controllers;

use App\Models\Certification;
use App\Models\Experience;
use App\Models\Project;
use App\Models\Skill;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index(){
        $data = [
            'certification' => Certification::count(),
            'experience' => Experience::count(),
            'project' => Project::count(),
            'skill' => Skill::count(),
            'content' => 'admin/dashboard/index'
        ];
        return view('admin.layouts.wrapper', $data);
    }
}
