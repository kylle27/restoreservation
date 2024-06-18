<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Admin - Dashboard HTML Template</title>
    
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    
    <!-- FontAwesome -->
    <link rel="stylesheet" href="{{ asset('admin/css/fontawesome.min.css') }}">
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css') }}">
    
    <!-- Custom Template CSS -->
    <link rel="stylesheet" href="{{ asset('admin/css/templatemo-style.css') }}">
    
    <style type="text/css">
       
        h2 {
            text-align: center;
            color: #fff;
            margin-top: 30px;
            font-size: 2.5em;
        }

        .div_css {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 60px;
            padding: 20px;
           
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        form {
            width: 100%;
            max-width: 600px;
        }

        label {
            display: inline-block;
            width: 100%;
            padding: 10px 0;
            font-weight: bold;
            color: #fff;
        }

        input[type='text'],
        input[type='number'],
        input[type='file'],
        select,
        textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 1em;
        }

        input[type='file'] {
            border: none;
        }

        img {
            margin: 20px 0;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .btn-submit {
            text-align: center;
        }

        .btn-submit input {
            background-color: #28a745;
            border: none;
            color: black;
            padding: 15px 30px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 1em;
            margin: 20px 0;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-submit input:hover {
            background-color: #e6b400;
        }

        .navbar, .footer {
          
            color: #fff;
            padding: 15px 0;
            text-align: center;
        }
    </style>
</head>

<body id="reportsPage">
    <div id="home">
        @include('admin.navbar')
        <h2>Update Room Details</h2>

        <div class="div_css">
            <form action="{{ url('edit_room', $data->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div>
                    <label>Room Title</label>
                    <input type="text" name="title" value="{{ $data->room_title }}">
                </div>

                <div>
                    <label>Room Description</label>
                    <input type="text" name="description" value="{{ $data->description }}">
                </div>

                <div>
                    <label>Price</label>
                    <input type="text" name="price" value="{{ $data->price }}">
                </div>

                <div>
                    <label>Free WiFi</label>
                    <select name="wifi">
                        <option selected value="{{ $data->wifi }}">{{ $data->wifi }}</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select>
                </div>

                <div>
                    <label>Room Type</label>
                    <select name="type">
                        <option selected value="{{ $data->room_type }}">{{ $data->room_type }}</option>
                        <option value="regular">Regular Table</option>
                        <option value="family">Family Table</option>
                        <option value="barkada">Barkada Table</option>
                        <option value="officemates">Officemate Table</option>
                    </select>
                </div>

                <div>
                    <label>Current Image</label>
                    <img width="250" src="/room/{{ $data->image }}">
                </div>

                <div>
                    <label>New Image</label>
                    <input type="file" name="image">
                </div>

                <div class="btn-submit">
                    <input class="btn btn-success" type="submit" value="Update Room Details">
                </div>
            </form>
        </div>
        @include('admin.footer')
    </div>

    <!-- jQuery, Popper.js, and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
