@extends('layouts.app')

@section('content')

<section class="bg-primary py-2">
  <div class="container">
    <div class="row">
      <div class="col">
        <h2 class="pt-2 text-white">Profil talenta</h2>
      </div>
    </div>
  </div>
</section>

<section id="talent-hedader" class="py-3 bg-primary mb-5">
  <div class="container">
    <div class="profile-photo">
      <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(26).jpg" alt="" height="382" width="302">
    </div>
  </div>

  <div class="profile-info">
    <div class="container">
      <div class="row">
        <div class="col-md-6">


          <h1 class="text-white">{{$talent->name}} {{$talent->surname}}</h1>

          <p class="text-white">Sport</p>
          <p class="text-white"><i class="fa fa-location-arrow mr-2"></i>{{$talent->grad->name}}</p>
        </div>
        <div class="col-md-6">
          <p class="text-white mb-1"><i class="fa fa-facebook-official fa-2x mr-2" aria-hidden="true"></i>www.facebook.hr</p>
          <p class="text-white mb-1"><i class="fa fa-instagram fa-2x mr-2" aria-hidden="true"></i>www.instagram.hr</p>
          <p class="text-white"><i class="fa fa-twitter-square fa-2x mr-2" aria-hidden="true"></i>www.twitter.hr</p>
        </div>
    </div>
    </div>
  </div>

  <div class="profile-data py-4 bg-secondary">
    <div class="container">
      <p class="text-white d-inline">124 favorita</p>
      <p class="text-white d-inline">1241 pregleda</p>
    </div>
  </div>

  @endsection
