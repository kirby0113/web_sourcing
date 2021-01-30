<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Message_Room;
use App\Work;

class Message_Room_ListController extends Controller
{
    //
    public function index(Request $request){
        $my_data = Auth::guard('client')->user();
        $ids = Work::select(['Work_id'])->where('client_id',$my_data->Client_id);
        $rooms = Message_Room::whereIn('work_id',$ids)->orderBy('created_at','desc')->get();
        return view('client.message_room_list',compact('rooms'));
    }
}
