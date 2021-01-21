<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Message;
use App\Message_Room;

class MessageController extends Controller
{
    //

    public function store(Request $request){
        $insert = new Message;
        $room = Message_Room::find($request->room_id);
       // var_dump($room);

        $insert->room_id = $request->room_id;
        $insert->contractor_id = $room->work->Contractor_id;
        $insert->client_id = $room->work->Client_id;
        $insert->Message = $request->message;
        $insert->save();
        return redirect('/client/message_room?room_id='.$request->room_id);
    }
}
