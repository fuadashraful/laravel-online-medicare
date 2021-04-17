@extends('base')
@push('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
<link href="{{ asset('css/product.css') }}" rel="stylesheet">
@endpush

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="product-card">
            <div class="product-tumb">
                <img src="{{ URL::to($medicine->image)}}" alt="cloth">
            </div>
            <div class="product-details">
                <span class="product-catagory">{{$medicine->name}}</span>
                <h4><a href="">{{$medicine->name}}</a></h4>
                <p>{{$medicine->name}}</p>
                <div class="product-bottom-details">
                    <div class="product-price"><small>$96.00</small>$ {{$medicine->price}} </div>
                    <div class="product-links">
                        <form action="{{ route('order_medicine', ['id' => $medicine->id])}}" class="form-group" method="POST">
                            @csrf
                            <label for="formGroupExampleInput">Total Quantity</label>
                            <input type="number" class="form-control mb-3" required name="quantity" id="formGroupExampleInput" placeholder="Enter quantity">
                            <label for="formGroupExampleInput">Contact Number</label>
                            <input type="text" class="form-control mb-3" required name="contact_no" id="formGroupExampleInput" placeholder="Your contact Number">
                            <button class="btn btn-sm bg-success" ><i class="fa fa-shopping-cart"></i> Confirm</button>
                        </form>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6">

    </div>
</div>
@endsection