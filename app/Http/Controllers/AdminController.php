<?php

namespace App\Http\Controllers;

use App\Ticket;
use Illuminate\Http\Request;
use Auth;
use DB;
use App\User;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{
    public function login(Request $request)
    {

        if ($request->isMethod('post')) {
            $data = $request->all();

            if (Auth::guard('admin')->attempt(['email' => $data['email'], 'password' => $data['password']])) {

                return redirect('/admin/page1');
            } else {
                return redirect('/admin/login')->with('flash_message_error', 'Incorrent username or password');
            }
        }
        return view('admin.login');
    }


    public function page1()
    {
        $ticket = Ticket::where('draw_is_rewarded',true)->first();

        $win_results = DB::table('users')
            ->join('tickets', 'users.id', '=', 'tickets.user_id')
            ->select(array('users.*', DB::raw('COUNT(tickets.id) as ticket_count')))
            ->groupBy('users.id')
            ->where('tickets.is_rewarded', true)
            ->get();


        return view('admin.administration', [
            'ticket' => $ticket,
            'win_results' => $win_results,
        ]);
    }


    public function draw(Request $request)
    {
        $reset_draw_tickets = Ticket::where('draw_is_rewarded',true)->get();
        foreach($reset_draw_tickets as $ticket){
            $ticket->draw_is_rewarded = false;
            $ticket->save();
        }
        $win_nonwin_results = DB::table('users')
            ->join('tickets', 'users.id', '=', 'tickets.user_id')
            ->select(array('users.*', DB::raw('COUNT(tickets.id) as ticket_count')))
            ->groupBy('users.id')
            //->where('tickets.is_rewarded', true)
            ->get();
        
        $max_submitted_tickets_user = $win_nonwin_results->count();
        $winner = rand(0, $max_submitted_tickets_user-1);


        $winner_user_id = $win_nonwin_results[$winner]->id;

        $user = User::where('id', $winner_user_id)->first(); //->tickets->update(['draw_is_rewarded'=> true]);
        
        foreach($user->tickets as $ticket)
        {
            $ticket->draw_is_rewarded = true;
            $ticket->save();
        }

        return redirect()->route('admin.page1');

    }
    
    public function export() 
    {
        return Excel::download(new UsersExport, 'users.xlsx');

    }
}
