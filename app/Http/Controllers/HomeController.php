<?php

namespace App\Http\Controllers;

use App\RafflePicker;
use App\RaffleUser;
use App\winner;
use Illuminate\Http\Request;
use Carbon\Carbon;

class HomeController extends Controller
{
            public function index( )
        {
               $participents = RaffleUser::all()->sortDesc();
               $count = RaffleUser::count();
                return view('raffle_entry',compact('participents','count'))->with('no',1);
        }
            public function draw_index( )
        {
                return view('draw');
        }
            public function draw_again_index( )
        {
                return view('draw_again');
        }
            public function store( Request $request)
        {
               
                RaffleUser::insert([
                'name' => $request->name,
                'phone' => $request->phone,
                'ticket_number' => $request->ticket_number,
                'amount' => $request->amount,
                'created_at' => Carbon::now(),
                
            ]);
                RafflePicker::insert([
                'name' => $request->name,
                'phone' => $request->phone,
                'ticket_number' => $request->ticket_number,
                'created_at' => Carbon::now(),
                
            ]);
            return redirect('/raffle-entry')->with('success', 'New Raffle User Entry Created');
        }
                public function draw_delete($id)
        {
                $participents = RafflePicker::find($id);
                $winner_name = $participents->name;
                $winner_phone = $participents->phone;
                $winner_ticket_number = $participents->ticket_number;
                winner::insert([
                'name' => $winner_name,
                'phone' => $winner_phone,
                'ticket_number' => $winner_ticket_number,
            ]);
                $participents->delete();
                return redirect('/raffle-draw');
        }
                public function admin()
        {
            $participents = RaffleUser::all();
            $sale = RaffleUser::all()->count();
            $amounts = RaffleUser::all()->sum('amount');
            return view('dashboard',compact('amounts','sale', 'participents'));
        }

}
