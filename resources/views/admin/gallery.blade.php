<!DOCTYPE html>
<html lang="en">

<head>
  @include('admin.css')
  <style type="text/css">
       
       h1 {
           text-align: center;
           color: #fff;
           margin-top: 30px;
           font-size: 2.5em;
       }

       .form-dv {
           max-width: 600px;
           margin: 0 auto;
           padding: 20px;
       }

       label {
           display: block;
           font-size: 14px;
           font-weight: bold;
           margin-bottom: 5px;
           color: #ddd;
       }

       input[type="file"],
       .sub {
           display: block;
           width: 100%;
           padding: 10px;
           margin-bottom: 15px;
           border: 1px solid #555;
           border-radius: 4px;
           background-color: #333;
           color: #ddd;
       }

       .sub {
           background-color: #5cb85c;
           border-color: #4cae4c;
           color: #fff;
           cursor: pointer;
       }

       .sub:hover {
           background-color: #4cae4c;
       }

       .gallery-item {
           position: relative;
           display: inline-block;
           margin: 10px;
       }

       .gallery-item img {
           height: 200px;
           width: 300px;
           display: block;
       }

       .gallery-item .btn {
           position: absolute;
           bottom: 10px;
           left: 50%;
           transform: translateX(-50%);
           background-color: #d9534f;
           border-color: #d43f3a;
           color: white;
           padding: 5px 10px;
           border-radius: 3px;
           text-decoration: none;
           text-align: center;
       }

       .gallery-item .btn:hover {
           background-color: #c9302c;
           border-color: #ac2925;
       }
  </style>
</head>

<body id="reportsPage">
    <div class="" id="home">
        @include('admin.navbar')

        <!--body!-->
        <div class="container">
            <h1>Gallery</h1>

            @foreach($gallery as $gallery)
                <div class="gallery-item">
                    <img src="/gallery/{{$gallery->image}}" alt="Gallery Image">
                    <a class="btn btn-danger" href="{{url('delete_gallery', $gallery->id)}}">Delete Image</a>
                </div>
            @endforeach

            <form class="form-dv" action="{{ url('upload_gallery') }}" method="post" enctype="multipart/form-data">
                @csrf
                <label>Upload Image</label>
                <input type="file" name="image">
                <div>
                    <input class="sub" type="submit" name="submit">
                </div>
            </form>
        </div>

        <!--footer!-->
        @include('admin.footer')
    </div>
</body>

</html>
