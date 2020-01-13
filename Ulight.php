<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>U-light management system</title>
    <link rel="stylesheet" href="scriptfiles/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

</head>
<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <div class="container">
  
        <a class="navbar-brand js-scroll-trigger" href="#page-top">U-light </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">Projects</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="Login.html">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  
    <!--I have 4 sections: #home, #projects, #services, #contactus, The login is made only for staff  -->
    <!--There is a social media tab between projects and services-->
    <!--All text should be written in a paragraph to make the search function easy-->

 
    <header class="bg-dark text-white">
      <div class="container text-center">
        <h1>Welcome to U-light</h1>
        <p class="lead">Welcome to U-light</p>
      </div>
    </header>

       <!--Division home: about us section-->
   <!-- <div id="home" class="container">
      <p style="font-size:64px; color: orange; font-weight: bold;">U-light</p>
     <p></p>
    </div>
-->
    <section id="home">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <p style="font-size:64px; color: orange; font-weight: bold;">About this page</p>
            <p class="lead">This is a great place to talk about your webpage. This template is purposefully unstyled so you can use it as a boilerplate or starting point for you own landing page designs! This template features:</p>
            <ul>
              <li>Clickable nav links that smooth scroll to page sections</li>
              <li>Responsive behavior when clicking nav links perfect for a one page website</li>
              <li>Bootstrap's scrollspy feature which highlights which section of the page you're on in the navbar</li>
              <li>Minimal custom CSS so you are free to explore your own unique design options</li>
            </ul>
          </div>
        </div>
      </div>
    </section>



    <!-- Image Showcases -->
  <section class="showcase">
    <div class="container-fluid p-0">
      <div class="row no-gutters">

        <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/bg-showcase-1.jpg');"></div>
        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
          <h2>Fully Responsive Design</h2>
          <p class="lead mb-0">When you use a theme created by Start Bootstrap, you know that the theme will look great on any device, whether it's a phone, tablet, or desktop the page will behave responsively!</p>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6 text-white showcase-img" style="background-image: url('img/bg-showcase-2.jpg');"></div>
        <div class="col-lg-6 my-auto showcase-text">
          <h2>Updated For Bootstrap 4</h2>
          <p class="lead mb-0">Newly improved, and full of great utility classes, Bootstrap 4 is leading the way in mobile responsive web development! All of the themes on Start Bootstrap are now using Bootstrap 4!</p>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/bg-showcase-3.jpg');"></div>
        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
          <h2>Easy to Use &amp; Customize</h2>
          <p class="lead mb-0">Landing Page is just HTML and CSS with a splash of SCSS for users who demand some deeper customization options. Out of the box, just add your content and images, and your new landing page will be ready to go!</p>
        </div>
      </div>
    </div>
  </section>

     <!-- Testimonials -->
  <section class="testimonials text-center bg-light">
    <div class="container">
      <h2 class="mb-5">What people are saying...</h2>
      <div class="row">
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="img/testimonials-1.jpg" alt="">
            <h5>Margaret E.</h5>
            <p class="font-weight-light mb-0">"This is fantastic! Thanks so much guys!"</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="img/testimonials-2.jpg" alt="">
            <h5>Fred S.</h5>
            <p class="font-weight-light mb-0">"Bootstrap is amazing. I've been using it to create lots of super nice landing pages."</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="img/testimonials-3.jpg" alt="">
            <h5>Sarah W.</h5>
            <p class="font-weight-light mb-0">"Thanks so much for making these free resources available to us!"</p>
          </div>
        </div>
      </div>
    </div>
  </section>


    <!--Division projects: current and future projects-->
    <div id="projects" class="container" style="display: block; " >
      <h1>Our projects</h1>
      <div class="col-md-4 col-xl-6">
        <p>
          <span>Project1</span>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit nam nostrum ipsam nemo iure reprehenderit provident ducimus exercitationem. Quos eveniet saepe sequi fugiat voluptatum reprehenderit, ad odio quisquam voluptatem libero.
        </p>
      </div>

      <div class="col-md-4 col-xl-6" >
        <p>
          Project 2
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, nostrum minus nemo ullam aperiam dolorum reiciendis distinctio veniam, maiores exercitationem error adipisci quae sapiente enim, neque itaque. Veniam, velit consectetur!

        </p>
      </div>
    </div>

    <!--Division services-->
    <div id="services" class="container">
      <h1>Our services</h1>
    </div>
    
    <!--Division contact us-->
    <div id="contactus" class="container">
      <h1>Contact us</h1>

    </div>

    <div class="footer">
    
      <div class="footer-copyright text-center py-3">
        <a href="Ulight.html" style="color: black;"> U-light</a> © 2020 
      </div>
     
    </div>
    
    <script>
    "use strict";
    
    let searchInput=document.getElementById("searchInput");
    let searchingValue=document.getElementsByTagName("p");
    
    
    
    

    searchInput.addEventListener("keyup", function(){
       let searchVal=searchInput.value.trim();
      for( let i=0; i<searchingValue.length;i++){
         
           if(searchingValue[i].innerText.toLowerCase().indexOf(searchVal.toLowerCase())==-1)
           {
               searchingValue[i].style.display="none";
           } else {
                searchingValue[i].style.display="block";
                
               }
       }
    });
    </script>
    <script src="scriptfiles/bootstrap.min.js"></script>
    <script src="scriptfiles/jquery-3.3.1.min.js"></script>
    <script src="scriptfiles/script.js"></script>
</body>



</html>