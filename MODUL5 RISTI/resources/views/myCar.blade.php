@extends('layouts.app')

@section('content')
<div class="container">
    @include('layouts.flash-message')
    <div class="row pt-5">
        <div class="col-md-12 mt-5">
            <h3><b>My Showroom</b></h3>
            <p>List Show Room Risti - 1202201027</p>
        </div>
    </div>
    <div class="row mt-3">
        @foreach($cars as $car)

        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="{{asset($car->image)}}" class="card-img-top"  height="200" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><b>{{$car->name}}</b></h5>
                    <p class="card-text">{{$car->description}}</p>
                    <a href="myCar/details/{{$car->id}}" class="btn btn-primary rounded-pill px-4">Detail</a>
                    <a href="myCar/delete/{{$car->id}}" class="btn btn-danger rounded-pill px-4">Delete</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection