<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $experiences = Experience::all();

        $type_company = [
            '1' => 'Pública',
            '2' => 'Privada',
            '3' => 'Mixta',
            '4' => 'Independiente',
        ];

        foreach ($experiences as $experience) {
            $experience->type = $type_company[$experience->type];
        }

        return view('admin.experiences.index', compact('experiences'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.experiences.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'company' => 'required',
            'location' => 'required',
            'start_date' => 'required',
        ]);

        Experience::create($request->all());

        return redirect()->route('experiences.index');
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
    public function edit(string $id)
    {
        $experience = Experience::find($id);

        return view('admin.experiences.edit', compact('experience'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'type' => 'required',
            'company' => 'required',
            'location' => 'required',
            'start_date' => 'required',
        ]);

        $experience = Experience::find($id);
        $experience->update($request->all());

        return redirect()->route('experiences.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Experience::destroy($id);

        return redirect()->route('experiences.index');
    }
}
