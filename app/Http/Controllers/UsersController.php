<?php

namespace App\Http\Controllers;

use App\Models\scoreboard;
use App\Models\User;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;

class UsersController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  // public function scoreboard()
  // {
  //     $scoreboard = scoreboard::all();
  //     return view('users', ['scoreboard', $scoreboard]);
  //     //
  // }
  public function index()
  {
    // ->latest()->paginate(5)
    $scoreboards = Scoreboard::with('user')->latest()->get();
    // $scoreboards = Scoreboard::with('user')->where('user_id', Auth::user()->id)->firstOrFail();
    return view('users', ['scoreboards' => $scoreboards]);


    // $scoreboards = scoreboard::all();
    // return view('detail', compact('scoreboards'));
    //
  }
  public function show(User $user, scoreboard $scoreboards)
  {

    $users = User::all();
    $scoreboards = scoreboard::with('user')->orderby('id', 'DESC')->limit(5)->latest()->paginate(5);
    return view('users', compact('user'), ['scoreboards' => $scoreboards]);
    //
  }

  // public function read()
  // {
  //   return '';
  // }


  // public function search(Request $request)
  // {
  //   if ($request->ajax()) {
  //     // $scoreboards = Scoreboard::with('user')->where('team1', 'like', '%' . $request->cari . '%')
  //     //     ->orwhere('team2', 'like', '%' . $request->cari . '%')->get();

  //     $scoreboards = scoreboard::where('team1', 'like', '%' . $request->cari . '%')
  //       ->orwhere('team2', 'like', '%' . $request->cari . '%')->latest()->get();


  //     $output = '';
  //     if (count($scoreboards) == 0) {
  //       // <a href='https://www.freepik.com/vectors/mistake'>Mistake vector created by pch.vector - www.freepik.com</a>
  //       return '
  //                 <div class="d-flex justify-content-center mt-2" >
  //                     <img class="" style="width:30%;height:30%; align-items: center;" src="/assets/img/oops-min.png">
  //                 </div>
  //                 ';
  //     } else {
  //       $output .= '
  //                   <div id="result_game">
  //                   <div >
  //                 ';
  //       foreach ($scoreboards as $row) {
  //         $output .= '
  //             <div class="mb-4" style="border: solid 0px; box-shadow: 5px 6px 7px 5px #ccc; border-radius:10px;">
  //             <div class="card text-center">
  //               <div class="card-header">
  //                   <div class="row">
  //                       <div class="col" style="text-decoration: none; text-align:left"><a href="/detail/' . $row->id . '" class="badge badge-info" style="color: black; text-decoration: none;">statistic</a></div>
  //                       <div class="col" style="text-align: center">
  //                         <b>FULL TIME SET ' . $row->set . '</b> 
  //                       </div>
  //                       <div class="col" style="text-align: right">
  //                       </div>
  //                     </div>
  //               </div>
  //               <div class="card-body">
  //                   <div class="row">
  //                       <div class="col-3 d-flex justify-content-start" style="text-align: center;">
  //                         <h4><b>' . $row->team1 . '</b></h4>
  //                       </div>
  //                       <div class="col-2" style="text-align: center;">
  //                         <h4><b>' . $row->score1 . '</b></h4>
  //                       </div>
  //                       <div class="col" style="text-align: center">
  //                         <h2><b>VS</b></h2>
  //                       </div>
  //                       <div class="col-2" style="text-align: center">
  //                         <h4><b>' . $row->score2 . '</b></h4>
  //                       </div>
  //                       <div class="col-3 d-flex justify-content-end" style="text-align: center">
  //                         <h4><b>' . $row->team2 . '</b></h4> 
  //                       </div>
  //                     </div>   
  //               </div>
  //               <div class="card-footer text-muted">
  //                 <div class="row">
  //                   <div class="col d-flex justify-content-center">';
  //         if ($row->score1 > $row->score2) {
  //           $output .= '
  //                       <h4 class="animate__animated animate__flash animate__infinite"><b>WIN</b></h4>
  //                       ';
  //         }
  //         $output .= '
  //                   </div>
  //                   <div class="col-5">
  //                       <p>DATE ' . $row->created_at . '</p> 
  //                   </div>
  //                   <div class="col">';
  //         if ($row->score1 < $row->score2) {
  //           $output .= '
  //                       <h4 class="animate__animated animate__flash animate__infinite"><b>WIN</b></h4>
  //                       ';
  //         }
  //         $output .= '
  //                   </div>
  //                 </div>
  //               </div>
  //             </div>
  //           </div>';
  //         $output .= '
  //                  </div>
  //                  </div>
  //                  ';
  //       }
  //     }
  //     return $output;
  //   }
  // }

  // public function read()
  // {
  //     return '';
  // }

  // public function search(Request $request)
  // {
  //     if ($request->ajax()) {
  //         // $scoreboards = Scoreboard::with('user')->where('team1', 'like', '%' . $request->cari . '%')
  //         //     ->orwhere('team2', 'like', '%' . $request->cari . '%')->get();
  //         $users = User::all();
  //         $scoreboards = scoreboard::with('user')->where('team1', 'like', '%' . $request->cari . '%')->where('user_id', $users->id)
  //             ->orwhere('team2', 'like', '%' . $request->cari . '%')->latest()->get();


  //         $output = '';
  //         if (count($scoreboards) == 0) {
  //             // <a href='https://www.freepik.com/vectors/mistake'>Mistake vector created by pch.vector - www.freepik.com</a>
  //             return '
  //             <div class="d-flex justify-content-center mt-2" >
  //                 <img class="" style="width:40%;height:40%; align-items: center;" src="/assets/img/oops-min.png">
  //             </div>
  //             ';
  //         } else {
  //             $output .= '
  //               <div id="result_game">
  //               <div >
  //             ';
  //             foreach ($scoreboards as $row) {
  //                 if ($row->user_id) {
  //                     $output .= '
  //         <div class="mb-4" style="border: solid 0px; box-shadow: 5px 6px 7px 5px #ccc; border-radius:10px;">
  //         <div class="card text-center">
  //           <div class="card-header">
  //               <div class="row">
  //                   <div class="col" style="text-decoration: none; text-align:left"><a href="/detail/' . $row->id . '" class="badge badge-info" style="color: black; text-decoration: none;">statistic</a></div>
  //                   <div class="col" style="text-align: center">
  //                     <b>FULL TIME SET ' . $row->set . '</b> 
  //                   </div>
  //                   <div class="col" style="text-align: right"><a href="#" data-id="' . $row->id . '" class="badge badge-danger deleteresult" id="hapus" style="text-decoration: none;">delete</a></div>
  //                 </div>
  //           </div>
  //           <div class="card-body">
  //               <div class="row">
  //                   <div class="col-3 d-flex justify-content-start" style="text-align: center;">
  //                     <h4><b>' . $row->team1 . '</b></h4>
  //                   </div>
  //                   <div class="col-2" style="text-align: center;">
  //                     <h4><b>' . $row->score1 . '</b></h4>
  //                   </div>
  //                   <div class="col" style="text-align: center">
  //                     <h2><b>VS</b></h2>
  //                   </div>
  //                   <div class="col-2" style="text-align: center">
  //                     <h4><b>' . $row->score2 . '</b></h4>
  //                   </div>
  //                   <div class="col-3 d-flex justify-content-end" style="text-align: center">
  //                     <h4><b>' . $row->team2 . '</b></h4> 
  //                   </div>
  //                 </div>   
  //           </div>
  //           <div class="card-footer text-muted">
  //             <div class="row">
  //               <div class="col d-flex justify-content-center">';
  //                     if ($row->score1 > $row->score2) {
  //                         $output .= '
  //                   <h5><i class="bi bi-trophy animate__animated animate__flash animate__infinite"></i></h5>
  //                   ';
  //                     }
  //                     $output .= '
  //               </div>
  //               <div class="col-5">
  //                   <p>DATE ' . $row->created_at . '</p> 
  //               </div>
  //               <div class="col">';
  //                     if ($row->score1 < $row->score2) {
  //                         $output .= '
  //                         <h5><i class="bi bi-trophy animate__animated animate__flash animate__infinite"></i></h5>
  //                         ';
  //                     }
  //                     $output .= '
  //               </div>
  //             </div>
  //           </div>
  //         </div>
  //       </div>';
  //                     $output .= '
  //              </div>
  //              </div>
  //              ';
  //                 }
  //             }
  //         }
  //         return $output;
  //     }
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
