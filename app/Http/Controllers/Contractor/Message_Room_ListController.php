<?php

namespace App\Http\Controllers\Contractor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Message_Room;
use App\Work;

class Message_Room_ListController extends Controller
{
    //    
    public function index(Request $request){
        $my_data = Auth::guard('contractor')->user();
        $ids = Work::select(['Work_id'])->where('contractor_id',$my_data->Contractor_id);
        $rooms = Message_Room::whereIn('work_id',$ids)->get();
        return view('contractor.message_room_list',compact('rooms'));
    }
}
