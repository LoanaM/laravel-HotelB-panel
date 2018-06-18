<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;

class HomeController extends Controller
{
    public function roomshow(){
      $rooms=Room::all();

      return view('rooms',['rooms'=>$rooms]);
    }

    public function add(Request $request){
      if($request->method()=='GET')
      return view('add');

      elseif ($request->method()=='POST')
      $room = New Room();
      $room->n_stanza = $request->input('n_stanza');
      $room->tipologia = $request->input('tipologia');
      $room->piano = $request->input('piano');

      $room->save();

      return redirect()->route('rooms');
    }

}
