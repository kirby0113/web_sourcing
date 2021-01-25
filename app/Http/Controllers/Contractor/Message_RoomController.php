<?php

namespace App\Http\Controllers\Contractor;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Message_Room;
use App\Message;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Message_RoomController extends Controller
{
    //
    public function index(Request $request){
        $messages = Message::where('room_id',$request->room_id)->get();
        $room = Message_Room::find($request->room_id);
        $my_data = Auth::guard('contractor')->user();
        $my_id = $my_data->contractor_id;
       // var_dump($messages);
       // var_dump($title);
        return view('contractor.message_room',compact('messages','my_id','room'));
    }
}
