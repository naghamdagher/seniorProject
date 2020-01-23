<?php 
session_start();
include 'includes/dbConnection.php';
?>



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
  
        <a class="navbar-brand js-scroll-trigger" href="#top">U-light </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" 
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#projects">Projects</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contactus">Contact us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="Login.php">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  
    <!--I have 4 sections: #home, #projects, #services, #contactus, The login is made only for staff  -->
    <!--There is a social media tab between projects and services-->
    <!--All text should be written in a paragraph to make the search function easy-->

 
    <header class="bg-dark text-white" >
      <div  class="container text-center" >
        <h1>Welcome to U-light</h1>
        <p class="lead">Brighten up your lifestyle</p>
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
            <p style="font-size:64px; color: orange; font-weight: bold;">What we do</p>
            <p class="lead">Leading our entrepreneurs to start their own businesses, we help them and guide them 
              to engage in particular work criteria to meet the requirements of their certificate. U-light SAL is 
              a consortium of three companies whose core business lies in management of public utilities, 
              serving the Middle East and Arab countries (GULF) region. U-light is the electric Distribution Service Provider 
              (DSP) for Beirut Municipality, Mount Lebanon area, Batroun, Jbeil, Tripoli, Jezzine, and Bekaa service areas. 
              The main goals of U-light is to:
              <ul>
                <li>Provide Customer Service to EDL customers</li>
                <li>Rehabilitate the Electric Network in Lebanon</li>
                <li>Install Electric Meters and advanced infrastructure</li>
                <li>Increase the Capacity of the Network</li>
                <li>Perform Maintenance and Operations on Behalf of EDL</li>
                <li>Manage subscriptions, maintenance, emergency response</li>
                <li>Construction of new distribution facilities</li>
                <li>Planning, Programs and design</li>
                <li>Network Survey </li>
                <li>Meter Reading & Bill Collection </li>
              </ul>
           </p>
          </div>
        </div>
      </div>
    </section>



    <!-- Image Showcases -->
  <section class="showcase">
    <div class="container-fluid p-3">
      <div class="row no-gutters">

        <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('Images/workers.jpg');"></div>
        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
          <h2>Our team ready at your service</h2>
          <p class="lead mb-0">
            U-light Utility Services is a subsidiary of Dagher Co, created to design, 
            implement, operate and maintain the electrical distribution network along with customer and 
            metering services on behalf of Electricité du Liban. Its operations cover around 40% of the 
            Lebanese territory going from northern part of Greater Beirut till northern borders. 
            With over 800 employees, including 35 engineers, 200 technicians of all levels, 300 meter 
            readers and bill collectors and 40 customer services specialists, U-light fulfills its activities 
            based on defined Key Performance Indicators (KPI) related to the quality and efficiency of its 
            various services.
          </p>
        </div>
      </div>
      <br><br><br>
      <div class="row no-gutters">
        <div class="col-lg-6 text-white showcase-img" style="background-image: url('Images/locations.jpg');"></div>
        <div class="col-lg-6 my-auto showcase-text">
          <h2>Geographical distribution</h2>
          <p class="lead mb-0">
            Newly improved, and full of great utility classes, U-light is leading 
            the way in electrical service! U-light is present on all the area it covers through its: 
            Head-office in Bteghrine region for management, administration and planning. 
            14 contact centers located in Antelias, Jounieh, Bikfaya, Baabdat, Amchit, Batroun, 
            Achkout, Qartaba, Amioun, Zgharta, Tripoli, Donniyeh, Halba, Qobayat, Jezzine and Chouf. 
            Selaata facility consisted of the 24/7 call center, the smart meters’ laboratory, 
            the warehouse and the training center (including the pedagogic network) necessary 
            for the employees’ continuous professional development.</p>
        </div>
      </div>
      <br><br><br>
      <div class="row no-gutters">
        <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('Images/manOnPole1.jpg');"></div>
        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
          <h2>Operations &amp; Maintenance</h2>
          <p class="lead mb-0">
            <ul>
              <li>
              Repairing and maintaining the MV and LV distribution network that suffers from faults due 
              to old or inappropriate equipment, weather, or human intervention.
              </li>
              <li>
              Enhancing the electrical network’s used equipment to reduce technical losses and to ensure 
              sustainability and high level of security (Preventive Maintenance).
              </li>
              <li>
              Ensuring that the interruption of electricity supply to the customer is as brief as possible 
              (excluding planned interruptions due to insufficient electricity generation which is beyond 
              U-light’s responsibility).
              </li>
              <li>
                Improving response time to customer-related operational and emergency requests.
              </li>
              <li>
                Ensuring the safety of electricians and repairmen via personal safety suits, protection equipment, 
                and U-light certified tools.
              </li>
              <li>
                Training continuously the staff about electricity operations and safety instructions.
              </li>
            </ul>
          </p>
        </div>
      </div>
    </div>
  </section>


    <!--Division projects: current and future projects-->
    <div id="projects" class="container" style="display: block;" >
      <h1>Our projects</h1>
      <div class="col-md-6 col-xl-6" style="display: inline;">
        <p>
          <span class="work">Success Stories</span>
          <ul>
            <li>
            68 teams of technicians spread out through our geographical lot for network operation and maintenance.
            </li>
            <li>
              More than 2500 repair works executed per month. 
              Approximately 97% of the faults repaired in the same day.
            </li>
            <li>
              More than 6 567 construction work orders executed to extend the grid and connect customers.
            </li>
            <li>
            13 450 Km of surveyed Network.
            6 380 surveyed MV/LV Sub-Stations.
            45 000 surveyed Poles.
            </li>
            <li>
              More than $276M transferred already to EDL from Collection activity.
            </li>
            <li>
              12 teams working daily on the detection and addressing of energy illegal consumption.
            </li>
            <li>
            More than 3 576 fines issued to customers for detected cases of illegal electrical connections and meter tampering.
            </li>
            <li>
              All teams working on the ground already received extensive safety and technical training.
            </li>
            <li>
            Complete fleet of more than 100 vehicles acquired to facilitate U-light's services including bucket trucks and underground fault detector.
            </li>
            <li>
              Selaata Facility including smart meters laboratory, warehouse and call center.
            </li>
          </ul>
        </p>
      </div>

      <div class="col-md-6 col-xl-6" style="display: inline;" >
        <p>
          <span class="work">Future projects</span>
          At the moment U-light is performing:
          <ul>
            <li>
              Meter reading & bill collection: 13 divisions are under Monthly Cycle Collection.
            </li>
            <li>
              Planning and Design of new networks and new customer connections.
            </li>
            <li>
              Construction of new networks and new customer connections.
            </li>
            <li>
            Operation and Maintenance (preventive and repairs).
            </li>
            <li>
            Operation of customer care contact centers in EDL offices.
            </li>
            <li>
            Operation of our own call center in Selaata which is currently running 24/7.
            </li>
            <li>
            Smart Metering Pilot Project Final Phase: Testing.
            </li>
            <li>
            Roll-out of more than 200 Medium Voltage smart meters at outgoing medium voltage feeders from primary sub-stations.
            </li>
            <li>
            Network tampering and violations discovery through dedicated Non-Technical losses specialized teams.
            </li>
          </ul>
        </p>
      </div>
    </div>

    <!--Division services-->
    <div id="services" class="container">
      <h1>Our services</h1>
     <div>
       <p>Key Figures:
         <ul>
           <li>
             3000 Km2  of covered Territory
           </li>
           <li>
             520.000 Customers
           </li>
           <li>
             2.000.000 Inhabitants
           </li>
           <li>
             20.000 Km of Operated Network
           </li>
           <li>
             6380 MV/LV Substations
           </li>
           <li>
             850 Employees
           </li>
           <li>
             16 Service Locations
           </li>
           <li>
             130 Vehicles (including 5 bucket trucks and an underground fault detector)
           </li>
           <li>
             55 M $US Network Investments expected until mid-2016
           </li>
         </ul>
    </p>
     </div> 
     <div style="background-image: url('Images/service.jpg');">

     </div>

     <div>
       <p>Electricité Du Liban currently reports $300 million in annual losses, a significant 
         part of which is attributable to electricity theft. This figure amounts to about 25% of 
         Non-Technical Losses, while a 15% technical loss of electricity is reported due to the use 
         of old and inadequate cables and components. Meter reading is also in need of improvements 
         in this sector as the different types of meters which are given to various buildings are 
         often subject to personal human intervention that derails the collective, general interest. 
         It is in recognition of these problems that EDL has initiated the DSP project that aims to 
         consolidate a number of tasks in a new contractual framework that ensures proper investment 
         planning, effective execution of network extension, network operation and maintenance, metering 
         and billing activities with full correlation of energy distributed, billed, and collected to 
         minimize and eliminate losses. 
         U-light was accordingly commissioned to maintain and operate the electricity distribution grid in 
         Northern Mount Lebanon and North Lebanon.
         U-light is responsible for providing a distribution service to customers that is as smooth and 
         undisrupted as possible but is in no way responsible for Lebanon’s insufficient electricity 
         production that results in the need to cut power in certain areas in accordance with the EDL plan.
        </p>
     </div>
    </div>

       <!-- Testimonials -->
  <section class="testimonials text-center bg-light">
    <div class="container">
      <h2 class="mb-5">What people are saying...</h2>
      <div class="row">
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="Images/testimonial2.jpg" alt="">
            <h5>Kamal H.</h5>
            <p class="font-weight-light mb-0">"U-light is an amazing company finishing the project before
              its deadline and meeting the EDL requirements."</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="Images/testimonial5.jpg" alt="">
            <h5>Jessica S.</h5>
            <p class="font-weight-light mb-0">"U-light is a whole other level of professionalism. 
              I've been working with the team to create lots of super nice landing projects."</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="Images/testimonial3.jpg" alt="">
            <h5>Roy T.</h5>
            <p class="font-weight-light mb-0">"Thank you so much for providing electricity power and making 
              resources available to us!"</p>
          </div>
        </div>
      </div>
    </div>
  </section>
    
    <!--Division contact us and map in section-->
    <div id="contactus" class="container" style="display: block; ">
      <h1>Contact us</h1>
   
<!--Section: Contact v.1-->
<section class="section pb-5">
  <div class="row">

    <!--Grid column-->
    <div class="col-lg-5 mb-4">

      <!--Form with header-->
      <div class="card">

        <div class="card-body">
          <!--Header-->
          <div class="form-header blue accent-1">
            <h3><i class="fas fa-envelope"></i> Write to us:</h3>
          </div>

          <p>We would like to hear from you</p>
          <br>

          <!--Body-->
          <div class="md-form">
            <i class="fas fa-user prefix grey-text"></i>
            <input type="text" id="form-name" class="form-control">
            <label for="form-name">Your name</label>
          </div>

          <div class="md-form">
            <i class="fas fa-envelope prefix grey-text"></i>
            <input type="text" id="form-email" class="form-control">
            <label for="form-email">Your email</label>
          </div>

          <div class="md-form">
            <i class="fas fa-tag prefix grey-text"></i>
            <input type="text" id="form-Subject" class="form-control">
            <label for="form-Subject">Subject</label>
          </div>

          <div class="md-form">
            <i class="fas fa-pencil-alt prefix grey-text"></i>
            <textarea id="form-text" class="form-control md-textarea" rows="3"></textarea>
            
          </div>

          <div class="text-center mt-4">
            <button class="btn bg-primary">Submit</button>
          </div>

        </div>

      </div>
      <!--Form with header-->

    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-7">


