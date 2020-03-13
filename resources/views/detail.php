<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <image src="{{ asset('images/honda city.jpg')}}" class="img-fluid rounded-circle" alt="100" width="100">
        <a class="navbar-brand" href="#">NSIT</a>
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
                <a class="dropdown-item" href="#">Hardware</a>
                <a class="dropdown-item" href="#">Software</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Training</a>
              </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
              </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>

    <div class="container-fluid" >
        <div class="row">
          <div class="col-md-2">
              <ul class="list-group">
                  <li class="list-group-item active">Program</li>
                  <li class="list-group-item">HTML</li>
                  <li class="list-group-item">CSS</li>
                  <li class="list-group-item">JavaScript</li>
                  <li class="list-group-item">Bootstrap</li>
              </ul>
          </div>
          <div class="col-md-1"></div>

          <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
          <div class="col-md-8">
            <div class=" w3-animate-zoom">
            <div class="card border-0">
                <div class="row">
                    <div class="col-md-6"><img src="image/06.png" alt="" class="img-fluid">
                    </div> 
                    <div class="col-md-6">
                        <h5 class="card-title">HTML 5</h5>
                        <p>HTML 5 lesson with 12 hours face to face tutorial. Level is beignier suitable for anyone who didnt have any programming knowledge.                               
                        </p>
                        Quantity <input type="number" min="1" max="10" value="1">
                        <div class="card-heading ">RM8000</div>
                        <button style=float:right class="btn btn-danger btn-xs">Add to Cart</button>
                    </div> 
                </div>                 
            </div>

            
               
            <div class="col-md-1"></div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>