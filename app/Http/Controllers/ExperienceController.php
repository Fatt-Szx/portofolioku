<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => 'Pengalaman',
            'experience' => Experience::get(),
            'content' => 'admin/experience/index'
        ];
        return view('admin.layouts.wrapper', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title' => 'Tambah Pengalaman',
            'content' => 'admin/experience/create'
        ];
        return view('admin.layouts.wrapper', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'company' => 'required|string',
            'position' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'description' => 'required|string'
        ]);

        Experience::create($request->all());
        return redirect()->route('admin.experience.index')->with('success', 'Pengalaman Telah Ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Experience $experience)
    {
        $data = [
            'title' => 'Edit Pengalaman',
            'experience' => $experience,
            'content' => 'admin/experience/edit'
            
        ];
        return view('admin.layouts.wrapper', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Experience $experience)
    {
        $request->validate([
            'company' => 'required|string',
            'position' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'description' => 'required|string'
        ]);

        $experience->update($request->all());
        return redirect()->route('admin.experience.index')->with('success', 'Pengalaman Telah Ditambahkan!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Experience $experience)
    {
        $experience->delete();
        return redirect()->route('admin.education.index')->with('success', 'Data Pengalaman Berhasil dihapus');
    }
}
