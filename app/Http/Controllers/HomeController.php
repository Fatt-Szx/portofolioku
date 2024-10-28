<?php

namespace App\Http\Controllers;

use App\Models\Certification;
use App\Models\Contact;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Project;
use App\Models\Skill;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){

        $data = [
            'certification' => Certification::get(),
            'contact' => Contact::get(),
            'education' => Education::get(),
            'experience' => Experience::get(),
            'project' => Project::get(),
            'skill' => Skill::get(),
            'content' => 'home/home/index'
        ];

        return view('home.layouts.wrapper', $data);
    }

    function project(){
        $data = [
            'project' => Project::first(),
            'content' => 'home/project/index'
        ];

        return view('home.layouts.wrapper', $data);
    }

    function skill(){
        $data = [
            'skill' => Skill::get(),
            'content' => 'home/skill/index'
        ];

        return view('home.layouts.wrapper', $data);
    }

    function experience(){
        $data = [
            'experience' => Experience::get(),
            'content' => 'home/experience/index'
        ];

        return view('home.layouts.wrapper', $data);
    }

}
