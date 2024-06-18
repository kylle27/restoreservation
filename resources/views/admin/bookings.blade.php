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
        margin-right:40px;
        margin-left:40px;

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
      
    </style>
</head>
<!--HEADER!-->
<body id="reportsPage">
    <div class="" id="home">
    @include('admin.navbar')
                <!--body!-->
                
            <div class="div_css">
            @if(session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
                <table class="table_css">
                <tr>
                    <th>Table ID</th>
                    <th>Table Title</th>
                    <th>Table Price</th>
                    <th>Table Image</th>
                    <th>Customer Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Status</th>   
                    <th>Delete</th>
                    <th>Status to Update</th>
                 
                   

                </tr>
                
        
@foreach($data as $data)
            <tr>
                    <td>{{$data->room_id}}</td>
                    <td>{{$data->room->room_title}}</td>
                    <td>{{$data->room->price}}</td>

                    <td>
                        <img style="width:200px" src="/room/{{$data->room->image}}">

                    <td>{{$data->name}}</td>
                    <td>{{$data->email}}</td>
                    <td>{{$data->phone}}</td>
                    <td>{{$data->start_date}}</td>
                    <td>{{$data->end_date}}</td>
                    <td>
                        
                    @if($data->status == 'approved')

                    <span style="color: skyblue;">Approved</span>
                <!--REJECTED-->
                    @endif
                      @if($data->status == 'rejected')

                    <span style="color: red;">Rejected</span>

                    @endif

                      @if($data->status == 'waiting')

                    <span style="color: yellow;">Waiting</span>

                    @endif
             
                    </td>
             
                    <td>
                        <a onClick="return confirm('Are you sure you want to delete?');" class="btn btn-outline-danger mx-3 mt-2 d-block shadow-none"  href="{{url('delete_booking',$data->id)}}"> Delete</a>
                     </td>

                     <td>
                   
                        <a   class="btn btn-outline-primary mx-2 mt-1 d-block shadow-none" style="color:white;" href="{{url('approve_booking',$data->id)}}">Approved</a>
   
                        <a  class="btn btn-outline-warning mx-2 mt-1 d-block shadow-none"  href="{{url('reject_booking',$data->id)}}">Rejected</a>
                        
    </td>

            </tr>
    
           @endforeach
            </table>
    </div>
                <!--footer!-->
        @include('admin.footer')
</body>

</html>