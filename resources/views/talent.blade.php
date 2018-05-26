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
      <img src="{{$talent->photo ? $talent->photo->path : 'http://placehold.it/400x400'}}" alt="" height="382" width="302">
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
              <a class="nav-link active" data-toggle="tab" href="#panel0" role="tab">O meni</a>
          </li>

          @foreach($podkategorije as $podkategorija)

          <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#panel{{ $loop->iteration }}" role="tab">{{ $podkategorija->name }}</a>
          </li>
          @endforeach
      </ul>
      <!-- Tab panels -->
      <div class="tab-content card bg-top">
          <!--Panel 1-->
          <div class="tab-pane fade in show active" id="panel0" role="tabpanel">
              <br>
              <p class="text-white">{{ $talent->o_meni }}</p>
          </div>
          <!--/.Panel 1-->
        @foreach($podkategorije as $podkategorija)
          <!--Panel 2-->
          <div class="tab-pane fade" id="panel{{ $loop->iteration }}" role="tabpanel">
              <br>
              <p class="text-white">PANEL {{$podkategorija->name}}</p>
               @if ($podkategorija->id == 11)
                @foreach($kat_sport as $sport_item)
                  <p class="text-white">{{ $sport_item->iskustvo }}</p>
                  <p class="text-white">Pozicija</p>
                  <p class="text-white">{{ dd($sport_item->poz_nog_id) }}</p>
                @endforeach
               @endif
          </div>
          <!--/.Panel 2-->
        @endforeach

      </div>

    </div>
</section>


<!-- IMAGE GALLERY -->
<section class="py-3 bg-primary">
  <div class="container">
    <h2 class="text-white">Galerija slika</h2>
    <div class="row">
      <div class="col-md-12">

          <div id="mdb-lightbox-ui"></div>

          <div class="mdb-lightbox">
            @foreach($images as $image)
              <figure class="col-md-4">
                  <a href="{{ $image->path }}" data-size="1600x1067">
                      <img alt="picture" src="{{ $image->path }}" class="img-fluid">
                  </a>
              </figure>
            @endforeach
          </div>

      </div>
    </div>
</div>
</section>
<!-- KRAJ IMAGE GALLERY -->

<!-- VIDEO GALLERY-->
<section class="py-3 bg-primary">
  <div class="container">
    <h2 class="text-white mb-4">Video galerija</h2>
      <div class="row mb-3">
        @foreach($videos as $video)
        <div class="col-md-6">
          <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="{{ $video->path }}" allowfullscreen></iframe>
          </div>
        </div>
        @endforeach
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
