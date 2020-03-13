<html>
    <head>
        <title>C.L.W</title>
        <meta name="keyword" content="HTML, CSS and JS">
        <meta name="description" content="Step by step guide teaches u the basic of HTML">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            * {box-sizing: border-box;}
            body {font-family: Verdana, sans-serif;}
            .mySlides {display: none;}
            img {vertical-align: middle;}
            
            /* Slideshow container */
            .slideshow-container {
              max-width: 1000px;
              position: relative;
              margin: auto;
            }
            
            /* Caption text */
            .text {
              color: #f2f2f2;
              font-size: 20px;
              padding: 8px 12px;
              position: absolute;
              bottom: 8px;
              width: 100%;
              text-align: center;
            }
            
            /* Number text (1/3 etc) */
            .numbertext {
              color: #f2f2f2;
              font-size: 12px;
              padding: 8px 12px;
              position: absolute;
              top: 0;
            }
            
            /* The dots/bullets/indicators */
            .dot {
              height: 15px;
              width: 15px;
              margin: 0 2px;
              background-color: #bbb;
              border-radius: 50%;
              display: inline-block;
              transition: background-color 0.6s ease;
            }
            
            .active  {
              background-color:aqua;
            }
            
            /* Fading animation */
            .fade {
              -webkit-animation-name: fade;
              -webkit-animation-duration: 1.5s;
              animation-name: fade;
              animation-duration: 1.5s;
            }
            
            @-webkit-keyframes fade {
              from {opacity: .4} 
              to {opacity: 1}
            }
            
            @keyframes fade {
              from {opacity: .4} 
              to {opacity: 1}
            }
            
            /* On smaller screens, decrease text size */
            @media only screen and (max-width: 300px) {
              .text {font-size: 11px}
            }
            </style>
            <style>
                .button {
                  display: inline-block;
                  border-radius: 4px;
                  background-color: #1ed4f4;
                  border: none;
                  color: #FFFFFF;
                  text-align: center;
                  font-size: 28px;
                  padding: 20px;
                  width: 200px;
                  transition: all 0.5s;
                  cursor: pointer;
                  margin: 5px;
                }
                
                .button span {
                  cursor: pointer;
                  display: inline-block;
                  position: relative;
                  transition: 0.5s;
                }
                
                .button span:after {
                  content: '\00bb';
                  position: absolute;
                  opacity: 0;
                  top: 0;
                  right: -20px;
                  transition: 0.5s;
                }
                
                .button:hover span {
                  padding-right: 25px;
                }
                
                .button:hover span:after {
                  opacity: 1;
                  right: 0;
                }
                </style>
        <style>
            body{
                margin: 0%;
                background-image: url("https://flipwallpapers.com/wallpapers/4k-black-background-hd-For-desktop-Wallpaper.jpg?fbclid=IwAR2ISoIegOJt6ihKx-SMn1qspUYZ6-cIDngICmL-dUaqD4LDkV7N7IcYFKo");       
                background-repeat:;
                background-size: 50%;   
                overflow-x: hidden;
            }   

 
 
        

.navbar {
  overflow: hidden;
  background-color: #333;
  position: sticky;
  position: -webkit-sticky;
  top: 0;
}


/* Style the navigation bar links */
.navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}


/* Right-aligned link */
.navbar a.right {
  float: right;
}

/* Change color on hover */
.navbar a:hover {
  background-color: #ddd;
  color: black;
}

/* Active/current link */
.navbar a.active {
  background-color: #666;
  color: white;
}
            .column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}
 
.active,
.demo:hover {
  opacity: 1;
}
        </style>
    </head>
    <body>
        <header>
            <img src="http://i.imgur.com/Eg7JNDZ.jpg" alt="" height="px" width="100% ">
            <div class="navbar">
                    <img src="https://www.pngkey.com/png/full/135-1358799_the-arcanum-logo-cool-logos-not-used.png" alt="" width="50px" height="50px" align="left" style="padding: 5px;" >
                    <a href="#" class="active">C.L.W </a>
                    <a href="contactUs.html" class="right">Contact Us</a>
                  </div>
        </header>
        <div class="slideshow-container">
            <div class="mySlides fade">
              <div class="numbertext"></div>
              <img src="https://gtspirit.com/wp-content/uploads/2014/11/abt-sportsline-audi-tt-2-1.jpg" style="width:100%" height="562px"> 
              <div class="text">AUDI<img src="https://cdn.freebiesupply.com/logos/large/2x/audi-3-logo-png-transparent.png" alt="" width="50px" height="50px" align="" style="padding: 5px;" ></div>
            </div>
            
            <div class="mySlides fade">
              <div class="numbertext"></div>
              <img src="https://cdn.motor1.com/images/mgl/vEJmQ/s1/bmw-i8-m-rendering.jpg" style="width:100%">
              <div class="text">BMW<img src="http://pngimg.com/uploads/bmw_logo/bmw_logo_PNG19705.png" alt="" width="35px" height="35px" align="" style="padding: px;" ></div>
            </div>
            
            <div class="mySlides fade">
              <div class="numbertext"></div>
              <img src="https://d2dgtayfmpkokn.cloudfront.net/wp-content/uploads/sites/241/2016/09/28164101/Civic-Type-R-Wallpaper-Desktop-04.jpg" style="width:100%" height="562px">
              <div class="text">HONDA<img src="https://upload.wikimedia.org/wikipedia/id/d/d5/Honda-logo.png" alt="" width="45px" height="35px" align="" style="padding: px;" ></div>
            </div>
            
            </div>
            <br>
            
            <div style="text-align:center">
              <span class="dot"></span> 
              <span class="dot"></span> 
              <span class="dot"></span> 
            </div> 
            <form action="loading.html">
            <div style="text-align: center;"><button class="button" style="align-content: center;">
                <span>Next </span></button> 
            </div>
            </form>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

        
        <div class="row">
            <div class="column">
                <a href="detail 7.html">
                  <img class="demo cursor" src="https://m.honda.com.my/graphic/models/civic/2016civic/360_exterior/civic04.png" style="width: 100%; margin-top: -10px;" height="200px" onclick="currentSlide(1)" alt="The Woods">               
                </a>   
            </div>            
         </div>
     
            <div class="column">
                 <a href="BMW 3 series.html">
                  <img class="demo cursor" src="photo/home3series.png" style="width: 240px; margin-top: 15px;margin-left:-15px;" height="190px"  onclick="currentSlide(1)"  alt="The Woods">                
                 </a>                
             </div>
             
              <div class="column">
                <a href="BMW 5 series.html">
                  <img class="demo cursor" src="photo/home5series.png" style="width: 230px; margin-top: 30px; margin-left:-15px;" height="130px" onclick="currentSlide(1)" alt="The Woods">                
                </a>   
              </div>

             <div class="column">
                <a href="audiA4.html">
                  <img class="demo cursor" src="photo/homeA4.png" style="width: 230px; margin-top: 20px; margin-right:-20px ;" height="160px" onclick="currentSlide(1)" alt="The Woods">                
                </a>           
            </div>
          
            <div class="column">
                 <a href="https://m.honda.com.my/graphic/models/civic/2016civic/360_exterior/civic04.png">
                  <img class="demo cursor" src="photo/homei8.png"style="margin-top:40px;width: 230px;" height="120px" onclick="currentSlide(1)" alt="The Woods">                
                 </a>           
            </div>
            <div class="column">
                 <a href="https://m.honda.com.my/graphic/models/civic/2016civic/360_exterior/civic04.png">
                  <img class="demo cursor" src="https://m.honda.com.my/graphic/models/civic/2016civic/360_exterior/civic04.png" style="width: 280px; margin-top: -15px; margin-left: -25px;" height="200px" onclick="currentSlide(1)" alt="The Woods">                
                 </a>              
            </div>
        </div>
          <br>
       
          
          <script>
          var slideIndex = 0;
          showSlides();
    </script>      
    
    </body>
</html>