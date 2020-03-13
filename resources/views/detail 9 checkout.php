<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>C. L. W Pte Ltd</title>

    <script>
      function myFunction(){
        var checkbox=document.getElementsByName('item[]');
        var len=checkbox.length; //get number of items
        var price=document.getElementsByName('price[]');
        var quantity=document.getElementsByName('quantity[]');
        var subamount=document.getElementsByName('subamount[]');

      
        for(var i=0;i<len;i++){
          document.getElementsByName('subamount[]')[i].value=parseFloat(price[i].value)*parseFloat(quantity[i].value);
          console.log(len);
        } 
      }

      function cal(){
        var subamount=document.getElementsByName('subamount[]'); //get all subamount
        var price=document.getElementsByName('price[]');
        var quantity=document.getElementsByName('quantity[]');
        var subtotal=0; //define all require calculate items
        var tax=0;
        var total=0;

        var checkbox=document.getElementsByName('item[]');
        var len=checkbox.length;
        for(var i=0;i<len;i++){
          document.getElementsByName('subamount[]')[i].value=parseFloat(price[i].value)*parseFloat(quantity[i].value);
        } 
         for(var i=0;i<len;i++){  
           if(checkbox[i].checked){ //if user thick check box
            subtotal=parseFloat(subamount[i].value)+parseFloat(subtotal);
          }
        }
        tax=subtotal*0.1; //0.1 = 10%
        total=subtotal+tax;
        if(subtotal>10000){
          document.getElementById("extradiscount").innerHTML="Discount RM1000"
          total=total-1000;
          
        }
        else{
          document.getElementById("extradiscount").innerHTML="&nbsp;";
        }

        if(document.getElementById("discount").value=="15%"){
          total=total*0.95;
        }
        document.getElementById('subtotal').value=subtotal.toFixed(2);// 2 = decimal place
        document.getElementById('tax').value=tax.toFixed(2);
        document.getElementById('total').value=total.toFixed(2);
      }
 
      function checkdiscount(){
        var promocode=document.getElementById("promocode").value;
        if(promocode=="sbanguo"){
          document.getElementById("discount").value="15%";
        }
        else{
          document.getElementById("discount").value="Invalid code";
        }
      }
      function toggle(source){
        var checkbox=document.querySelectorAll('input[type="checkbox"');
        for(var i=0;i<checkbox.length;i++){
          if(checkbox[i]!=source){
            checkbox[i].checked=source.checked;
          }
        }
      }
      
    </script>
  </head>
  <body onload="myFunction()">
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <image src="images/honda accord.png" class="img-fluid rounded-circle" alt="100" width="100">
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
                <a class="dropdown-item" href="#">Hardware</a>
                <a class="dropdown-item" href="#">Software</a>
                <a class="dropdown-item" href="#">Training</a>
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
            <div class="col-md-10">
                <h5>Check Out</h5>
                <table>
                    <tr>
                    <td><input type="checkbox" onclick="toggle(this);"></td>
                    <td>Item</td>
                    <td>Price</td>
                    <td>Quanity</td>
                    <td>Subtotal</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="item[]" value=""></td>
                    <td><img src="photo/honda accord.png" width="80" alt=""> </td>
                    <td>RM170,000 <input type="hidden" name="price[]" id="price[]" value="170000"></td>
                    <td><input type="number" value="1" min="1" max="10" name="quantity[]" id="quantity[]"></td>
                    <td><input type="text" name="subamount[]" size="7" id="subamount[]"></td>
                </tr>
                
                <tr>
                    <td colspan="4" style="text-align: right;">Subtotal</td>
                    <td><input type="text" name="subtotal" id="subtotal" size="7"></td>
                </tr>
                <tr>
                    <td colspan="4"  style="text-align: right;">Tax</td>
                    <td><input type="text" name="tax" id="tax" size="7"></td>                   
                </tr>
                <tr>
                  <td colspan="3"  style="text-align: right;">PromoCode</td>
                  <td><input type="text" name="promocode" id="promocode" size="7" onchange="checkdiscount()"></td>
                  <td><input type="text" name="discount" id="discount" size="7" readonly></td>                    
                </tr>
                <tr>
                  <td colspan="6"  style="text-align: right;"><p id="extradiscount">&nbsp;</p>
                  </td>                  
                  </tr>
                <tr>
                    <td colspan="4"  style="text-align: right;">Total</td>
                    <td><input type="text" name="total" id="total" size="7"></td>                    
                </tr>
                <tr>
                      <form action="payment">
                        <td colspan="5"  style="text-align: right;">                          
                          <button type="button" class="btn btn-primary btn-xs" onclick="cal()">Calculate</button>
                          <button class="btn btn-danger" type="submit">Make Payment</button>
                    </form>
                    </td>                   
                </tr>
            </table>
                
            </div>
            <div style="float: left;width: 100%;margin-left: 15px;margin-top: 10px;font-size: 0.9em;background-color:rgb(0, 140, 255);height: 70px">
                NSIT Academy <br>
                No.16,Jalan Sri Putra 1, <br>
                607-6600628 
            </div> 
              
            </body>