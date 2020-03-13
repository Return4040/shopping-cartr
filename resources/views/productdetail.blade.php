@extends('template')
@section('content')                        
@foreach($products as $product)               
        <div class="col-md-6"><img src="{{ asset('image/') }}/{{$product->image}}" alt="" class="img-fluid">                        </div>
                        <div class="col-md-6">
                            <h5 class="card-title">{{$product->name}}</h5>
                            <p>{{$product->description}}</p>
                            <div style="height: 100px">Quantity <input type="number" value="1" min="1" max="10"> Available stock: {{$product->quantity}}
                            </div>
                            <div style="height: 100px">RM {{$product->price}} <form action="checkout.html"><button type="submit" style="float:right" class="btn btn-danger btn-xs">Add to Cart</button>
                            </form></div>
@endforeach
@endsection