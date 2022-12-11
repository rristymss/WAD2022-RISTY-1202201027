@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12"></div>
        <h2><b>Tambah Mobil</b></h2>
        <div class="col-md-12">
            <p>Tambah Mobil Baru Anda </p>
        </div>
    </div>
    <form action="{{route('storeCar')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-10">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama Mobil</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="name" placeholder="BMW-i4">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama Pemilik</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="owner" placeholder="Risti-1202201027">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Merk</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="brand" placeholder="BMW">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Tanggal Beli</label>
                    <input type="date" class="form-control" id="exampleFormControlInput1" name="date">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="desc" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Foto</label>
                    <input class="form-control" type="file" id="formFile" name="img">
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Status Pembayaran</label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" id="inlineRadio1" value="Lunas">
                        <label class="form-check-label" for="inlineRadio1">Lunas</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" id="inlineRadio2" value="Belum-Lunas">
                        <label class="form-check-label" for="inlineRadio2">Belum Lunas</label>
                    </div>
                </div>
                <div class="mt-3">
                    <button class="btn btn-primary" type="submit">Selesai</button>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection