<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Message_Room;
use App\Message;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Message_RoomsController extends Controller
{
    //
    public function store(Request $request){
        $insert = new Message_Room;
        $insert->work_id = $request->work_id;
        $insert->finished = false;
        $insert->save();
        $room = DB::table('message_rooms')->orderBy('Room_id','desc')->first();
         return redirect('/client/message_room?room_id='.$room_id);
    }

    public function index(Request $request){
        $messages = Message::where('room_id',$request->room_id)->get();
        $room = Message_Room::find($request->room_id);
        $title = $room->work->Title;
        $my_data = Auth::guard('client')->user();
        $my_id = $my_data->client_id;
       // var_dump($messages);
       // var_dump($title);
        return view('client.message_room',compact('messages','my_id','title'));
    }
}
