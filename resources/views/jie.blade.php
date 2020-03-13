<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>C.L.W Pte Ltd</title>
  </head>

  <body>
      <nav class="navbar navbar-expand-lg navbar-light bg-primary">
      <div style="height: 50px; width: 30px;">
        <image src="https://www.pngkey.com/png/full/135-1358799_the-arcanum-logo-cool-logos-not-used.png" class="img-fluid rounded-circle" alt="100"   >
          </div>
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
                <a class="nav-link" href="contactUs">Contact</a>
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
                  <li class="list-group-item">Audi<img src="{{ asset('images/audilogo.png')}}" width="50%" style="padding: 20px;"></li>
                  <li class="list-group-item">Honda<img src="{{ asset('images/honda.png')}}" width="35%" style="padding: 5px;"></li>
                  <li class="list-group-item">BMW<img src="{{ asset('images/bmlogo.png')}}" width="40%" style="padding: 10px;"></li>
                  
                  
                </ul>
             </div>
               
             <div class="col-md-1"></div>
             <div class="col-md-8">
                <div class="card boader-0">
                    <div class="row">
                        <div class="col-sm-4">
                        <div class="card h-80">
                          <div class="card-body">
                                <h5 class="card-title">Honda City</h5>
                                <a href="detail 7">
                                <img src="{{ asset('images/honda city.jpg')}}" alt="" class="img-fluid" width="100%"></a>                             
                                  <div class="card-heading ">RM92,000</div>
                                  <form action="{{ url('detail 7 checkout') }}">
                                  <button style=float:right class="btn btn-danger btn-xs">Add to Cart</button>
                                  </form>
                              </div>  
                        </div>                             
                   </div>
                        <div class="col-sm-4">
                             <div class="card h-80">
                               <div class="card-body">
                                     <h5 class="card-title">Honda Civic</h5>
                                     <a href="detail 8">
                                     <img src="{{ asset('images/honda civic type R.jpg')}}" alt="" class="img-fluid" width="100%"></a>
                                     <div class="card-heading ">RM300.000</div>
                                     <form action="{{ url('detail 8 checkout')}}">
                                      <button style=float:right class="btn btn-danger btn-xs">Add to Cart</button>
                                     </form>
                                     
                                </div>  
                           </div>                             
                        </div>
                        <div class="col-sm-4">
                            <div class="card h-100">
                              <div class="card-body">
                                     <h5 class="card-title">Honda Accord</h5>
                                     <a href="detail 9">
                                      <img src="{{ asset('images/honda accord.png')}}" alt="" class="img-fluid" width="75%"></a>
                                      <div class="card-heading ">RM170,000</div>
                                      <form action="{{ url('detail 9 checkout')}}">
                                      <button style=float:right class="btn btn-danger btn-xs">Add to Cart</button>
                                      </form>
                                  </div>  
                             </div>                             
                          </div>
                          <div class="col-sm-4">
                              <div class="card h-100">
                                <div class="card-body">
                                       <h5 class="card-title">Audi A4</h5>
                                       <a href="audiA4">
                                        <img src="{{ asset('images/audiA4.jpeg')}}" alt="" class="img-fluid" width="80%" height="100px"></a>
                                        <div class="card-heading ">RM240.000</div>
                                        <form action="{{ url('audiA4 checkout')}}">
                                        <button style=float:right class="btn btn-danger btn-xs">Add to Cart</button>
                                        </form>
                                    </div>  
                               </div>                             
                            </div>
                            <div class="col-sm-4">
                                <div class="card h-100">
                                  <div class="card-body">
                                         <h5 class="card-title">Audi A6</h5>
                                         <a href="audiA6">
                                          <img src="{{ asset('images/audiA6.jpg')}}" alt="" class="img-fluid" width="100%"></a>
                                          <div class="card-heading ">RM550.000</div>
                                          <form action="{{ url('audiA6 checkout')}}">
                                          <button style=float:right class="btn btn-danger btn-xs">Add to Cart</button>
                                          </form>
                                      </div>  
                                 </div>                             
                              </div>
                              <div class="col-sm-4">
                                  <div class="card h-100">
                                    <div class="card-body">
                                           <h5 class="card-title">AudiTT</h5>
                                           <a href="audiTT">
                                            <img src="{{ asset('images/audiTT.jpg')}}" alt="" class="img-fluid" width="90%"></a>
                                            <div class="card-heading ">RM270,000</div>
                                            <form action="{{ url('audiTT checkout')}}">
                                            <button style=float:right class="btn btn-danger btn-xs">Add to Cart</button>
                                            </form>
                                        </div>  
                                   </div>                             
                                </div>
                                <div class="col-sm-4">
                                    <div class="card h-100">
                                      <div class="card-body">
                                             <h5 class="card-title">BMW 3 series</h5>
                                             <a href="BMW 3 series">
                                              <img src="{{ asset('images/BMW 3 series.jpg')}}" alt="" class="img-fluid"></a>
                                              <div clascars="card-heading ">RM328,800</div>
                                              <form action="{{ url('BMW 3 series checkout')}}">
                                              <button style=float:right class="btn btn-danger btn-xs">Add to Cart</button>
                                              </form>
                                          </div>  
                                     </div>                             
                                  </div>
                                  <div class="col-sm-4">
                                      <div class="card h-100">
                                        <div class="card-body">
                                               <h5 class="card-title">BMW 5 series</h5>
                                               <a href="BMW 5 series">
                                                <img src="{{ asset('images/BMW 5 series.jpg')}}" alt="" class="img-fluid" width="90%" ></a>
                                                <div class="card-heading ">RM 330,800</div>
                                                <form action="{{ url('BMW 5 series checkout')}}">  
                                                <button style=float:right class="btn btn-danger btn-xs">Add to Cart</button>
                                                </form>
                                            </div>  
                                       </div>                             
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="card h-100">
                                          <div class="card-body">
                                                 <h5 class="card-title">BMW i8</h5>
                                                 <a href="BMW i8">
                                                  <img src="{{ asset('images/BMW i8.jpg')}}" alt="" class="img-fluid"></a>
                                                  <div class="card-heading ">RM1,310,800</div>
                                                  <form action="{{ url('BMW i8 checkout')}}">
                                                  <button style=float:right class="btn btn-danger btn-xs">Add to Cart</button>
                                                  </form>
                                              </div>  
                                         </div>                             
                                      </div>
                                      
                              
                    
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                          <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                          <li class="page-item"><a class="page-link" href="#">1</a></li>
                          <li class="page-item"><a class="page-link" href="#">2</a></li>
                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                          <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                      </nav>     
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