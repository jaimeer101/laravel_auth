<?php

namespace App\Http\Controllers;

use App\Models\AttributesCategory;
use App\Models\Post;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\UsersAttributes;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;


class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */

    public function edit(Request $request): View
    {
        $emailName = "";
        if(isset($request->user()->email)){
            list($emailName, $emailServer) = explode("@", $request->user()->email);
        }
        $profilesCategory = (new AttributesCategory())->get_pages_category(1);
        return view('profile.index', [
            'user' => $request->user(),
            'userEmail' => $emailName, 
            'profilesCategory' => $profilesCategory
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request, Post $post): RedirectResponse
    {
        $this->authorize('update', $post);
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function save(Request $request){
        $rules = array();
        $usersAttributes = (new UsersAttributes())->get_personal_info_attributes();
        foreach($usersAttributes as $attr){
            $fieldName = $attr->input_code."_".$attr->code;
            $rules[$fieldName] = 'required';
        }
        $request->validate($rules);
        return Redirect::route('profile.index')->with('status', 'profile-updated');
        // echo "<pre>";
        // print_r($usersAttributes);
        // echo "</pre>";
    }
}
