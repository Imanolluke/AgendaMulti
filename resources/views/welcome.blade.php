<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>New Age - Start Bootstrap Theme</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('/css/styles.css')}}" rel="stylesheet" />
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{asset('/js/jquery-3.6.0.js')}}"></script>
        <script src="{{asset('/js/scripts.js')}}"></script>
        <script src="{{asset('/js/js.js')}}"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </head>
<body id="page-top">
      <!-- Navigation-->
      <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top"><img src="{{asset('/img/logo.png')}}" alt="..." /></a>
            <a id="agenda" href="">Agenda.eus</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#services">{{trans('messages.concert')}}</a></li>
                    <li class="nav-item"><a class="nav-link" href="#portfolio">{{trans('messages.theater')}}</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">{{trans('messages.dance')}}</a></li>
                    <li class="nav-item"><a class="nav-link" href="#team">{{trans('messages.all')}}</a></li>
                </ul>
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><button class="btn btn-success-warning bg-warning" href="#services">{{trans('messages.login')}}</button></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('eu') }}">EU</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('en') }}">EN</a></li>
                </ul>
            </div>
        </div>
    </nav>

            <!-- Masthead-->
            <header class="masthead">
                <div class="container">
                    <div class="masthead-subheading">{{trans('messages.welcome')}}</div>
                    <div class="masthead-heading text-uppercase">{{trans('messages.welcomeText1')}}<br>{{trans('messages.welcomeText2')}}</div>
                    <a class="btn btn-primary btn-xl text-uppercase" href="#services">{{trans('messages.seeAgenda')}}</a>
                </div>
            </header>

              <!-- Quote/testimonial aside-->
        <aside class="text-center bg-gradient-primary-to-secondary">
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-xl-8">
                        <div class="fs-1 text-black mb-4"><h1 id="bannerTit1">Are you an artist? </h1><br><h2 id="bannerTit2">You can create your own event!</h2></div>
                        <button class="btn bat-success-warning bg-warning">Create an Event</button>
                    </div>
                </div>
            </div>
        </aside>

        <!--Main Events-->
        <h2 id="mainEvents">Current Main Events</h2>
        <div class="row d-flex flex-xl-row flex-lg-row flex-md-row flex-sm-column justify-content-around">
            <div class="col-md-6 col-xl-3 mb-5 d-flex justify-content-center">
                <div class="card " style="width: 18rem;">
                    <img src="assets/img/Ura.PNG" class="card-img-top" id="cardImg">
                    <div class="card-body">
                      <h5 class="card-title text-center">Ura bere bidean</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a class="btn btn-dark">More info</a>
                    </div>
                  </div>
            </div>
            <div class="col-md-6 col-xl-3 mb-5 d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img src="assets/img/titiri.png" class="card-img-top" id="cardImg">
                    <div class="card-body">
                      <h5 class="card-title text-center">Titirijai</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a class="btn btn-dark">More info</a>
                    </div>
                  </div>
            </div>
            <div class="col-md-6 col-xl-3 mb-5 d-flex justify-content-center">
                <div class="card" style="width: 18rem; ">
                    <img src="assets/img/HTX.png" class="card-img-top" id="cardImg">
                    <div class="card-body">
                      <h5 class="card-title text-center">HTXRock</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a class="btn btn-dark">More info</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3 mb-5 d-flex justify-content-center">
              <div class="card" style="width: 18rem; ">
                  <img src="assets/img/liher.jfif" class="card-img-top" id="cardImg">
                  <div class="card-body">
                    <h5 class="card-title text-center">FestiRock</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a class="btn btn-dark">More info</a>
                  </div>
              </div>
          </div>
        </div>

        <!--AGENDA FILTER-->
<nav class="navbar sticky-top navbar-light">
    <div id="filtro">
      
  
      
                <h6>Advanced Search</h6>
               
              <table>
                <tr>
              <td>
                <label for="type">Event type</label>
              </td>
              <td>
                <select name="" id="">
                  <option value="">Concert</option>
                  <option value="">Theater</option>
                  <option value="">Dance Session</option>
                  <option value="">All</option>
                </select>
              </td>
              <td>
                <label for="provincias">Province:</label>
              </td>
              <td>
                <select name="provincias" id="provincias">
                  <option class="provincias" value="1">Araba</option>
                  <option  class="provincias" value="48">Bizkaia</option>
                  <option  class="provincias" value="20">Gipuzkoa</option>
                  <option  class="provincias" value="31">Nafarroa</option>
                </select>  
              </td>
              <td>
                <label for="town">Municipy:</label>
            </td>
            <td>
              <select name="town" id="town">  
              </select>
            </td>
          </tr>
           <!--2.ROW-->
          <tr>
            <td>
              <form action="d-flex" id="dates">
              <label for="startDate">From date:</label>
            </td>
            <td> 
              <input type="date" id="startDate" name="startDate">
              </td>
              <td>
                <label for="finishDate">To date:</label></td>
              </td>
              <td>
                <input type="date" id="finishDate" name="finishDate"></form>
              </td>
              <td>
                <label for="search">or search here:</label></td>
               
              
              </td>
            <td>
              <input  name="search" type="search"placeholder="Search" aria-label="Search">        
            </td>
          </tr>
   
          </table>
          <button id="search" class="btn btn-outline-warning" type="submit">Apply Filter or Search</button>
        </div>
        </nav>
  

</body>
</html>