<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rules\Exists;

class ForgotPasswordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('forgotpassword');
        //
    }
    public function sendResetLink(Request $request)
    {

        $request->validate([
            'email' => 'required | email | exists:users,email'
        ]);
        $token = \Str::random(32);
        \DB::table('password_resets')->insert([
            'email' => $request->email,
            'token' => $token,
        ]);
        $action_link = route('reset.password.form', ['token' => $token, 'email' => $request->email]);
        $body = "kami telah mengirimkan link untuk mereset password akun volleyball sukaraja, kamu dapat mereset password dengan mengklik tombol berikut.";

        \Mail::send('email-forgot', ['action_link' => $action_link, 'body' => $body], function ($message) use ($request) {
            $message->from('scoreboardvolleyball@gmail.com', 'Volleyball Sukaraja');
            $message->to($request->email, '')
                ->subject('Reset Password');
        });
        return back()->with('success', 'kami telah mengirimkan link reset password ke email kamu!');
    }

    public function showResetForm(Request $request, $token = null)
    {
        return view('reset')->with(['token' => $token, 'email' => $request->email]);
    }

    public function resetPassword(Request $request)
    {
        $request->validate([
            'email' => 'required | email | exists:users,email',
            'password' => 'required | min:6 | confirmed',
            'password_confirmation' => 'required',
        ]);
        $check_token = \DB::table('password_resets')->where([
            'email' => $request->email,
            'token' => $request->token,
        ])->first();
        if (!$check_token) {
            return back()->withInput()->with('fail', 'Invalid Token');
        } else {
            User::where('email', $request->email)->update([
                'password' => \Hash::make($request->password)
            ]);
            \DB::table('password_resets')->where([
                'email' => $request->email,
            ])->delete();
            return redirect()->route('login')->with('success', 'password kamu telah berhasil diubah, silahkan login dengan password baru!')
                ->with('verifiedEmail', $request->email);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
