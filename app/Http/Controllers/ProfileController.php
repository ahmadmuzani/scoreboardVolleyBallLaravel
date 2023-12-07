<?php

namespace App\Http\Controllers;

use App\Models\scoreboard;
use App\Models\User;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Crypt;

// use DB;

class ProfileController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  // public function tampil()
  // {
  //     $users = User::all();
  //     return view('profile', compact('profile'));
  //     //
  // }

  // public function show(User $user)
  // {
  //     return view('profile', compact('profile'));
  //     //
  // }
  // public function save_image(Request $request)
  // {

  //   $user = new User;
  //   if ($request->hasFile('image')) {
  //     $completeFileName = $request->file('image')->getClientOriginalName();
  //     $fileNameOnly = pathinfo($completeFileName, PATHINFO_FILENAME);
  //     $extension = $request->file('image')->getClientOriginalExtension();
  //     $compPict = str_replace(' ', '_', $fileNameOnly) . '-' . rand() . '_' . time() . '.' . $extension;
  //     $path = $request->file('image')->storeAs('public/users', $compPict);
  //     $user->picture = 'users/' . $compPict;
  //   }
  //   if ($user->update()) {
  //     echo 200;
  //   } else {
  //     echo 700;
  //   }
  // }


  public function show()
  {
    return response()->view('profile')->header('Content-Type', 'application/javascript');
  }

  public function imguploadpost(Request $request)
  {


    if ($request->ajax()) {
      $data = $request->file('file');
      $extension = $data->getClientOriginalExtension();
      $filename = str_replace(' ', '_', Auth::user()->id) . 'id' . '_' . 'userscoreboard' . '_profilepict' . '.' . $extension; //untuk rename image
      $path = public_path('photosprofile');
      $usersImage = public_path("photosprofile/{$filename}");
      if (File::exists($usersImage)) {
        // unlink($usersImage);
        $users = User::where('id', Auth::user()->id)->update([
          'image' => $filename
        ]);
      } else {
        $pp = 'nofileexist';
        $users = User::where('id', Auth::user()->id)->update([
          'image' => $filename
        ]);
      }
      $upload_success = $data->move($path, $filename);
      return response()->json([
        'success' => 'done',
        'valueimg' => $data
      ]);
    }
    $users = User::all();
    return view('profile', compact('users'));
  }

  public function edit()
  {
    Auth::user();
    return view('edit');
    //
  }

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
  public function update(Request $request, $id)
  {
    if ($request->input('username') == Auth::user()->username) {
      $validatedData = $request->validate([
        'name' => ['required', 'max:255'],
        'username' => ['required', 'min:4', 'max:255'],
        'email' => ['required', 'email:dns'],
      ]);
    } else {
      $validatedData = $request->validate([
        'name' => ['required', 'max:255'],
        'username' => ['required', 'min:4', 'max:255', 'unique:users'],
        'email' => ['required', 'email:dns'],
      ]);
    }
    $users = User::find($id);
    $users->name = $request->input('name');
    $users->username = $request->input('username');
    $users->email = $request->input('email');


    $users->update($validatedData);




    return redirect('/profile')->with('success', '<h5>Data telah berhasil diubah brody!</h5>');
  }


  // public function updatePassword(Request $request, $id)
  // {
  //   if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
  //     return redirect()->back()->with('error', 'Your current password does not matches with the password.');
  //   }
  //   if ($request->get('password' == Auth::user()->password)) {
  //     return redirect()->back()->with('error', 'New password cannot be same as your current password.');
  //   }
  //   $validatedData = $request->validate([
  //     'name' => ['required', 'max:255'],
  //     'username' => ['required', 'min:4', 'max:255', 'unique:users'],
  //     'email' => ['required', 'email:dns'],
  //   ]);
  //   $validatedData = $request->validate([
  //     'current-password' => ['required'],
  //     'password' => ['required', 'confirmed', 'min:6']
  //   ]);
  //   $validatedData['password'] = bcrypt($validatedData['password']);

  //   $users = User::find($id);
  //   $users->password = $request->input('password');
  //   $users->update($validatedData);

  //   return redirect('/profile')->with('success', '<h5>Data telah berhasil diubah brody!</h5>');
  // }
  // public function update($id)
  // {
  //   return view('edit');
  // }
  // public function show($id)
  // {
  //   $data = User::find($id);
  //   return view('edit');
  //   //
  // }

  public function indexprofile()
  {
    // ->latest()->paginate(5)
    $scoreboards = Scoreboard::where('user_id', Auth::user()->id)->latest()->paginate(5);
    // $scoreboards = Scoreboard::with('user')->where('user_id', Auth::user()->id)->firstOrFail();
    return view('profile', ['scoreboards' => $scoreboards]);

    // $scoreboards = scoreboard::all();
    // return view('detail', compact('scoreboards'));
    //
  }
  public function delete($id)
  {
    $scoreboards = Scoreboard::find($id);
    $scoreboards->delete($id);
    // $users = User::where('id', Auth::user()->id)->update([
    //   'image' => null
    // ]);
    // $request->session()->flash('success', 'Data Berhasil Di Hapus COKKKKK!');
    // return redirect()->route('profile');
    return back()->with('success', 'Your file has been deleted..');
  }


  public function read()
  {
    return '';
  }

  public function search(Request $request)
  {
    if ($request->ajax()) {
      // $scoreboards = Scoreboard::with('user')->where('team1', 'like', '%' . $request->cari . '%')
      //     ->orwhere('team2', 'like', '%' . $request->cari . '%')->get();

      $scoreboards = scoreboard::where('team1', 'like', '%' . $request->cari . '%')
        ->orwhere('team2', 'like', '%' . $request->cari . '%')->latest()->get();


      $output = '';
      if (count($scoreboards) == 0) {
        // <a href='https://www.freepik.com/vectors/mistake'>Mistake vector created by pch.vector - www.freepik.com</a>
        return '
                <div class="d-flex justify-content-center mt-2" >
                    <img class="" style="width:40%;height:40%; align-items: center;" src="/assets/img/oops-min.png">
                </div>
                ';
      } else {
        $output .= '
                  <div id="result_game">
                  <div >
                ';
        foreach ($scoreboards as $row) {

          $output .= '
            <div class="mb-4" style="border: solid 0px; box-shadow: 5px 6px 7px 5px #ccc; border-radius:10px;">
            <div class="card text-center">
              <div class="card-header">
                  <div class="row">
                      <div class="col" style="text-decoration: none; text-align:left"><a href="/detail/' . $row->id . '" class="badge badge-info" style="color: black; text-decoration: none;">statistic</a></div>
                      <div class="col" style="text-align: center">
                        <b>FULL TIME SET ' . $row->set . '</b> 
                      </div>
                      <div class="col" style="text-align: right">
                      </div>
                    </div>
              </div>
              <div class="card-body">
                  <div class="row">
                      <div class="col-3 d-flex justify-content-start" style="text-align: center;">
                        <h4><b>' . $row->team1 . '</b></h4>
                      </div>
                      <div class="col-2" style="text-align: center;">
                        <h4><b>' . $row->score1 . '</b></h4>
                      </div>
                      <div class="col" style="text-align: center">
                        <h2><b>VS</b></h2>
                      </div>
                      <div class="col-2" style="text-align: center">
                        <h4><b>' . $row->score2 . '</b></h4>
                      </div>
                      <div class="col-3 d-flex justify-content-end" style="text-align: center">
                        <h4><b>' . $row->team2 . '</b></h4> 
                      </div>
                    </div>   
              </div>
              <div class="card-footer text-muted">
                <div class="row">
                  <div class="col d-flex justify-content-center">';
          if ($row->score1 > $row->score2) {
            $output .= '
            <h4 class="animate__animated animate__flash animate__infinite"><b>WIN</b></h4>
            ';
          }
          $output .= '
                  </div>
                  <div class="col-5">
                      <p>DATE ' . $row->created_at . '</p> 
                  </div>
                  <div class="col">';
          if ($row->score1 < $row->score2) {
            $output .= '
            <h4 class="animate__animated animate__flash animate__infinite"><b>WIN</b></h4>
            ';
          }
          $output .= '
                  </div>
                </div>
              </div>
            </div>
          </div>';
          $output .= '
                 </div>
                 </div>
                 ';
        }
      }
      return $output;
    }
  }

  public function reading()
  {
    return '';
  }

  public function searching(Request $request)
  {
    if ($request->ajax()) {
      // $scoreboards = Scoreboard::with('user')->where('team1', 'like', '%' . $request->cari . '%')
      //     ->orwhere('team2', 'like', '%' . $request->cari . '%')->get();

      $scoreboards = scoreboard::where('team1', 'like', '%' . $request->cari . '%')->where('user_id', Auth::user()->id)
        ->orwhere('team2', 'like', '%' . $request->cari . '%')->where('user_id', Auth::user()->id)->latest()->get();


      $output = '';
      if (count($scoreboards) == 0) {
        // <a href='https://www.freepik.com/vectors/mistake'>Mistake vector created by pch.vector - www.freepik.com</a>
        return '
                <div class="d-flex justify-content-center mt-2" >
                    <img class="" style="width:40%;height:40%; align-items: center;" src="/assets/img/oops-min.png">
                </div>
                ';
      } else {
        $output .= '
                  <div id="result_game">
                  <div >
                ';
        foreach ($scoreboards as $row) {
          if ($row->user_id == Auth::user()->id) {
            $output .= '
            <div class="mb-4" style="border: solid 0px; box-shadow: 5px 6px 7px 5px #ccc; border-radius:10px;">
            <div class="card text-center">
              <div class="card-header">
                  <div class="row">
                      <div class="col" style="text-decoration: none; text-align:left"><a href="/detail/' . $row->id . '" class="badge badge-info" style="color: black; text-decoration: none;">statistic</a></div>
                      <div class="col" style="text-align: center">
                        <b>FULL TIME SET ' . $row->set . '</b> 
                      </div>
                      <div class="col" style="text-align: right">
                      <a href="/delete/' . $row->id . '" onclick="return confirm("yakin");" class="badge badge-danger deleteresult" id="hapus" style="text-decoration: none;">delete</a>
                      </div>
                    </div>
              </div>
              <div class="card-body">
                  <div class="row">
                      <div class="col-3 d-flex justify-content-start" style="text-align: center;">
                        <h4><b>' . $row->team1 . '</b></h4>
                      </div>
                      <div class="col-2" style="text-align: center;">
                        <h4><b>' . $row->score1 . '</b></h4>
                      </div>
                      <div class="col" style="text-align: center">
                        <h2><b>VS</b></h2>
                      </div>
                      <div class="col-2" style="text-align: center">
                        <h4><b>' . $row->score2 . '</b></h4>
                      </div>
                      <div class="col-3 d-flex justify-content-end" style="text-align: center">
                        <h4><b>' . $row->team2 . '</b></h4> 
                      </div>
                    </div>   
              </div>
              <div class="card-footer text-muted">
                <div class="row">
                  <div class="col d-flex justify-content-center">';
            if ($row->score1 > $row->score2) {
              $output .= '
              <h4 class="animate__animated animate__flash animate__infinite"><b>WIN</b></h4>
              ';
            }
            $output .= '
                  </div>
                  <div class="col-5">
                      <p>DATE ' . $row->created_at . '</p> 
                  </div>
                  <div class="col">';
            if ($row->score1 < $row->score2) {
              $output .= '
              <h4 class="animate__animated animate__flash animate__infinite"><b>WIN</b></h4>
              ';
            }
            $output .= '
                  </div>
                </div>
              </div>
            </div>
          </div>';
            $output .= '
                 </div>
                 </div>
                 ';
          }
        }
      }
      return $output;
    }
  }


  // $output = "";
  // $scoreboards = scoreboard::with('user')->where('team1', 'like', '%' . $request->cari . '%')
  //     ->orwhere('team2', 'like', '%' . $request->cari . '%')->get();

  // foreach ($scoreboards as $scoreboard) {
  //     $output .= '
  //     <div class="container mb-2 history" id="content" style="border: solid 0px; box-shadow: 5px 6px 7px 5px #ccc">
  //         <div class="row">
  //         <div class="col" style="text-decoration: none"><a href="/detail/' . $scoreboard->id . '" class="badge badge-info" style="color: black; text-decoration: none;">' . 'statistic</a></div>
  //         <div class="col" style="text-align: center">
  //           <b>FULL TIME SET ' . $scoreboard->set . '</b> 
  //         </div>
  //         <div class="col" style="text-align: right"><a href="" class="badge badge-danger" style="text-decoration: none">delete</a></div>
  //       </div>
  //       <div class="row">
  //           <div class="col-4" style="text-align: center;">
  //             <b>' . $scoreboard->team1 . '</b>
  //           </div>
  //           <div class="col-1" style="text-align: center;">
  //             <b>' . $scoreboard->score1 . '</b>
  //           </div>
  //           <div class="col" style="text-align: center">
  //             <b>VS</b>
  //           </div>
  //           <div class="col-1" style="text-align: center">
  //             <b>' . $scoreboard->score2 . '</b>
  //           </div>
  //           <div class="col-4" style="text-align: center">
  //             <b>' . $scoreboard->team2 . '</b> 
  //           </div>
  //         </div>
  //         <div class="row">
  //           <div class="col" style="text-align: center">
  //             <h6>DATE ' . $scoreboard->created_at . '</h6>
  //           </div>
  //         </div>
  //         </div>
  //         ';
  // }
  // return response($output);

  //hasil konten

  // $cari = $request->cari;
  // $data = scoreboard::where('team1', 'like', '%' . $cari . '%')
  //     ->orwhere('team2', 'like', '%' . $cari . '%')->paginate();
  // return view('profile', ['scoreboard' => $data]);


  //     $output = '';
  //     if (count($data) > 0) {

  //         foreach ($data as $row) {
  //             $output .= '
  //             <div class="container history" style="border: solid 0px; box-shadow: 6px 7px 5px #ccc">
  //             <div class="row">
  //               <div class="col" style="text-decoration: none"><a href="/detail/' . $row->id . '" class="badge badge-info" style="color: black; text-decoration: none;">statistic</a></div>
  //               <div class="col" style="text-align: center">
  //                 <b>FULL TIME SET' . $row->set . '</b> 
  //               </div>
  //               <div class="col" style="text-align: right"><a href="" class="badge badge-danger" style="text-decoration: none">delete</a></div>

  //             </div>
  //             <div class="row">
  //               <div class="col-4" style="text-align: center;">
  //                 <b>' . $row->team1 . '</b>
  //               </div>
  //               <div class="col-1" style="text-align: center;">
  //                 <b>' . $row->score1 . '</b>
  //               </div>
  //               <div class="col" style="text-align: center">
  //                 <b>VS</b>
  //               </div>
  //               <div class="col-1" style="text-align: center">
  //                 <b>' . $row->score2 . '</b>
  //               </div>
  //               <div class="col-4" style="text-align: center">
  //                 <b>' . $row->team2 . '</b> 
  //               </div>
  //             </div>
  //             <div class="row">
  //               <div class="col" style="text-align: center">
  //                 <h6>DATE ' . $row->created_at . '</h6>
  //               </div>
  //             </div>
  //           </div>
  //           <br>
  //                 ';
  //         }
  //     } else {

  //         $output .= 'No results';
  //     }

  //     return $output;
  // }


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

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */


  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  // public function update(Request $request, $id)
  // {
  //   //
  // }

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
