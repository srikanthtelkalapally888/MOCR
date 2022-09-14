<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOCR</title>

  <!--favicon using favicon.com-->
<link rel="shotcut icon" href="images/favicon/favicon-16x16.png">

<!--bootstrap css tag is from getbootstrap-->
<link rel="stylesheet" href="css/bootstrap_css/bootstrap.css">

<!--Google Fonts by fonts.google.com-->
<link href="https://fonts.googleapis.com/css2?family=Caladea:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

<!--Fontawesome icons css from fontawesome.com Tag-->
<link rel="stylesheet" href="css/fontawesome/all.min.css">
<script src="js/fontawesome/all.min.js"></script>


<!--custom css tag-->
<link rel="stylesheet" href="css/style.css">

<!--jquey file tag-->
<script src="js/jquery-3.6.1.js"></script>

</head>
<body>
<!--preloader is from icons8.com-->
  <div id="preloader">
    <div id="preloader_status">&nbsp;</div>
  </div>

<header>
  <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top" style="background-color: #457B9D ;">
    <a class="navbar-brand" href="#home">MOCR</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <form class="form-inline my-2 my-lg-0 ">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
      </form>


      <ul class="navbar-nav ml-auto ">
        <li class="nav-item active">
          <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="about.php">About<span class="sr-only">(current)</span></a>
        </li>
       
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
           Tutorials
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#web_development">Web Development</a>
            <a class="dropdown-item" href="#artifial_intelligence">Artifial Intelligence</a>
            <a class="dropdown-item" href="#software_engineering">Software Engineering</a>
            <a class="dropdown-item" href="#programming_language">Programming Language</a>
            <a class="dropdown-item" href="#computer_security">Computer Security</a>
            <a class="dropdown-item" href="#computing">Computing</a>
            <a class="dropdown-item" href="#informatics">Informatics</a>
            <a class="dropdown-item" href="#data_mining">Data Mining</a>
            <a class="dropdown-item" href="#cryptography">Cryptography</a>

            
            
            
            
            <div class="dropdown-divider"></div>

            <a class="dropdown-item" href="#quizzes_section">Quizzes</a>
          </div>
        </li>
        <li class="nav-item">
          <button class="btn btn-primary" data-toggle="modal" data-target="#login" ><a href="login.php" style="color: #F1FAEE;">login</a></button>
         




















      


        </li>
      </ul>
     
    </div>
  </nav>
</header>







   <!--Home section-->
   <section id="home">
    <!--converterpointer.com video about classroom-->
    <video id="home-bg-video" poster="images/home-poster/homeposter.jpg" autoplay muted loop>
       <source src="videos/homevideo.mp4" type="video/mp4">
       <source src="videos/homevideo.ogv" type="video/ogg">
       <source src="videos/homevideo.webm" type="video/web">
    </video>
    <div id="home-overlay"></div>
<!--home content-->
  <div id="home-content">
     <div id="home-content-inner" class="text-center">
      <div id="home-heading">
        <h1 id="heading-1" style="color: #F1FAEE">My Online <span>Class Room</span></h1>
        <h2 id="heading-2"  style="color:#F1FAEE ;"><span>Quizzes</span> & more by srikanth </h2>
      </div>
      <div id="home-text">
        <p>A platform to learn about computer science by quizzes, tutorials and more. </p>
      </div>
      <div id="home-btn">
          <a class="btn btn-general btn-home" role="button" title="Start Now" href="#quizzes_section">Start Learning</a>
      </div>
     </div>
  </div>
  <!--arrow bown-->
  <a href="#about" id="arrow-down">
  <i class="fa-solid fa-angle-down"></i>
  </a>
</section>




