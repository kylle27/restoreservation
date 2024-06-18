 <!-- header inner -->
 <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                           <a href="{{url('/')}}" ><img src="images/logo.png" alt="#" /></a>

                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item active">
                                 <a class="nav-link" href="{{url('/')}}">Home</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{url('/')}}">About</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{url('/')}}">Our Tables</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{url('/')}}">Gallery</a>
                              </li>
                            
                              <li class="nav-item">
                                 <a class="nav-link" href="{{url('/')}}">Contact Us</a>
                              </li>


                         
                          
                                    <!-- conditional -->
                                    @if (Route::has('login'))
               
                                @auth
                               
                  <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <input class="btn btn-primary animated" style="background-color: red; border-color: red;"type="submit" value="logout">
                        </form>
                                
                                @else
                                <li class="nav-item">
                                    <a
                                        href="{{ route('login') }}"
                                       class="nav-link"
                                    >
                                        LogIn
                                    </a>
                                        </li>

                                    @if (Route::has('register'))
                                    <li class="nav-item">
                                    <a
                                        href="{{ route('register') }}"
                                       class="nav-link"
                                    >
                                        Register
                                    </a>
                                        </li>
                                    @endif
                                @endauth

                        @endif

                               
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>