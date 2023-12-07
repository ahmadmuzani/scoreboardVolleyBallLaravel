<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Scoreboard;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use phpDocumentor\Reflection\PseudoTypes\True_;

class ScoreboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $scoreboard = scoreboard::all();
        return view('scoreboard', compact('scoreboard'));

        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('scoreboard');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $tambah = new Scoreboard;
        $tambah->set = $request->set;
        $tambah->user_id = Auth::user()->id;
        $tambah->team1 = $request->team1;
        $tambah->team2 = $request->team2;
        $tambah->score1 = $request->score1;
        $tambah->score2 = $request->score2;
        $tambah->spike1 = $request->spike1;
        $tambah->spike2 = $request->spike2;
        $tambah->block1 = $request->block1;
        $tambah->block2 = $request->block2;
        $tambah->serve1 = $request->serve1;
        $tambah->serve2 = $request->serve2;
        $tambah->opponent1 = $request->opponent1;
        $tambah->opponent2 = $request->opponent2;
        $tambah->save();
        return response('success');
    }

    public function show(scoreboard $scoreboard)
    {
        return view('scoreboard', compact('scoreboard'));
        //
    }

    //default konten
    public function read()
    {
        return '';
    }
    //hasil konten
    public function search(Request $request)
    {
        if ($request->ajax()) {
            $scoreboards = Scoreboard::all();
            $data = User::where('username', 'like', '%' . $request->search . '%')->get();
            $output = '';
            if (count($data) == 0) {
                return 'data tidak ada';
            } else {
                $output = '
                <div class="card" style="width: 18rem;">
                <div class="card-header">
                    Username
                </div>
                <ul class="list-group list-group-flush">';

                foreach ($data as $row) {
                    if ($row->id == Auth::user()->id) {
                        $output .= '
                    <li class="list-group-item"><a href="/profile/" style="color:black; text-decoration: none;">' . $row->username . '</a></li>
                        ';
                    } else {
                        $output .= '
                    <li class="list-group-item"><a href="/users/' . $row->id . '" style="color:black; text-decoration: none;">' . $row->username . '</a></li>
                        ';
                    }
                }

                $output .= '
                </ul>
                </div>
                ';
            }
            return $output;
        }
    }


    // $validatedData = $request->validate([
    //     'team1' => ['required', 'unique:name_team1'],
    //     'team2' => ['required', 'unique:name_team2'],
    //     'score1' => ['required'],
    //     'score2' => ['required']
    // ]);
    // Scoreboard::create($validatedData);
    // $request->session()->flash('success', 'Saved!');
    // return redirect('/scoreboard');

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function cari(Request $request)
    {
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
