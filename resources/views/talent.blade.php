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

<section id="talent-hedader" class="py-3 bg-primary">
  <div class="container">
    <div class="profile-photo">
      <img src="{{$user->photo ? $user->photo->path : 'http://placehold.it/400x400'}}" alt="" height="382" width="302">
    </div>
  </div>

  <div class="profile-info">
    <div class="container">
      <div class="row">
        <div class="col-md-6 mb-5">


          <h1 class="text-white">{{$talent->name}} {{$talent->surname}}</h1>

          <p class="text-white">
            @foreach($kategorije as $kategorija)
              {{ $kategorija->name }} <br>
            @endforeach
          </p>
          <p class="text-white mb-4"><i class="fa fa-location-arrow mr-2"></i>{{$talent->grad->name}}</p>
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

  <div class="profile-data py-3 mb-4 bg-top">
    <div class="container">
      <button type="button" class="btn btn-default btn-rounded m-0 mr-2">Favorit</button>
      <button type="button" class="btn btn-default btn-rounded m-0 mr-2" data-toggle="modal" data-target="#modalContactForm">Kontakt</button>
      <button type="button" class="btn btn-default btn-rounded m-0">Podjeli</button>
    </div>
  </div>
</section>

<section class="py-5 bg-primary">
  <div class="container py-2">

      <!-- Nav tabs -->
      <ul class="nav nav-tabs nav-justified bg-top">
          <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#panel1" role="tab">O meni</a>
          </li>

          @foreach($podkategorije as $podkategorija)

          <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#panel2" role="tab">{{ $podkategorija->name }}</a>
          </li>

          @endforeach

      </ul>
      <!-- Tab panels -->
      <div class="tab-content card bg-top">
          <!--Panel 1-->
          <div class="tab-pane fade in show active" id="panel1" role="tabpanel">
              <br>
              <p class="text-white">{{ $talent->o_meni }}</p>
          </div>
          <!--/.Panel 1-->
          <!--Panel 2-->
          <div class="tab-pane fade" id="panel2" role="tabpanel">
              <br>
              <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus
                  reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione
                  porro voluptate odit minima.</p>
              <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus
                  reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione
                  porro voluptate odit minima.</p>
          </div>
          <!--/.Panel 2-->
      </div>
    </div>
</section>



<!-- KONTAKT MODAL -->

<div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Kontaktiraj me</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body mx-3">
                <div class="md-form mb-5">
                    <i class="fa fa-user prefix grey-text"></i>
                    <input type="text" id="form34" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="form34">Vaše ime</label>
                </div>

                <div class="md-form mb-5">
                    <i class="fa fa-envelope prefix grey-text"></i>
                    <input type="email" id="form29" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="form29">Vaš email</label>
                </div>

                <div class="md-form mb-5">
                    <i class="fa fa-tag prefix grey-text"></i>
                    <input type="text" id="form32" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="form32">Predmet</label>
                </div>

                <div class="md-form">
                    <i class="fa fa-pencil prefix grey-text"></i>
                    <textarea type="text" id="form8" class="md-textarea form-control" rows="4"></textarea>
                    <label data-error="wrong" data-success="right" for="form8">Vaša poruka</label>
                </div>

            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button class="btn btn-default">Pošalji <i class="fa fa-paper-plane-o ml-1"></i></button>
            </div>
        </div>
    </div>
</div>


<!-- KRAJ KONTAKT MODAL -->



  @endsection