<section class="services py-5 bg-light">
  <div class="container py-5">
    <h1 class="text-center pb-5" style="color:#E63946;" id="quizzes_section"> COURSES </h1>
      <div class="row pb-3">
        <div class="col-lg-4 mb-3">
          <div class="card text-center py-3">
            <div class="card-body">
              <div class="circle">
                <span><i class="fa-solid fa-globe"></i></span>
              </div>
              <h4 class="font-weight-bold" style="color: #1D3557 ;" id="web_development">Web Development</h4>
            <p>The work involved in developing a website for the Internet (World Wide Web) or an intranet 
              (a private network). Web development can range from developing a simple single static page of plain 
              text to complex web applications, electronic businesses, and social network services.</p>


              <div>
                <a class="btn btn-primary" role="button" title="Start Now" href="login.php" >Start Now</a>
            </div>






            </div>
          </div>
        </div>   
        <div class="col-lg-4 mb-3">
          <div class="card text-center py-3">
            <div class="card-body">
              <div class="circle">
                <span><i class="fa-solid fa-robot"></i></i></span>
              </div>
              <h4 class="font-weight-bold" style="color: #1D3557 ;" id="artifial_intelligence">Artifial Intelligence</h4>
            <p>  demonstrated by machines, as opposed to the natural 
              intelligence displayed by animals including humans. <br><br><br><br><br></p>

              <div>
                <a class="btn btn-primary" role="button" title="Start Now" href="login.php">Start Now</a>
            </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-3">
          <div class="card text-center py-3">
            <div class="card-body">
              <div class="circle">
                <span><i class="fa-solid fa-computer"></i></span>
              </div>
              <h4 class="font-weight-bold" style="color: #1D3557 ;" id="software_engineering">Software Engineering</h4>
            <p>A systematic engineering approach to software development. A software engineer is a person who applies the principles of software
               engineering to design, develop, maintain, test, and evaluate computer software. <br><br></p>

              <div>
                <a class="btn btn-primary" role="button" title="Start Now" href="login.php">Start Now</a>
            </div>
            </div>
          </div>
        </div>
      </div>



      <div class="row">
        <div class="col-lg-4 mb-3">
          <div class="card text-center py-3">
            <div class="card-body">
              <div class="circle">
                <span><i class="fa-solid fa-server"></i></span>
              </div>
              <h4 class="font-weight-bold" style="color: #1D3557 ;" id="programming_language">Programming Language</h4>
            <p>Any set of rules that converts strings, or graphical program elements in the case of visual programming languages, to various kinds of machine code output. Programming languages
               are one kind of computer language, and are used in computer programming to implement algorithms..</p>
              <div>
                <a class="btn btn-primary" role="button" title="Start Now" href="login.php">Start Now</a>
            </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-3">
          <div class="card text-center py-3">
            <div class="card-body">
              <div class="circle">
                <span><i class="fa-solid fa-shield"></i></span>
              </div>
              <h4 class="font-weight-bold" style="color: #1D3557 ;" id="computer_security">Computer Security</h4>
            <p> The protection of computer systems and information from harm, theft, and unauthorized use. Computer hardware is typically protected by the same means used to protect other valuable
               or sensitive equipment—namely, serial numbers, doors and locks, and alarms. <br><br></p>

              <div>
                <a class="btn btn-primary" role="button" title="Start Now" href="login.php">Start Now</a>
            </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-3">
          <div class="card text-center py-3">
            <div class="card-body">
              <div class="circle">
                <span><i class="fa-solid fa-gears"></i></span>
              </div>
              <h4 class="font-weight-bold" style="color: #1D3557 ;" id="computing">Computing</h4>
            <p>Any goal-oriented activity requiring, benefiting from, or creating computing machinery. It includes the study and experimentation of algorithmic processes, and development of both hardware and software.
               Computing has scientific, engineering, mathematical, technological and social aspects.</p>

              <div>
                <a class="btn btn-primary" role="button" title="Start Now" href="login.php">Start Now</a>
            </div>
            </div>
          </div>
        </div>
      </div>




     <div class="row">
      <div class="col-lg-4 mb-3">
        <div class="card text-center py-3">
          <div class="card-body">
            <div class="circle">
              <span><i class="fa-solid fa-database"></i></span>
            </div>
            <h4 class="font-weight-bold" style="color: #1D3557 ;" id="informatics">Informatics</h4>
          <p> the study of computational systems, especially those for data storage and retrieval. According to ACM Europe and Informatics Europe, 
            informatics is synonymous with computer science and computing as a profession, in which the central notion is transformation of information.</p>

            <div>
              <a class="btn btn-primary" role="button" title="Start Now" href="login.php">Start Now</a>
          </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-3">
        <div class="card text-center py-3">
          <div class="card-body">
            <div class="circle">
              <span><i class="fa-solid fa-brain"></i></span>
            </div>
            <h4 class="font-weight-bold" style="color: #1D3557 ;" id="data_mining">Data Mining</h4>
          <p>the process of extracting and discovering patterns in large data sets involving methods at the intersection
             of machine learning, statistics, and database systems. <br><br><br><br><br></p>

            <div>
              <a class="btn btn-primary" role="button" title="Start Now" href="login.php">Start Now</a>
          </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-3">
        <div class="card text-center py-3">
          <div class="card-body">
            <div class="circle">
              <span><i class="fa-solid fa-user-secret"></i></span>
            </div>
            <h4 class="font-weight-bold" style="color: #1D3557 ;" id="cryptography">Cryptography</h4>
          <p>the practice and study of techniques for secure communication in the presence of adversarial behavior. More generally,
             cryptography is about constructing and analyzing protocols that prevent third parties or the public from reading private messages. <br> <br></p>
            <div>
              <a class="btn btn-primary" role="button" title="Start Now" href="login.php">Start Now</a>
          </div>
          </div>
        </div>
      </div>
     </div>
    </div>
  </div>
