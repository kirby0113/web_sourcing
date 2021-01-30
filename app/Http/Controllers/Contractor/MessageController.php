<?php

namespace App\Http\Controllers\Contractor;

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
        $insert->contractor_id = $room->contractor_id;
        $insert->client_id = $room->work->Client_id;
        $insert->Message = $request->message;
        $insert->made = 'contractor';
        $insert->save();
        return redirect('/contractor/message_room?room_id='.$request->room_id);
    }
}
