<html>
    <title>Loading Page</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
     <style>
         body{
             background-image:url("https://images2.alphacoders.com/910/910451.png   ");
             background-size: 100%;
         }
     
     </style>
   
    <body onload="move()">
        <div class="w3-container w3-center w3-animate-zoom">
            <div style="font-size: 30px;color: aqua;">
            <H1>C. L. W Pte Ltd</H1>
            <img src="https://www.pngkey.com/png/full/135-1358799_the-arcanum-logo-cool-logos-not-used.png" width="300" height="320" alt="">
            </div> 
        </div>
        <div style="margin-top: 30px;">
            <div id="myBar" class="w3-aqua w3-center w3-padding-large" style="width: 20%">0%</div>
        </div>
        <script>
            function move() {
                var elem = document.getElementById("myBar");               
                var width = 10;               
                var id = setInterval(frame, 20);               
                function frame() {               
                if (width >= 100) {               
                clearInterval(id); 
                window.location.href="jie";              
                } else {              
                width++;              
                elem.style.width = width + '%';           
                elem.innerHTML = width * 1 + '%';             
                }
            }
        }
        </script>   
    </body>
</html>