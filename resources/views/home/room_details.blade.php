<!DOCTYPE html>
<html lang="en">
   <head>
    <base href="/public">
    @include('home.css')
    <style type="text/css">
        .div_deg {
            padding-left: 300px;
        }

        .div_deg div {
            margin-bottom: 15px;
        }

        label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
}

input[type="text"],
input[type="number"],
input[type="date"] {
    width: 300px;
    padding: 8px;
    box-sizing: border-box;
    border: 2px solid #a30000; 
    border-radius: 4px;
    transition: border-color 0.3s;
}

input[type="text"]:focus,
input[type="number"]:focus,
input[type="date"]:focus {
    border-color: #28a745; 
    outline: none;
}

input[type="submit"] {
    display: inline-block;
    padding: 10px 20px;
    background-color: #a30000; 
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #0056b3; 
}
        
    </style>
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
      @include('home.header')
      </header>

    
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
      <div  class="our_room">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Our Room</h2>
                     <p>Lorem Ipsum available, but the majority have suffered </p>
                  </div>
               </div>
            </div>
            <div class="row">
           
               <div class="col-md-4 col-sm-6">
                  <div id="serv_hover" style="padding:20px height:300px; width:500px" class="room">
                     <div class="room_img">
                        <figure><img style="height:300px; width:500px" src="/room/{{$room->image}}"  alt="#"/></figure>
                     </div>
                     <div class="bed_room">
                        <h3 style="padding: 12px">{{$room->room_title}}</h3>
                        <p style="padding: 12px">
                         {{$room->description}}
                        </p>
                        <h4 style="padding: 12px">Free WiFi: {{$room->wifi}}</h4>
                        <h4 style="padding: 12px">Room Type: {{$room->room_type}}</h4>
                        <h3 style="padding: 12px">Price: {{$room->price}}</h3>
                     </div>
                  </div>
               </div>

             <!--customer details-->


               <form action="{{url('add_booking', $room->id)}}" method="Post">
                @csrf
                @if(session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
               <div class="div_deg" style="padding-left: 300px">
               <h1>Customer Details</h1>
               
             @if($errors)

@foreach($errors->all() as $errors)

<li style="color:red;">
   {{$errors}}
</li> 
@endforeach
@endif 
        <div>
            <label>Name</label>
            <input type="text" name="name" 
            @if(Auth::id())
            value="{{Auth::user()->name}}"
            @endif
            >
        </div>
        <div>
            <label>Email</label>
            <input type="text" name="email"
            @if(Auth::id())
            value="{{Auth::user()->name}}"
            @endif
            >
        </div>
        <div>
            <label>Phone</label>
            <input type="number" name="phone"
            @if(Auth::id())
            value="{{Auth::user()->name}}"
            @endif
            >
        </div>
        <div>
            <label>Start Date</label>
            <input type="date" name="startDate" id="startDate">
        </div>
        <div>
            <label>End Date</label>
            <input type="date" name="endDate" id="endDate">
        </div>
        <div>
            <input type="submit" class="btn btn-primary" value="Book Table">
        </div>
</form>
    </div>
         </div>
      </div>
      <!-- end banner -->
      <!-- about -->

  
   
      <footer>
      @include('home.footer')
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->

      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            var dtToday = new Date();
            var month = dtToday.getMonth() + 1;
            var day = dtToday.getDate();
            var year = dtToday.getFullYear();

            if (month < 10)
                month = '0' + month.toString();

            if (day < 10)
                day = '0' + day.toString();

            var maxDate = year + '-' + month + '-' + day;
            $('#startDate').attr('min', maxDate);
            $('#endDate').attr('min', maxDate);
        });
    </script>



      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>