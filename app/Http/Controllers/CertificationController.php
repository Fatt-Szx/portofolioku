<?php

namespace App\Http\Controllers;

use App\Models\Certification;
use Illuminate\Http\Request;

class CertificationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => 'Sertifikat',
            'certification' => Certification::get(),
            'content' => 'admin/certification/index'
        ];
        return view('admin.layouts.wrapper', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title' => 'Tambah Sertifikat',
            'content' => 'admin/certification/create'
        ];
        return view('admin.layouts.wrapper', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'issuing_organization' => 'required|string',
            'issuing_date' => 'required|date',
            'expiration_date' => 'date'
        ]);

        Certification::create($request->all());
        return redirect()->route('admin.certification.index')->with('success','Sertifikat berhasil ditambahkan!');
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
    public function edit(Certification $certification)
    {
        $data = [
            'title' => 'Edit Sertifikat',
            'certification' => $certification,
            'content' => 'admin/certification/edit'
        ];
        return view('admin.layouts.wrapper', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Certification $certification)
    {
        $request->validate([
            'title' => 'required|string',
            'issuing_organization' => 'required|string',
            'issuing_date' => 'required|date',
            'expiration_date' => 'date'
        ]);

        $certification->update($request->all());
        return redirect()->route('admin.certification.index')->with('success','Sertifikat berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Certification $certification)
    {
        $certification->delete();
        return redirect()->route('admin.certification.index')->with('success','Sertifikat berhasil dihapus!');
    }
}
