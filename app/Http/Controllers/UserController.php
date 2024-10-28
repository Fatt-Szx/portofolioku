<?php

namespace App\Http\Controllers;

use App\Models\Certification;
use App\Models\Contact;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Project;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    
    public function indexCertification(){
        $certification = Certification::all();
        return view('admin.certification.index', compact('certification'));
    }

    public function indexContact(){
        $contact = Contact::all();
        return view('admin.contact.index', compact('contact'));
    } 
    
    public function indexEducation(){
        $education = Education::all();
        return view('admin.education.index', compact('education'));
    }

    public function indexExperience(){
        $experience = Experience::all();
        return view('admin.experience.index', compact('experience'));
    }

    public function indexProject(){
        $project = Project::all();
        return view('admin.project.index', compact('project'));
    }  
    
    public function indexSkill(){
        $skill = Skill::all();
        return view('admin.skill.index', compact('skill'));
    }

    public function index()
    {
        $data = [
            'title'     => 'Manajemen User',
            'user'      => User::get(),
            'content' => '/admin/user/index'
        ];
        return view('admin.layouts.wrapper', $data);
    }

    public function create()
    {
        //
        $data = [
            'title'     => 'Tambah User',
            'content'   => 'admin/user/create'
        ];
        return view('admin.layouts.wrapper', data: $data);
    }


    public function store(Request $request)
    {
        //
        //dd($request->all());
        $request->validate([
            'name'      =>   'required',
            'email'     =>   'required|unique:users',
            'password'  =>   'required|min:3',
            're_password' => 'required|same:password'
        ]);

        $request['password'] = Hash::make($request['password']);

        User::create($request->all());
        return redirect()->route('admin.user.index')->with('success', 'User Telah Diperbarui!');
    }

    public function show($id)
    {
        //
    }

    public function edit(User $user)
    {
        //
        $data = [
            'title'     => 'Edit User',
            'user'      => $user,
            'content'   => '/admin/user/edit'
        ];
        return view('admin.layouts.wrapper', $data);
    }


    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'nullable|min:3', // Membuat password tidak wajib
            're_password' => 'same:password'
        ]);
    
        $data = $request->only(['name', 'email']); // Ambil hanya data name dan email
    
        // Cek apakah password diisi
        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }
    
        $user->update($data);
    
        return redirect()->route('admin.user.index')->with('success', 'User Telah Diperbarui!');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.user.index')->with('success', 'User Berhasil dihapus');
    }

}
