<!DOCTYPE html>
<html lang="en">

<head>
  @include('admin.css')
  <style>
    /* Style the form container */
    form {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
       
        border-radius: 5px;
      
    }

    /* Style the form elements */
    form div {
        margin-bottom: 15px;
    }

    label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }

    input[type="text"],
    input[type="number"],
    input[type="file"],
    select,
    textarea {
        width: 100%;
        padding: 10px;
        box-sizing: border-box;
        border: 2px solid #007bff;
        border-radius: 4px;
        transition: border-color 0.3s;
    }

    input[type="text"]:focus,
    input[type="number"]:focus,
    input[type="file"]:focus,
    select:focus,
    textarea:focus {
        border-color: #28a745;
        outline: none;
    }

    textarea {
        height: 100px;
        resize: vertical;
    }

    input[type="submit"] {
        display: inline-block;
        padding: 10px 20px;
        background-color: #007bff;
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

<body id="reportsPage">
    <div class="" id="home">
    @include('admin.navbar')
        <!-- Body -->
        <div></div>
        <form action="{{url('add_room')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <label>Table Name</label>
                <input type="text" name="title">
            </div>
            <div>
                <label>Description</label>
                <textarea name="description"></textarea>
            </div>
            <div>
                <label>Price</label>
                <input type="number" name="price">
            </div>
            <div>
                <label>Table Type</label>
                <select name="type">
                    <option value="regular">Regular Table</option>
                    <option value="family">Family Table</option>
                    <option value="barkada">Barkada Table</option>
                    <option value="officemates">Officemate Table</option>
                </select>
            </div>
            <div>
                <label>Free WiFi</label>
                <select name="wifi">
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
            </div>
            <div>
                <label>Upload Image</label>
                <input type="file" name="image">
            </div>
            <div>
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
    <!-- Footer -->
    @include('admin.footer')
</body>

</html>
