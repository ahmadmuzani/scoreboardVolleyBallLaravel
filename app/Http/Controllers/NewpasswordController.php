<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class NewpasswordController extends Controller
{
    public function changePasswordPost(Request $request)
    {
        if ((!(Hash::check($request->get('current-password'), Auth::user()->password)))) {
            return redirect('/newpassword')->with("error", "Your current password does not matches with the password.");
        }
        if ($request->get('current-password') == $request->get('new-password')) {
            // Current password and new password same
            return redirect('/newpassword')->with("error", "New Password cannot be same as your current password.");
        }

        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => ['required', 'confirmed', 'min:6']
        ]);
        $users = User::find(Auth::user()->id);
        $users->password = bcrypt($request->get('new-password'));
        $users->update($validatedData);

        return redirect('/edit')->with("success", "Password successfully changed!");




        //Change Password
        // $users = User::find($id);
        // $users->password = $request->input('new-password');
        // $users->update($validatedData);
        // $user = Auth::find($id);
        // $user->password = bcrypt($request->get('new-password'));
        // $user->update();

        // return redirect('/edit')->with("success", "Password successfully changed!");
    }
    //
}