<!--Google map-->
<div id="map-container-google-11" class="z-depth-1-half map-container-6" style="height: 400px">


    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3309.2124699590236!2d35.6321809146968!3d33.96137802996155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151f3f5ef6f27db9%3A0x4bd494a136d360fd!2sLebanese%20Canadian%20University%20-%20LCU!5e0!3m2!1sen!2slb!4v1579814563043!5m2!1sen!2slb" 
      width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
</div>


      <br>
      <!--Buttons-->
      <div class="row text-center">
        <div class="col-md-4">
          <a class="btn-floating blue accent-1"><i class="fas fa-map-marker-alt"></i></a>
          <p><a href="http://"><img src="Images/twitter.png" alt="twitter" height="50px" width="50px"></a>
          <a href="http://"><img src="Images/linkedin.jpg" alt="linkedin" height="50px" width="50px"></a></p>
        </div>

        <div class="col-md-4">
          <a class="btn-floating blue accent-1"><i class="fas fa-phone"></i></a>
          <p>+ 01 234 567 89</p>
          <p>Mon - Fri, 8:00-22:00</p>
        </div>

        <div class="col-md-4">
          <a class="btn-floating blue accent-1"><i class="fas fa-envelope"></i></a>
          <p>info@gmail.com</p>
          <p>sale@gmail.com</p>
        </div>
      </div>

    </div>
    <!--Grid column-->

  </div>

</section>
<!--Section: Contact v.1-->




 </div>

  <!--Division footer -->
    <div class="footer">
    
      <div class="footer-copyright text-center py-3">
       <a href="Ulight.php" style="color: black;"> U-light</a> © 2020 
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