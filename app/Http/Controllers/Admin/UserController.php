<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserUpdateRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class UserController extends Controller
{
    /**
     * Display the user's profile form.
    */

    public function edit( Request $request ): View {
        return view( 'admin.user.edit', [
            'user' => $request->user(),
        ] );
    }

    /**
    * Update the user's profile information.
     */
    public function update(UserUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('userprofile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
    */

    public function destroy( Request $request ): RedirectResponse {
        $request->validateWithBag( 'userDeletion', [
            'password' => [ 'required', 'current_password' ],
        ] );

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to( '/' );
    }
}