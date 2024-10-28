<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => 'Skill Anda',
            'skill' => Skill::get(),
            'content' => 'admin/skill/index'
        ];

        return view('admin.layouts.wrapper', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title' => 'Tambah Skill',
            'content' => 'admin/skill/create'
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
            'level' => 'required|integer|min:1|max:100'
        ]);

        Skill::create($request->only(['name', 'level']));
        return redirect()->route('admin.skill.index')->with('success', 'Skill Telah Ditambahkan!');
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
    public function edit(Skill $skill)
    {
        $data = [
            'title' => 'Edit Skill',
            'skill' => $skill,
            'content' => 'admin/skill/edit'
        ];
        return view('admin.layouts.wrapper', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Skill $skill)
    {
        $request->validate([
            'name' => 'required|string',
            'level' => 'required|integer'
        ]);

        $skill->update($request->all());
        return redirect()->route('admin.skill.index')->with('success', 'Skill Telah Diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Skill $skill)
    {
        $skill->delete();
        return redirect()->route('admin.skill.index')->with('success', 'Skill Berhasil Dihapus!');
    }
}
