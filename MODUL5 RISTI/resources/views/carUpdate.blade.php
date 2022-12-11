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
            <form action="/myCar/edit/{{$car->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama Mobil</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="name" value="{{$car->name}}"> 
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama Pemilik</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="owner" value="{{$car->owner}}">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Merk</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="brand" value="{{$car->owner}}">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Tanggal Beli</label>
                    <input type="dateTime" class="form-control" id="exampleFormControlInput1" name="date" value="{{$car->purchase_date}}">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="desc" rows="3">{{$car->description}}</textarea>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Foto</label>
                    <input class="form-control" type="file" id="formFile" name="img">
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Status Pembayaran</label><br>
                    <?php if($car->status=="Lunas") {?>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" id="inlineRadio1" value="Lunas" checked>
                        <label class="form-check-label" for="inlineRadio1">Lunas</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" id="inlineRadio2" value="Belum-Lunas">
                        <label class="form-check-label" for="inlineRadio2">Belum Lunas</label>
                    </div>
                    <?php } else{?>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" id="inlineRadio1" value="Lunas">
                        <label class="form-check-label" for="inlineRadio1">Lunas</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" id="inlineRadio2" value="Belum-Lunas"checked>
                        <label class="form-check-label" for="inlineRadio2">Belum Lunas</label>
                    </div>
                    <?php } ?>
                    <div class="mt-3">
                        <button class="btn btn-primary" type="submit">Selesai</button>
                    </div>
                </div>
            </form>
        </div>
        
    </div>
    @endforeach
</div>
@endsection