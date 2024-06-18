<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Room;
use App\Models\Booking;
use App\Models\Gallery;
use App\Models\Contact;

class AdminController extends Controller
{
    public function index()
    {
        
        if(Auth::id())
        {
            $usertype = Auth()->user()->usertype;
            if($usertype == 'user')
            {
                $room = Room::all();
             

                return view('home.index',compact('room'));
            }
            else if($usertype == 'admin')
            {
                return view('admin.index');
            }
            else
            {
                return redirect()->back();
            }
        }
    }

    public function home(){
        
        $room = Room::all();
        $gallery= Gallery::all();

                return view('home.index',compact('room','gallery'));
        
    }

    public function create_room(){
        return view('admin.create_room');
    }

    public function add_room(Request $request){
            $data = new Room;

            $data->room_title = $request->title;
            $data->description = $request->description;
            $data->price = $request->price;
            $data->wifi = $request->wifi;
            $data->room_type = $request->type;

            $image = $request->image;

            if($image)
            {
                $imagename=time().'.'.$image->getClientOriginalExtension();
                $request->image->move('room', $imagename);

                $data->image = $imagename;
            }

            $data->save();

            return redirect()->back();

    }

    public function view_room(){
        $room = Room::all();
        return view('admin.view_room',compact('room'));
    }

    public function delete_room($id){

        $data =Room::find($id);

        $image_path = public_path('rooms/'.$data->image);

        if(file_exists($image_path))
        {
            unlink($image_path);
        }

      

        $data->delete();

            return redirect()->back();

    }
    public function update_room($id){

        $data = Room::find($id);

 
        return view('admin.update_room',compact('data'));
    }


    public function edit_room(Request $request, $id){

        $data = Room::find($id);
      
        
        $data->room_title = $request->title;
        $data->description = $request->description;
        $data->price = $request->price;
        $data->wifi = $request->wifi;
        $data->room_type = $request->type;
        $image = $request->image;

        if($image)
        {
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('room', $imagename);

            $data->image = $imagename;
        }

        $data->save();


        return redirect('/view_room');

    }
    public function room_search(Request $request){

        $search = $request->search;
        $room = Room::where('room_title','LIKE','%'.$search.'%')->paginate(3);


        return view('admin.view_room',compact('room'));
    }

        public function bookings()
        {
            $data = Booking::all();
            return view('admin.bookings', compact('data'))->with('message', 'Table is already deleted.');
        }

        public function delete_booking($id)
        {
            $data = Booking::find($id);
            $data->delete();
            return redirect()->back();
        }

        public function approve_booking($id){
                $booking = Booking::find($id);
                $booking->status = 'approved';
                $booking->save();
                return redirect()->back();
        }
        public function reject_booking($id){
            $booking = Booking::find($id);
            $booking->status = 'rejected';
            $booking->save();
            return redirect()->back();
    }

    public function view_gallery(){
        $gallery =Gallery::all();
        return view('admin.gallery', compact('gallery'));
    }
        public function upload_gallery(Request $request)
        {
            $data = new Gallery;
            $image = $request->image;
        
            if($image)
            {
                $imagename=time().'.'.$image->getClientOriginalExtension();
                $request->image->move('gallery', $imagename);

                $data->image = $imagename;
            }

            $data->save();
            return redirect()->back();
        }

        public function delete_gallery($id){
            $data = Gallery::find($id);

            $data->delete();
            return redirect()->back();
        }

        public function all_messages()
        
        {

            $data = Contact::all();
            return view('admin.all_messages',compact('data'));
        }
}
