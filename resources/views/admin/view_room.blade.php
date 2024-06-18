<!DOCTYPE html>
<html lang="en">

<head>
  @include('admin.css')
  <style type="text/css">
    .div_css{
        display:flex;
        justify-content: center;
        align-items: center;
        margin-top:60px;
    }
    .table_css{
        border: 2px solid grey;
    }
    th{
        background-color:darkgrey;
        color:black;
        font-size: 19px;
        font-weight:bold;
        padding: 15px;

        }
        td{
            border:1px solid skyblue;
            text-align:center;
            color:black;

        }
        input[type="search"]{
          width:400px;
          height:43px;
          margin-top: 90px;
          text-align: center;
          margin-left: 170px;
        }
        h2 {
            text-align: center;
            color: #fff;
            margin-top: 30px;
            font-size: 2.5em;
        }
    </style>
</head>
<!--HEADER!-->
<body id="reportsPage">
    <div class="" id="home">
    @include('admin.navbar')
                <!--body!-->
                <form action="{{url('room_search')}}" method="get">
                <h2>View Table Details</h2>
            <input type="search" name="search">
            <input type="submit" class="btn btn-primary " value="Search">
          </form>

            <div class="div_css">
             
            <table class="table_css">
                <tr>
                    <th>Room Title</th>
                    <th>Room Description</th>
                    <th>Room Price</th>             
                    <th>Room WiFi</th>
                    <th>Room Type</th>
                    <th>Room Image</th>
                    <th>Edit</th>
                    <th>Delete</th>
                   

                </tr>
                
         
            @foreach($room as $rooms)

            <tr>
                    <td>{{$rooms->room_title}}</td>
                    <td>{{!!Str::limit($rooms->description,50)!!}}</td>
                    <td>{{$rooms->price}}</td>
                    <td>{{$rooms->wifi}}</td>
                    <td>{{$rooms->room_type}}</td>
              
                   
                    
                    <td>
                        <img  height="120" width="120"src="room/{{$rooms->image}}">
                    </td>
                       
                    <td>
                        <a class="btn btn-outline-success mx-3 mt-2 d-block shadow-none" href="{{url('update_room',$rooms->id)}}"> 
                          Edit</a>
                     </td>

                    <td>
                        <a onClick="return confirm('Are you sure you want to delete?');" class="btn btn-outline-danger mx-3 mt-2 d-block shadow-none" onClick="confirmation(event)" href="{{url('delete_room',$rooms->id)}}"> Delete</a>
                     </td>


            </tr>
            @endforeach
           
            </table>

         

        </div>
                <!--footer!-->
        @include('admin.footer')
    </div>
</body>

</html>