<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => 'Riwayat Pendidikan',
            'education' => Education::get(),
            'content' => 'admin/education/index'
        ];
        return view('admin.layouts.wrapper', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        $data = [
            'title' => 'Tambah Riwayat Pendidikan',
            'content' => 'admin/education/create'
        ];
        return view('admin.layouts.wrapper', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'school_name' => 'required|string',
            'degree' => 'string',
            'field_of_study' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date'
        ]);

        Education::create($request->all());
        return redirect()->route('admin.education.index')->with('success', 'Data Pendidikan Berhasil Ditambahkan!');
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
    public function edit(Education $education)
    {
        $data = [
            'title' => 'Tambah Kontak',
            'education' => $education,
            'content' => 'admin/education/edit'
        ];
        return view('admin.layouts.wrapper', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Education $education)
    {
        $request->validate([
            'school_name' => 'required|string',
            'degree' => 'string',
            'field_of_study' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date'
        ]);
        $education->update($request->all());
        return redirect()->route('admin.education.index')->with('success', 'Data Pendidikan Berhasil di Update!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Education $education)
    {
        $education->delete();
        return redirect()->route('admin.education.index')->with('success', 'Data Pendidikan Berhasil dihapus');
    }
}
