@extends('layouts.app')

@section('content')
<div class="container">
    @foreach($cars as $car)
    <div class="row">
        <div class="col-md-12">
            <h3><b>{{$car->name}}</b></h3>
            <p>Detail Mobil {{$car->name}}</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <img src="{{asset($car->image)}}" width="100%" alt="">
        </div>
        <div class="col-md-8">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama Mobil</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="carName" disabled value="{{$car->name}}"> 
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama Pemilik</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="owner" disabled value="{{$car->owner}}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Merk</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="merk" disabled value="{{$car->owner}}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Tanggal Beli</label>
                <input type="dateTime" class="form-control" id="exampleFormControlInput1" name="date" disabled value="{{$car->purchase_date}}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="desc" disabled rows="3">{{$car->description}}</textarea>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Foto</label>
                <input class="form-control" type="file" id="formFile" name="img" disabled value="{{$car->image}}">
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Status Pembayaran</label><br>
                <?php if($car->status=="Lunas") {?>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status" id="inlineRadio1" value="Lunas" disabled checked>
                    <label class="form-check-label" for="inlineRadio1">Lunas</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status" id="inlineRadio2" value="Belum-Lunas" disabled>
                    <label class="form-check-label" for="inlineRadio2">Belum Lunas</label>
                </div>
                <?php } else{?>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status" id="inlineRadio1" value="Lunas" disabled>
                    <label class="form-check-label" for="inlineRadio1">Lunas</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status" id="inlineRadio2" value="Belum-Lunas" disabled checked>
                    <label class="form-check-label" for="inlineRadio2">Belum Lunas</label>
                </div>
                <?php } ?>
                <div class="mt-3">
                    <a href="/myCar/update/{{$car->id}}" class="a btn btn-warning">Edit</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection