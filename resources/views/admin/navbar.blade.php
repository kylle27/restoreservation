<nav class="navbar navbar-expand-xl">
            <div class="container h-100">
                <a class="navbar-brand" href="index.html">
                    <h1 class="tm-site-title mb-0"> Admin</h1>
                </a>
                <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars tm-nav-icon"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto h-100">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                                <i class="fas fa-tachometer-alt"></i>
                                Dashboard
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-shopping-cart"></i>
                                <span>
                                    Tables <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{url('create_room')}}">Add Tables</a>
                                <a class="dropdown-item" href="{{url('view_room')}}">View Tables</a>
                                <a class="dropdown-item" href="#">Customize</a>
                            </div>
                        </li>
                        <!--booking -->

                        <li class="nav-item">

                        <a class="nav-link" href="{{url('bookings')}}">
                        <i class="far fa-file-alt"></i>
                        <span>
                         Bookings <i class="far "></i>
                        </span>
                        </a>

                        </li>
                        <li class="nav-item">
                     <a class="nav-link" href="{{url('view_gallery')}}">
                         <i class="fas fa-images"></i>
                             Gallery
                     </a>
                        </li>
                        <li class="nav-item">
                      <a class="nav-link" href="{{url('all_messages')}}">
                          <i class="fas fa-envelope"></i>
                          Messages
                     </a>
                        </li>


                        </ul>
                    <ul class="navbar-nav">
                        
                        <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <input class="btn btn-secondary"type="submit" value="logout">
              </form>
                    </ul>
                </div>
            </div>

        </nav>