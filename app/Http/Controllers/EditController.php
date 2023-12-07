<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class EditController extends Controller
{

    //
    // public function update(Request $request, $id)
    // {
    //     if (Auth::user()->Username == Auth::user()->Username) {
    //         $validatedData = $request->validate([
    //             'name' => ['required', 'max:255'],
    //             'username' => ['required', 'min:4', 'max:255'],
    //             'email' => ['required', 'email:dns'],
    //         ]);
    //     } else {
    //         $validatedData = $request->validate([
    //             'name' => ['required', 'max:255'],
    //             'username' => ['required', 'min:4', 'max:255', 'unique:users'],
    //             'email' => ['required', 'email:dns'],
    //         ]);
    //     }


    //     $users = User::find($id);
    //     $users->name = $request->input('name');
    //     $users->username = $request->input('username');
    //     $users->email = $request->input('email');
    //     $users->update($validatedData);

    //     return redirect('/profile')->with('success', '<h5>Data telah berhasil diubah brody!</h5>');
    // }


    public function deletephotos($id)
    {
        $users = User::where('id', Auth::user()->id)->update([
            'image' => null
        ]);
        return back()->with('success', 'Your photos has been deleted..');
    }

    public function index()
    {
        Auth::user();
        return view('/newpassword');
        //
    }
}
