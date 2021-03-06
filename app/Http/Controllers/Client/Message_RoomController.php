<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Message_Room;
use App\Message;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Message_RoomController extends Controller
{
    //
    public function store(Request $request){
        $insert = new Message_Room;
        $insert->work_id = $request->work_id;
        $insert->contractor_id = $request->contractor_id;
        $insert->finished = false;
        $insert->save();

        $update = \App\Request::find($request->request_id);
        $update->approved = true;
        $update->save();
        $room = DB::table('message_rooms')->orderBy('Room_id','desc')->first();
         return redirect('/client/message_room?room_id='.$room->Room_id);
    }

    public function index(Request $request){
        $messages = Message::where('room_id',$request->room_id)->orderBy('created_at','desc')->get();
        $room = Message_Room::find($request->room_id);
        $my_data = Auth::guard('client')->user();
        $my_id = $my_data->client_id;
       //var_dump($messages);
       // var_dump($title);
        return view('client.message_room',compact('messages','my_id','room'));
    }

    public function finish(Request $request){
        $room = Message_Room::find($request->room_id);
        $room->finished = true;
        $room->save();
        return redirect('/client/toppage');
    }
}
