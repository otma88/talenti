@extends('layouts.app')

@section('content')

<section id="clanstvo" class="pt-5 pb-4">
  <div class="container">
    <div class="row">
      <div class="col d-flex justify-content-center">
        <h2 class="text-white mr-2 pt-2">Članstvo u </h2><p class="p-tvornici mr-3">Tvornici</p><p class="p-talenata">Talenata</p>
      </div>
    </div>
    <div class="row py-3 d-flex justify-content-center">
      <div class="col-md-2 text-white bg-besplatno py-4">
        <h3 class="text-center mb-0">Besplatno</h3>
      </div>
      <div class="col-md-2 text-white bg-top py-4">
        <h3 class="text-center mb-0">Top</h3>
      </div>
    </div>

    <div class="row pt-4">
      <div class="col d-flex justify-content-center">
        <p class="lead light-green-text">Članstvo u Tvornici Talenata je besplatno, ali ukoliko želite da Vaš talenat bude izdvojen i primjećen zaradite TOP članstvo.</p>
      </div>

    </div>

  </div>
</section>

<section class="bg-primary py-4">
  <div class="container">
    <div class="row">
      <div class="col d-flex justify-content-center">
        <blockquote class="blockquote">
          <h4 class="blue-text">TOP članstvo se ne naplaćuje, ono se mora zaraditi</h4>
        </blockquote>


      </div>


    </div>


  </div>

</section>

<section id="packages" class="bg-primary py-4">
  <div class="container px-5">
    <table class="table text-white">
  <thead>
    <tr>
      <th scope="row" class="tb-head-title">Članske značajke</th>
      <th scope="row" class="tb-head-title table-active text-center">Besplatno</th>
      <th scope="row" class="tb-head-title table-info text-center tb-width">Top</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Izrada profila</td>
      <td class="table-active text-center"><i class="fa fa-check"></i></td>
      <td class="table-info text-center"><i class="fa fa-check"></i></td>
    </tr>
    <tr>
      <td>Fotografije</td>
      <td class="table-active text-center">10</td>
      <td class="table-info text-center">30</td>
    </tr>
    <<tr>
      <td>Video</td>
      <td class="table-active text-center">2</td>
      <td class="table-info text-center">10</td>
    </tr>
    <tr>
      <td>Prijava na audicije i poslove</td>
      <td class="table-active text-center"><i class="fa fa-minus"></i></td>
      <td class="table-info text-center"><i class="fa fa-check"></i></td>
    </tr>
    <tr>
      <td>Izdvojeni na naslovnici</td>
      <td class="table-active text-center"><i class="fa fa-minus"></i></td>
      <td class="table-info text-center"><i class="fa fa-check"></i></td>
    </tr>
    <tr>
      <td>Promocije na facebook stranici Tvornice Talenata <i class="fa fa-facebook-official"></i></td>
      <td class="table-active text-center"><i class="fa fa-minus"></i></td>
      <td class="table-info text-center"><i class="fa fa-check"></i></td>
    </tr>
    <tr>
      <td>Promocije na Instagramu Tvornice Talenata <i class="fa fa-instagram"></i></td>
      <td class="table-active text-center"><i class="fa fa-minus"></i></td>
      <td class="table-info text-center"><i class="fa fa-check"></i></td>
    </tr>
    <tr>
      <td>Objave članaka o talentu</td>
      <td class="table-active text-center"><i class="fa fa-minus"></i></td>
      <td class="table-info text-center"><i class="fa fa-check"></i></td>
    </tr>
    <tr>
      <td>Prve pozicije u bazi talenata</td>
      <td class="table-active text-center"><i class="fa fa-minus"></i></td>
      <td class="table-info text-center"><i class="fa fa-check"></i></td>
    </tr>
    <tr>
      <td>Sudjelovanje u nagradnim igrama</td>
      <td class="table-active text-center"><i class="fa fa-minus"></i></td>
      <td class="table-info text-center"><i class="fa fa-check"></i></td>
    </tr>
  </tbody>
