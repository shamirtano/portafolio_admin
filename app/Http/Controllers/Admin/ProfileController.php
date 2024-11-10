<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Profile;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class ProfileController extends Controller {
    // TODO: Separar profile de user, perfil es para la página de about y user es el usuario del sistema
    /**
    * Display the user's profile.
     */
    public function index(Request $request): View
    {
        $profile = Profile::first();

        // formatear fecha para mostrar solo el mes y dia de cumpleaños en español usando carbon
        $profile->birthday = Carbon::parse($profile->birthday)->translatedFormat('F d');

        return view('admin.profile.index', compact('profile'));
    }

    public function create()
    {
        return view('admin.profile.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'title' => 'required',
            'email' => 'required',
            'birthday' => 'required',
            'bio' => 'required',
        ]);

        Profile::create($request->all());

        return redirect()->route('profile.index');
    }

    public function edit(Profile $profile): View
    {
        return view('admin.profile.edit', compact('profile'));
    }

    public function update(Request $request, Profile $profile): RedirectResponse
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'title' => 'required',
            'email' => 'required',
            'birthday' => 'required',
            'bio' => 'required',
        ]);

        $profile->update($request->all());

        return Redirect::route('profile.index');
    }

    public function destroy(Profile $profile): RedirectResponse
    {
        $profile->delete();

        return Redirect::route('profile.index');
    }
}