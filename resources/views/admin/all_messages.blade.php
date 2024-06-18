<!DOCTYPE html>
<html lang="en">

<head>
  @include('admin.css')
  <style type="text/css">
    .div_css {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 60px;
    }

    .table_css {
        border: 2px solid grey;
        border-collapse: collapse;
        width: 80%;
    }

    th {
        background-color: darkgrey;
        color: black;
        font-size: 19px;
        font-weight: bold;
        padding: 15px;
        text-align: center;
    }

    td {
        border: 1px solid skyblue;
        text-align: center;
        color: black;
        padding: 10px;
        font-size: 16px;
        background-color: #f9f9f9;
    }

    tr:nth-child(even) td {
        background-color: #f1f1f1;
    }

    input[type="search"] {
        width: 400px;
        height: 43px;
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
        <h2>All Messages</h2>

        <div class="div_css">
            <table class="table_css">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Message</th>
                </tr>

                @foreach($data as $data)
                <tr>
                    <td>{{$data->name}}</td>
                    <td>{{$data->email}}</td>
                    <td>{{$data->phone}}</td>
                    <td>{{$data->message}}</td>
                </tr>
                @endforeach
            </table>
        </div>
        <!--footer!-->
        @include('admin.footer')
    </div>
</body>

</html>
