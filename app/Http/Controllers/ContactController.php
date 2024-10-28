<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => 'Kontak',
            'contact' => Contact::get(),
            'content' => 'admin/contact/index'
        ];
        return view('admin.layouts.wrapper', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title' => 'Atur Kontak',
            'content' => 'admin/contact/create'
        ];
        return view('admin.layouts.wrapper', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email',
            'message' =>'required|string'
        ]);

        Contact::create($request->all());
        return redirect()->route('admin.contact.index')->with('success','Kontak berhasil ditambahkan');

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
    public function edit(Contact $contact)
    {
        $data = [
            'title' => 'Edit Kontak',
            'contact' => $contact,
            'content' => 'admin/contact/edit'
        ];
        return view('admin.layouts.wrapper', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email',
            'message' =>'required|string'
        ]);

        $contact->update($request->all());
        return redirect()->route('admin.contact.index')->with('success','Kontak berhasil edit!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('admin.contact.index')->with('success', 'Data Dokter Berhasil di Hapus');
    }
}
