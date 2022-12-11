@extends('layouts.app')

@section('content')
    <div class="container">
        @include('layouts.flash-message')
        <form method="POST" action="/profile/update/{{Auth::User()->id}}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label><br>
                <span>{{Auth::User()->email}}</span>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Nama</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="name" value="{{Auth::User()->name}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Nomor Handphone</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="phone" value="{{Auth::User()->no_hp}}">
            </div>
            <hr>
            <div class="row mb-3">
                <label for="password" class="">{{ __('Kata Sandi') }}</label>

                <div class="col-md-12">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="password-confirm" class="">{{ __('Konfirmasi Kata Sandi') }}</label>

                <div class="col-md-12">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
                </div>
            </div>
                <label for="exampleInputPassword1" class="form-label">Warna Navbar</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">Biru</option>
                    <option value="2">Putih</option>
                    <option value="3">Three</option>
                </select>
                <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </div>
            
            
        </form>
    </div>
@endsection