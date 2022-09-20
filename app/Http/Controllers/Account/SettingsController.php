<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use App\Http\Requests\Account\SettingsEmailRequest;
use App\Http\Requests\Account\SettingsInfoRequest;
use App\Http\Requests\Account\SettingsPasswordRequest;
use App\Models\User;
use App\Models\UserInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;

use Illuminate\Support\Facades\Storage;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $info = auth()->user()->info;

        // get the default inner page
        return view('pages.account.settings.settings', compact('info'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $user
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(SettingsInfoRequest $request)
    {
        // save user name
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name'  => 'required|string|max:255',
        ]);

        auth()->user()->update($validated);

        // save on user info
        $info = UserInfo::where('user_id', auth()->user()->id)->first();

        if ($info === null) {
            // create new model
            $info = new UserInfo();
        }

        // attach this info to the current user
        $info->user()->associate(auth()->user());

        foreach ($request->only(array_keys($request->rules())) as $key => $value) {
            if (is_array($value)) {
                $value = serialize($value);
            }
            $info->$key = $value;
        }

        // include to save avatar
        if ($avatar = $this->upload()) {
            $info->avatar = $avatar;
        }

        if ($request->boolean('avatar_remove')) {
            Storage::delete($info->avatar);
            $info->avatar = null;
        }

        $info->save();

        return redirect()->intended('account/settings');
    }

    /**
     * Function for upload avatar image
     *
     * @param  string  $folder
     * @param  string  $key
     * @param  string  $validation
     *
     * @return false|string|null
     */
    public function upload($folder = 'images', $key = 'avatar', $validation = 'image|mimes:jpeg,png,jpg,gif,svg|max:2048|sometimes')
    {
        request()->validate([$key => $validation]);

        $file = null;
        if (request()->hasFile($key)) {
            $file = Storage::disk('public')->putFile($folder, request()->file($key), 'public');
        }

        return $file;
    }

    /**
     * Function to accept request for change email
     *
     * @param  SettingsEmailRequest  $request
     */
    public function changeEmail(SettingsEmailRequest $request)
    {
        // prevent change email for demo account
        if ($request->input('current_email') === 'demo@demo.com') {
            return redirect()->intended('account/settings');
        }

        auth()->user()->update(['email' => $request->input('email')]);

        if ($request->expectsJson()) {
            return response()->json($request->all());
        }

        return redirect()->intended('account/settings');
    }

    /**
     * Function to accept request for change password
     *
     * @param  SettingsPasswordRequest  $request
     */
    public function changePassword(SettingsPasswordRequest $request)
    {
        // prevent change password for demo account
        if ($request->input('current_email') === 'demo@demo.com') {
            return redirect()->intended('account/settings');
        }

        auth()->user()->update(['password' => Hash::make($request->input('password'))]);

        if ($request->expectsJson()) {
            return response()->json($request->all());
        }

        return redirect()->intended('account/settings');
    }

    public function accountUpdate(Request $request){

        $data = $request->all();
        $user =  Auth::user();

        if($data['first_name']  != null){
            $user->first_name = $data['first_name'] ;
        }

        if($data['last_name']  != null){
            $user->last_name = $data['last_name'] ;
        }

        if($data['email']  != null){
            $user->email = $data['email'] ;
        }

        if($request->exists('confirm_password') && $request->exists('delete_password')){
            
    
            if(($data['new_password']  != null) && ($data['confirm_password']  != null)){
                if (password_verify($data['current_password'], $user->password)) {
                    if($data['new_password'] == $data['confirm_password']){
                        $user->password =  Hash::make($data['new_password']);
                    }
                    else{
                        return redirect()->route('crypto.account')->with(['status' => 'error' , 'data' => 'New Password does not match with Confirm Password']);
                    }
                }else{
                    return redirect()->route('crypto.account')->with(['status' => 'error' , 'data' => 'Password missmatch']);
                }
            }
    
            $user->save();
    
            return redirect()->route('crypto.account')->with(['status' => 'success' , 'data' => 'Account updated']);

        }else{
    
            if($data['new_password']  != null){
                if (password_verify($data['current_password'], $user->password)) {
                    $user->password =  Hash::make($data['new_password']);
                }else{
                    return redirect()->route('account')->with(['status' => 'error' , 'data' => 'Password missmatch']);
                }
            }
    
            $user->save();
    
            return redirect()->route('account')->with(['status' => 'success' , 'data' => 'Account updated']);
        }

        
        
        
    }

    
}
