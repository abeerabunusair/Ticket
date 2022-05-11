<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class TicketController extends Controller
{
    public function open(Request $request){
      $ticKet=new Ticket;
      $ticKet->title=$request->title;
      $ticKet->category=$request->category;
      $ticKet->priority=$request->priority;
      $ticKet->message=$request->message;
      $ticKet->created_at=now();
      $ticKet->updated_at=now();
      $ticKet->save();
      return redirect('');
    }
    public function show(){
        $tickets=Ticket::get();
        return view('my_tickets',compact('tickets'));
    }
    public function showInf($id){
        $tickets=Ticket::where('id','=',$id)->get();
        return view('show_ticket',compact('tickets'));
    }
}