</table>
  </div>
</section>

<section id="top-clanstvo" class="bg-primary py-3">
  <div class="container">
    <h3 class="text-white">Da bi postali TOP članovi vodite se sljedećim kriterijima:</h3>
  <div class="row py-2">
      <div class="col-md-1">
        <img src="{{ asset('mdbo/images/li-icon.png')}}" class="float-right"alt="">
      </div>
      <div class="col-md-9">
        <h4 class="text-white">Profilna slika</h4>
        <h5 class="text-white pl-2">- Portret - ako je talent jedna osoba i predstavlja samog sebe</h5>
        <h5 class="text-white pl-2">- Logo banda, skupine ili branda - ukoliko je talent skupina ljudi koji djeluju kao skupni talent</h5>
        <img src="{{ asset('mdbo/images/talent-1.png')}}" class="ml-2 py-2" alt="">
        <img src="{{ asset('mdbo/images/talent-2.png')}}" class="ml-2 py-2" alt="">
        <img src="{{ asset('mdbo/images/talent-3.png')}}" class="ml-2 py-2" alt="">
        <img src="{{ asset('mdbo/images/talent-4.png')}}" class="ml-2 py-2" alt="">
      </div>
  </div>

  <div class="row py-2">
      <div class="col-md-1">
        <img src="{{ asset('mdb/images/li-icon.png')}}" class="float-right"alt="">
      </div>
      <div class="col-md-9">
        <h4 class="text-white">Galerija slika i videa</h4>
        <h5 class="text-white pl-2">- Priložiti kvalitetan foto i video sadržaj po mogućnosti u HD rezoluciji</h5>
        <img src="{{ asset('mdbo/images/gal-photo-1.png')}}" class="ml-2 py-2" alt="">
        <img src="{{ asset('mdbo/images/gal-photo-2.png')}}" class="ml-2 py-2" alt="">
        <img src="{{ asset('mdbo/images/gal-photo-3.png')}}" class="ml-2 py-2" alt="">
        <img src="{{ asset('mdbo/images/gal-photo-4.png')}}" class="ml-2 py-2" alt=""><br>
        <img src="{{ asset('mdbo/images/gal-photo-5.png')}}" class="ml-2 py-2" alt="">
        <img src="{{ asset('mdbo/images/gal-photo-6.png')}}" class="ml-2 py-2" alt="">
        <img src="{{ asset('mdbo/images/gal-photo-7.png')}}" class="ml-2 py-2" alt="">
        <img src="{{ asset('mdbo/images/gal-photo-8.png')}}" class="ml-2 py-2" alt="">

      </div>
  </div>

  <div class="row py-2">
      <div class="col-md-1">
        <img src="{{ asset('mdb/images/li-icon.png')}}" class="float-right"alt="">
      </div>
      <div class="col-md-9">
        <h4 class="text-white">Riječ dvije o meni/nama</h4>
        <h5 class="text-white pl-2">- Gramatički točno i što detaljnjije opisati svoje iskustvo, vještine i reference kako bi potencijalni
  poslodavci dobili uvid u kvalitetu talenta.</h5>
      </div>
  </div>

  <h5 class="text-white py-4"><strong>Administracija portala Tvornice Talenata pregledava svaki profil talenta te ukoliko zadovoljavate sve kriterije za TOP članstvo obaviještavamo Vas e-mailom o promjeni Vašeg statusa članstva. Nakon toga na Vašoj profilnoj slici u bazi talenata dodjeljujemo Vam “badge” <span class="badge badge-pill light-blue">TOP</span></strong></h5>

    <div class="row py-4 d-flex justify-content-center">
      <button class="btn btn-primary"><i class="fa fa-sign-in mr-1"></i>Registriraj se kao talent</button>
    </div>

  </div>

</section>




@endsection
