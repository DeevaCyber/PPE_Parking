<?php

use App\User;
use Illuminate\Support\Facades\Redirect;

...

/**
 * Show the application dashboard.
 *
 * @return \Illuminate\Contracts\Support\Renderable
 */
public function index()
{
    $users = DB::table('users')->get();
    return view('home', ['users' => $users]);
}

public function status(Request $request, $id){
    $data = User::find($id);

    if ($data->status == 0) {
        # code...
        $data->status=1;
    }else{
        $data->status=0;
    }
    $data->save();

    return Redirect::to('home')->with('message', $data->name.' Status has been changed sucessfully.');
}
