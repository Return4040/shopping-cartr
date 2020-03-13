<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>payment</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
      <image src="https://www.pngkey.com/png/full/135-1358799_the-arcanum-logo-cool-logos-not-used.png" width="50px" height="50px" align="left" style="padding: 5px;"></image>
        <a class="navbar-brand" href="#">C.L.W</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Category
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Audi</a>
                <a class="dropdown-item" href="#">Honda</a>
                <a class="dropdown-item" href="#">BMW</a>
              </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contactUs.html">Contact</a>
              </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>

    <div class="container-fluid" >
        <div class="row">
          <div class="col-md-2">
            <ul class="list-group">
              <li class="list-group-item active">ALL</li>
              <li class="list-group-item">Audi<img src="images/audilogo.png" width="50%" style="padding: 20px;"></li>
              <li class="list-group-item">Honda<img src="images/honda.png" width="35%" style="padding: 5px;"></li>
              <li class="list-group-item">BMW<img src="images/bmlogo.png" width="40%" style="padding: 10px;"></li>
           </ul>
          </div>
          <div class="col-md-1"></div>

          <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
          <div class="col-md-8">
            <div class=" w3-animate-zoom">
            <div class="card border-0">
                <div class="row">
                    <script>
                        function creditCard(){
                            var card=document.getElementById("cardNumber").value;
                            card=card.substring(0,1); //get first digit
                            if(card==4){
                                document.getElementById("cardType").innerHTML="<img src='photo/visa.jpg' width='50'>"; 
                            }
                            else if(card==5){
                                document.getElementById("cardType").innerHTML="<img src='photo/master.jpg' width='60'>";
                            }
                            else{
                                document.getElementById("cardType").innerHTML="&nbsp;";
                            }
                        }
                    </script>
                    <form action="successful">
                        <p id="cardType">&nbsp;</p>
                        <label for="username">Full Name (on Card)</label>
                        <input type="text" class="form-control" name="username" required>
                        <label for="cardNumber">Card Number</label>
                        <input type="number" onchange="creditCard()" class="form-control" id="cardNumber">

                    <div class="form-group">
                        <label for="">Expiration</label>
                        <div class="form-inline">
                            <select class="form-control">
                                <option>MM</option>
                                <option value="1">01-January</option>
                                <option value="2">02-February</option>
                                <option value="3">03-March</option>
                            </select>
                            <span> / </span>
                            <select class="form-control">
                                <option>YY</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                            </select>
                            <span>&nbsp;</span>
                            <input type="text" class="form-control" name="CVV" placeholder="CVV">
                             
                        </div>
                        <div style="margin-top: 5px;">
                            <button class="btn btn-primary" type="submit">Pay Now</button>
                        </div>
                    </div>
                    </form>

                </div>                 
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
    <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 bg-info" style="width: 100%;" >
                        NSIT Academy <br>
                            No.16,Jalan Sri Putra 1,
                            Bandar Putra,
                            81800 Kulai, Johor <br>
                            607-6600628     
                </div> 
            </div>
        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>