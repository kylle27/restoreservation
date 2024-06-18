<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Room;
use App\Models\Booking;
use App\Models\Contact;

class HomeController extends Controller
{
    public function room_details($id)
    {
        $room = Room::find($id);
        return view('home.room_details', compact('room'));
    }

    public function add_booking(Request $request, $id)
    {
        $request->validate([
            'startDate' => 'required|date',
            'endDate' => 'required|date',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255', 
            'phone' => 'required|string|max:20', 
        ]);
    
        $startDate = $request->startDate;
        $endDate = $request->endDate;
    
      
        $isBooked = Booking::where('room_id', $id)
            ->where(function($query) use ($startDate, $endDate) {
                $query->where('start_date', '<=', $endDate)
                      ->where('end_date', '>=', $startDate);
            })
            ->exists();
    
        if ($isBooked) {
            return redirect()->back()->with('message', 'Room is already booked. Please try a different date.');
        } else {
            $data = new Booking;
            $data->room_id = $id; 
            $data->name = $request->name;
            $data->email = $request->email;
            $data->phone = $request->phone;
            $data->start_date = $startDate;
            $data->end_date = $endDate;
            $data->save();
    
            return redirect()->back()->with('message', 'Room booked successfully.');
        }
    }

    public function contact(Request $request)
    {
        $contact = new Contact;

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->message = $request->message;

        $contact->save();

        return redirect()->back()->with('message',"Successfully sent the message!");

    }
    
}
