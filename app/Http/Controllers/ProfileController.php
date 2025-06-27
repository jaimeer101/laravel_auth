<?php

namespace App\Http\Controllers;

use App\Models\AttributesCategory;
use App\Models\Post;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\UsersAttributes;
use App\Models\UsersDetails;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;


class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    protected $users_attributes, $users_details;

    public function __construct(){
        $this->users_attributes = new UsersAttributes();
        $this->users_details = new UsersDetails();
    }

    public function edit(Request $request): View
    {
        $emailName = "";
        if(isset($request->user()->email)){
            list($emailName, $emailServer) = explode("@", $request->user()->email);
        }
        $age = $this->users_details->get_users_age(Auth::user()->id);
    
        //dd($age);
       
        $profilesCategory = (new AttributesCategory())->get_pages_category(1);
        return view('profile.index', [
            'user' => $request->user(),
            'userEmail' => $emailName, 
            'profilesCategory' => $profilesCategory, 
            'age' => $age["age"]
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

    public function save_personal_info(Request $request){
        $type = "";
        $message = "";
        $response = array();
        $rules = array();
        $messages = array();
        $personalInfoAttributes = $this->users_attributes->get_required_personal_info_attributes();
        
        foreach($personalInfoAttributes as $attr){
            $fieldName = $attr->input_code."_".$attr->code;
            $rules[$fieldName] = ['required'];
            $messages[$fieldName.".required"] = $attr->name." is required.";
            if($attr->code == "email"){
                array_push($rules[$fieldName], "email");
                $uniqueEmail = "unique:users,email,". Auth::user()->id;
                array_push($rules[$fieldName], $uniqueEmail);

                $messages[$fieldName.".email"] = "Email Format is invalid";
                $messages[$fieldName.".unique"] = "Email must be unique";
            }
        }
        
        $request->validateWithBag("personal_info", $rules, $messages);
        $editable = $this->users_attributes->get_editable_personal_info();
        $saveUsers = $this->users_details->save_users_details($editable, $request, Auth::user()->id);
        if(is_numeric($saveUsers)){
            $name = $request->txt_first_name." ".$request->txt_last_name;
            $user = Auth::user();
            $user->name = $name;
            $user->email = $request->txt_email;
            $user->save();
            $type = "success";
            $message = "Profile Update Done!";
        }
        else{
            $type = "danger";
            $message = $saveUsers;
        }
        $response = array(
            "type"=> $type,
            "message" => $message
        );
        return redirect()->route('profile.edit')->with($response); 
    }

    public function save_password(Request $request){
        //dd($request->all());
        $type = "";
        $message = "";
        $response = array();
        $rules = array();
        $messages = array();
        $user = Auth::user();
        $passwordCondition = [['category_id', '=', '2'], ['required', '=', '1']];
        $passwordAttributes = $this->users_attributes->where($passwordCondition)->get();
        foreach($passwordAttributes as $attr){
            $fieldName = $attr->input_code."_".$attr->code;
            $rules[$fieldName] = ['required'];
            $messages[$fieldName.".required"] = $attr->name." is required.";
            if($attr->code == "old_password"){
                array_push($rules[$fieldName], "current_password");
                $messages[$fieldName.".current_password"] = $attr->name." is not correct.";
            }
        }
        // echo "<pre>";
        // print_r($rules);
        // echo "</pre>";
        // echo "<pre>";
        // print_r($messages);
        // echo "</pre>";
        // exit();
        $request->validate($rules, $messages);
        // echo "test";
        // echo "<pre>";
        // print_r($request->validate($rules, $messages));
        // echo "</pre>";
        // exit();
        $activePage = "password";
        return redirect()->route('profile.edit')->with("active_page", $activePage);
    }
}