</section>


<section class="text-center">
  <h2> Thanks for visiting <sub> <em> -srikanth telkalapally </em></sub></h2> 
</section>
  


 <!--bootstrap javascript tag-->  
 <script src="js/bootstrap_js/bootstrap.js"></script>


<!--custom javascript tag-->
<script src="js/script.js"></script> 

<footer class="page-footer ">
  <div style="background-color: #E63946;">
    <div class="container">
      <div class="row py-4 flex align-items-center">
        <div class="col-md-12 text-center">
          <a href="#" ><i class="fa-brands fa-facebook text-white mr-4"></i> </a>
          <a href="#" > <i class="fa-brands fa-instagram text-white mr-4"></i></a>
          <a href="#" > <i class="fa-brands fa-twitter text-white mr-4"></i></a>
          <a href="#" ><i class="fa-brands fa-telegram text-white mr-4"></i></a>
          <a href="#" > <i class="fa-brands fa-linkedin text-white mr-4"></i></a>
        </div>
      </div>
    </div>
  </div>


  <div class="container text-center text-md-left mt-5">
    <div class="row">
      <div class="col-md-3 mx-auto mb-4">
        <h6 class="text-uppercase font-weight-bold" style="color: #A8DADC;">The Theme</h6>
        <hr class="bg-success mb-4 mt-0 d-inline-block mx-auto" style="width:125px ;height: 2px">
        <p class="mt-2" style="color:white;">
          Knowledge is of no value usless you put it into practice.
          <br> <em>-Anton Chekhov</em>
        </p>
        </div>
        <div class="col-md-2 mx-auto mb-4">
          <h6 class="text-uppercase font-weight-bold" style="color: #A8DADC;">Courses</h6>
          <hr class="bg-success mb-4 mt-0 d-inline-block mx-auto" style="width:200px ;height: 2px">
          <ul class="list-unstyled">
            <li class="my-2" ><a href="#web_development" style="color:#F1FAEE;">Web Development</a></li>
            <li class="my-2" ><a href="#artifial_intelligence" style="color:#F1FAEE;">Artifial Intelligence</a></li>
            <li class="my-2" ><a href="#software_engineering" style="color:#F1FAEE;">Software Engineering</a></li>
            <li class="my-2" ><a href="#programming_language" style="color:#F1FAEE;">Programming Language</a></li>

          </ul>
        </div>
        
        <div class="col-md-2 mx-auto mb-4">
          <h6 class="text-uppercase font-weight-bold" style="color:#1D3557;">`</h6>
          <hr class="unwanted_horizontal_footer mb-4 mt-0 d-inline-block mx-auto" style="width:0px ;height: 0px">
          
          <ul class="list-unstyled mt-50" >
            <li class="my-2" ><a href="#computer_security" style="color:#F1FAEE;">Computer Security</a></li>
            <li class="my-2" ><a href="#computing" style="color:#F1FAEE;">Computing</a></li>
            <li class="my-2" ><a href="#informatics" style="color:#F1FAEE;">Informatics</a></li>
            <li class="my-2" ><a href="#data_mining" style="color:#F1FAEE;">Data Mining</a></li>
            <li class="my-2" ><a href="#cryptography" style="color:#F1FAEE;">Cryptography</a></li>
           </ul>


        </div>
        <div class="col-md-2 mx-auto mb-4">
          <h6 class="text-uppercase font-weight-bold" style="color:#A8DADC ;">Site Links</h6>
          <hr class="bg-success mb-4 mt-0 d-inline-block mx-auto" style="width:85px ;height: 2px">
          <ul class="list-unstyled">
            <li class="my-2"><a href="#home" style="color:#F1FAEE;">Home</a></li>
            <li class="my-2"><a href="#quizzes_section" style="color:#F1FAEE;">Tutorials</a></li>
            <li class="my-2"><a href="about.php" style="color:#F1FAEE;">About Me</a></li>
            <li class="my-2"><a href="login.php" style="color:#F1FAEE;">Login</a></li>
           </ul>

        </div>
      </div>
    </div>

    <div class="footer-copyright text-center py-3">
      <p> &copy;Copyright 2022</p>
    </div>
</footer>

</body>
</html>