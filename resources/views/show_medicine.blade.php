@extends('base')
@push('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
<link href="{{ asset('css/product.css') }}" rel="stylesheet">
@endpush

@section('content')
<div class="row">
    @foreach($medicines as $medicine)
    <div class="col-md-4">
        <div class="product-card">
            <div class="product-tumb">
                <img src="{{ URL::to($medicine->image)}}" alt="cloth">
            </div>
            <div class="product-details">
                <span class="product-catagory">{{$medicine->name}}</span>
                <h4><a href="">{{$medicine->name}}</a></h4>
                <p>{{$medicine->description}}</p>
                <div class="product-bottom-details">
                    <div class="product-price"><small>$96.00</small>${{$medicine->price}}</div>
                    <div class="product-links">
                    <a class="btn btn-sm bg-success" href="{{route('buy_medicine', ['id' => $medicine->id])}}"><i class="fa fa-shopping-cart"></i> Buy</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection