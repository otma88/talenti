@extends('layouts.app')

@section('content')

    <!-- Start your project here-->
    <div class="container py-5">
        <div class="card card-cascade">
            <!-- Card image -->
            <div class="view view-cascade gradient-card-header blue-gradient">

                <!-- Title -->
                <h2 class="card-header-title mb-3">Registracija</h2>
                <!-- Subtitle -->
                <p class="card-header-subtitle mb-0">Izradi svoj profil</p>

            </div>

            <div class="card-body">
                <!-- Stepper -->
                <div class="steps-form-2 px-4 my-4">
                    <div class="steps-row-2 setup-panel-2 d-flex justify-content-between">
                        <div class="steps-step-2">
                            <a href="#step-1" type="button" class="btn btn-amber btn-circle-2 waves-effect ml-0" data-toggle="tooltip" data-placement="top" title="Osobne informacije"><i class="fa fa-folder-open-o" aria-hidden="true"></i></a>
                        </div>
                        <div class="steps-step-2">
                            <a href="#step-2" type="button" class="btn btn-blue-grey btn-circle-2 waves-effect" data-toggle="tooltip" data-placement="top" title="Informacije o talentu"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                        </div>
                        <div class="steps-step-2">
                            <a href="#step-3" type="button" class="btn btn-blue-grey btn-circle-2 waves-effect" data-toggle="tooltip" data-placement="top" title="Upload fotografija i videa"><i class="fa fa-photo" aria-hidden="true"></i></a>
                        </div>
                        <div class="steps-step-2">
                            <a href="#step-4" type="button" class="btn btn-blue-grey btn-circle-2 waves-effect mr-0" data-toggle="tooltip" data-placement="top" title="Završetak registracije"><i class="fa fa-check" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>

                <div class="container px-4">
                    <form role="form" action="/register" method="post">

                        <!-- FIRST STEP -->
                        <div class="setup-content-2" id="step-1">
                            <h4 class="">Osobne informacije</h4>
                            <hr class="blue-gradient py-1">

                            <div class="form-row">
                                <div class="col-md-4">
                                    <div class="md-form form-group">
                                        <input type="text" class="form-control" id="ime" name="ime">
                                        <label for="ime">Ime</label>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="md-form form-group">
                                        <input type="text" class="form-control" id="prezime" name="prezime">
                                        <label for="prezime">Prezime</label>
                                    </div>
                                </div>

                                <div class="col-md-4 form-inline">
                                    <p class="mb-1 ml-4">Spol: </p>
                                    <div class="form-check mx-3">
                                        <input class="form-check-input" type="radio" name="spol" id="musko" value="Muško" checked>
                                        <label class="form-check-label pl-4" for="musko">
                                            Muško
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="spol" id="zensko" value="Žensko">
                                        <label class="form-check-label pl-4" for="zensko">
                                            Žensko
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-3">
                                    <div class="md-form">
                                        <input placeholder="Datum rođenja" type="text" id="date-picker-example" class="form-control datepicker">
                                    </div>
                                </div>
                            </div>

                            <div class="form-row pt-4">
                                <div class="col-md-4">
                                    <select class="mdb-select colorful-select dropdown-primary">
                                        <option value="" disabled selected>Izaberi državu</option>
                                        <option value="1" data-icon="C:\Users\mario.otmacic\Desktop\Mario\MDB Pro\img\croatia.jpg">Hrvatska</option>
                                        <option value="2">Bosna i Hercegovina</option>
                                        <option value="3">Srbija</option>
                                    </select>
                                    <label>Država</label>
                                </div>

                                <div class="col-md-4">
                                    <select class="mdb-select colorful-select dropdown-primary">
                                        <option value="" disabled selected>Izaberi županiju</option>
                                        <option value="1">Zagrebačka</option>
                                        <option value="2">Splitsko-dalmatinska</option>
                                        <option value="3">Međimurska</option>
                                        <option value="4">Krapinsko-zagorska</option>
                                        <option value="5">Istarska</option>
                                    </select>
                                    <label>Županija</label>
                                </div>

                                <div class="col-md-4">
                                    <select class="mdb-select colorful-select dropdown-primary">
                                        <option value="" disabled selected>Izaberi grad</option>
                                        <option value="1">Zagreb</option>
                                        <option value="2">Samobor</option>
                                        <option value="3">Gornja stubica</option>
                                    </select>
                                    <label>Grad</label>
                                </div>
                            </div>

                            <button class="btn btn-mdb-color btn-rounded nextBtn-2 float-right" type="button">Sljedeća</button>

                        </div>


                        <!-- SECOND STEP -->
                        <div class="setup-content-2" id="step-2">
                            <h4>Odaberi kategoriju talenta: </h4>
                            <hr class="blue-gradient py-1">

                            <div class="form-check mt-3">
                                <input type="checkbox" class="form-check-input col-md-12 parent" name="group1" value="sport" id="SportKvacica" data-toggle="collapse" data-target="#formSport" aria-expanded="false" aria-controls="formSport">
                                <label class="form-check-label" for="SportKvacica">Sport</label>
                            </div>

                            <div class="form-check">
                                <input type="checkbox" class="form-check-input col-md-12 parent" id="GlazbaKvacica" data-toggle="collapse" data-target="#formGlazba" aria-expanded="false" aria-controls="formGlazba">
                                <label class="form-check-label" for="GlazbaKvacica">Glazba</label>
                            </div>

                            <div class="form-check">
                                <input type="checkbox" class="form-check-input col-md-12 parent" id="OstUmjeKvacica" data-toggle="collapse" data-target="#formOstUmje" aria-expanded="false" aria-controls="formOstUmje">
                                <label class="form-check-label" for="OstUmjeKvacica">Ostale umjetnosti</label>
                            </div>

                            <div class="form-check">
                                <input type="checkbox" class="form-check-input col-md-12 parent" id="ZabavaKvacica" data-toggle="collapse" data-target="#formZabava" aria-expanded="false" aria-controls="formZabava">
                                <label class="form-check-label" for="ZabavaKvacica">Zabava</label>
                            </div>

                            <div class="form-check">
                                <input type="checkbox" class="form-check-input col-md-12 parent" id="DizajnKvacica" data-toggle="collapse" data-target="#formDizajn" aria-expanded="false" aria-controls="formDizajn">
                                <label class="form-check-label" for="DizajnKvacica">Dizajn</label>
                            </div>

                            <div class="form-check">
                                <input type="checkbox" class="form-check-input col-md-12 parent" id="GastroKvacica" data-toggle="collapse" data-target="#formGastro" aria-expanded="false" aria-controls="formGastro">
                                <label class="form-check-label" for="GastroKvacica">Gastro</label>
                            </div>

                            <div class="form-check">
                                <input type="checkbox" class="form-check-input col-md-12 parent" id="LjepotaKvacica" data-toggle="collapse" data-target="#formLjepota" aria-expanded="false" aria-controls="formLjepota">
                                <label class="form-check-label" for="LjepotaKvacica">Ljepota</label>
                            </div>

                            <div class="form-check">
                                <input type="checkbox" class="form-check-input col-md-12 parent" id="ModelingKvacica" data-toggle="collapse" data-target="#formModeling" aria-expanded="false" aria-controls="formModeling">
                                <label class="form-check-label" for="ModelingKvacica">Modeling</label>
                            </div>

                            <div class="form-check">
                                <input type="checkbox" class="form-check-input col-md-12 parent" id="ProIObrtKvacica" data-toggle="collapse" data-target="#formProIObrt" aria-expanded="false" aria-controls="formProIObrt">
                                <label class="form-check-label" for="ProIObrtKvacica">Proizvodnja i obrtništvo</label>
                            </div>

                            <div class="form-check mb-4">
                                <input type="checkbox" class="form-check-input col-md-12 parent" id="NeoTalKvacica" data-toggle="collapse" data-target="#formNeoTal" aria-expanded="false" aria-controls="formNeoTal">
                                <label class="form-check-label" for="NeoTalKvacica">Neobični talenti</label>
                            </div>



                            <!--FORM SPORT-->

                            <div class="collapse" id="formSport">
                                <hr>

                                <h4>Vaš talent u sportu: </h4>

                                <div class="row py-3">
                                    <div class="form-check col-md-2">
                                        <input class="form-check-input child" type="checkbox" value="nogomet" name="group1" id="NogometKvacica" data-toggle="collapse" data-target="#formNogomet" aria-expanded="false" aria-controls="formNogomet">
                                        <label class="form-check-label" for="NogometKvacica">Nogomet</label>
                                    </div>

                                    <div class="form-check col-md-2">
                                        <input class="form-check-input child" type="checkbox" value="kosarka" name="group1" id="KosarkaKvacica" data-toggle="collapse" data-target="#formKosarka" aria-expanded="false" aria-controls="formKosarka">
                                        <label class="form-check-label" for="KosarkaKvacica">Košarka</label>
                                    </div>

                                    <div class="form-check col-md-2">
                                        <input class="form-check-input child" type="checkbox" value="" name="group1" id="RukometKvacica">
                                        <label class="form-check-label" for="RukometKvacica">Rukomet</label>
                                    </div>

                                    <div class="form-check col-md-2">
                                        <input class="form-check-input child" type="checkbox" value="" name="group1" id="OdbojkaKvaica">
                                        <label class="form-check-label" for="OdbojkaKvaica">Odbojka</label>
                                    </div>

                                    <div class="form-check col-md-2">
                                        <input class="form-check-input child" type="checkbox" value="" name="group1" id="TenisKvacica">
                                        <label class="form-check-label" for="TenisKvacica">Tenis</label>
                                    </div>

                                    <div class="form-check col-md-2">
                                        <input class="form-check-input child" type="checkbox" value="" name="group1" id="AtlIGimKvacica">
                                        <label class="form-check-label" for="AtlIGimKvacica">Atletika i gimnastika</label>
                                    </div>

                                    <div class="form-check col-md-2">
                                        <input class="form-check-input child" type="checkbox" value="" name="group1" id="BorilaKvacica">
                                        <label class="form-check-label" for="BorilaKvacica">Borilački sportovi</label>
                                    </div>
                                </div>
                            </div>

                            <!--/FORM SPORT-->

                            <!--FORM GLAZBA-->

                            <div class="collapse" id="formGlazba">
                                <hr>

                                <h4>Vaš talent u glazbi: </h4>

                                <div class="row py-3">
                                    <div class="form-check col-md-2">
                                        <input class="form-check-input " type="checkbox" value="" id="PjevanjeKvacica">
                                        <label class="form-check-label" for="PjevanjeKvacica">Pjevanje</label>
                                    </div>

                                    <div class="form-check col-md-2">
                                        <input class="form-check-input" type="checkbox" value="" id="BandKvacica">
                                        <label class="form-check-label" for="BandKvacica">Band</label>
                                    </div>

                                    <div class="form-check col-md-2">
                                        <input class="form-check-input" type="checkbox" value="" id="InstrumentKvacica">
                                        <label class="form-check-label" for="InstrumentKvacica">Instrumentalisti</label>
                                    </div>

                                    <div class="form-check col-md-2">
                                        <input class="form-check-input" type="checkbox" value="" id="DjKvacica">
                                        <label class="form-check-label" for="DjKvacica">DJ</label>
                                    </div>


                                    <div class="form-check col-md-2">
                                        <input class="form-check-input" type="checkbox" value="" id="KlapaKvacica">
                                        <label class="form-check-label" for="KlapaKvacica">Klapa</label>
                                    </div>

                                    <div class="form-check col-md-2">
                                        <input class="form-check-input" type="checkbox" value="" id="SkladanjeKvacica">
                                        <label class="form-check-label" for="SkladanjeKvacica">Skladanje</label>
                                    </div>

                                    <div class="form-check col-md-2">
                                        <input class="form-check-input" type="checkbox" value="" id="ArangeKvacica">
                                        <label class="form-check-label" for="ArangeKvacica">Aranžiranje</label>
                                    </div>

                                    <div class="form-check col-md-2">
                                        <input class="form-check-input" type="checkbox" value="" id="TekstKvacica">
                                        <label class="form-check-label" for="TekstKvacica">Pisanje tekstova</label>
                                    </div>

                                    <div class="form-check col-md-2">
                                        <input class="form-check-input" type="checkbox" value="" id="ProdKvacica">
                                        <label class="form-check-label" for="ProdKvacica">Produkcija</label>
                                    </div>
                                </div>
                            </div>

                            <!--/FORM GLAZBA-->

                            <!--DETALJI NOGOMET-->

                            <div id="formNogomet" class="collapse">
                                <hr>
                                <p class="h3 text-center">Nogomet</p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="h5">Pozicija igrača: </p>
                                        <div class="form-inline mb-3">
                                            <div class="form-check mr-3">
                                                <input class="form-check-input" type="checkbox" id="poz-nog1">
                                                <label class="form-check-label pl-4" for="poz-nog1">Vratar</label>
                                            </div>

                                            <div class="form-check mr-3">
                                                <input class="form-check-input" type="checkbox" id="poz-nog2">
                                                <label class="form-check-label pl-4" for="poz-nog2">Branič</label>
                                            </div>

                                            <div class="form-check mr-3">
                                                <input class="form-check-input" type="checkbox" id="poz-nog3">
                                                <label class="form-check-label pl-4" for="poz-nog3">Vezni igrač</label>
                                            </div>

                                            <div class="form-check mr-3">
                                                <input class="form-check-input" type="checkbox" id="poz-nog4">
                                                <label class="form-check-label pl-4" for="poz-nog4">Napadač</label>
                                            </div>
                                        </div>

                                        <p class="h5">Preferirana noga: </p>
                                        <div class="form-inline mb-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="NogometRadios" id="LijevaNoga" value="option1">
                                                <label class="form-check-label pl-4" for="LijevaNoga">Lijeva</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="NogometRadios" id="DesnaNoga" value="option2">
                                                <label class="form-check-label pl-4" for="DesnaNoga">Desna</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="NogometRadios" id="ObjeNoga" value="option3">
                                                <label class="form-check-label pl-4" for="ObjeNoga">Obje</label>
                                            </div>
                                        </div>

                                        <p class="h5 mb-3">Iskustvo: </p>
                                        <div class="md-form">
                                            <i class="fa fa-pencil prefix"></i>
                                            <textarea type="text" id="iskustvoNogomet" class="form-control md-textarea" rows="3"></textarea>
                                            <label for="iskustvoNogomet">Opiši svoje dosadašnje iskustvo</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 p-5">
                                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/People/6-col/img(119).jpg" class="img-fluid z-depth-1" alt="Responsive image">
                                    </div>
                                </div>
                            </div>

                            <!--/DETALJI NOGOMET-->

                            <!--DETALJI KOŠARKA-->

                            <div id="formKosarka" class="collapse">
                                <hr>
                                <p class="h3 text-center">Košarka</p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="h5">Pozicija igrača: </p>
                                        <div class="form-inline mb-3">
                                            <div class="form-check mr-3">
                                                <input class="form-check-input" type="checkbox" id="poz-kos1">
                                                <label class="form-check-label pl-4" for="poz-kos1">Razigravač</label>
                                            </div>

                                            <div class="form-check mr-3">
                                                <input class="form-check-input" type="checkbox" id="poz-kos2">
                                                <label class="form-check-label pl-4" for="poz-kos2">Šuter</label>
                                            </div>

                                            <div class="form-check mr-3">
                                                <input class="form-check-input" type="checkbox" id="poz-kos3">
                                                <label class="form-check-label pl-4" for="poz-kos3">Krilo</label>
                                            </div>

                                            <div class="form-check mr-3">
                                                <input class="form-check-input" type="checkbox" id="poz-kos4">
                                                <label class="form-check-label pl-4" for="poz-kos4">Krilni centar</label>
                                            </div>

                                            <div class="form-check mr-3">
                                                <input class="form-check-input" type="checkbox" id="poz-kos5">
                                                <label class="form-check-label pl-4" for="poz-kos5">Centar</label>
                                            </div>
                                        </div>

                                        <p class="h5">Preferirana ruka: </p>
                                        <div class="form-inline mb-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="KosarkaRadios" id="LijevaRuka" value="option1">
                                                <label class="form-check-label pl-4" for="LijevaRuka">Lijeva</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="KosarkaRadios" id="DesnaRuka" value="option2">
                                                <label class="form-check-label pl-4" for="DesnaRuka">Desna</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="KosarkaRadios" id="ObjeRuka" value="option3">
                                                <label class="form-check-label pl-4" for="ObjeRuka">Obje</label>
                                            </div>
                                        </div>

                                        <p class="h5 mb-3">Iskustvo: </p>
                                        <div class="md-form">
                                            <i class="fa fa-pencil prefix"></i>
                                            <textarea type="text" id="iskustvoKosarka" class="form-control md-textarea" rows="2"></textarea>
                                            <label for="iskustvoKosarka">Opiši svoje dosadašnje iskustvo</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 p-5">
                                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/People/6-col/img(119).jpg" class="img-fluid z-depth-1" alt="Responsive image">
                                    </div>
                                </div>
                            </div>

                            <!--/DETALJI KOŠARKA-->


                            <button class="btn btn-mdb-color btn-rounded prevBtn-2 float-left" type="button">Prethodna</button>
                            <button class="btn btn-mdb-color btn-rounded nextBtn-2 float-right" type="button">Sljedeća</button>

                        </div>




                        <!-- Third Step -->
                        <div class="setup-content-2" id="step-3">
                            <h4>Upload slika i videa </h4>
                            <hr class="blue-gradient py-1">
                            <h5>Dodaj sliku profila: </h5>
                            <form class="md-form">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="file-field d-flex justify-content-center">
                                            <div class="mb-4">
                                                <img src="https://mdbootstrap.com/img/Photos/Others/placeholder-avatar.jpg" id="imagePreview" class="z-depth-1-half img-thumbnail profile-pic">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="file-field d-flex justify-content-center">
                                            <div class="btn blue-gradient btn-sm float-left">
                                                <span><i class="fa fa-cloud-upload mr-2" aria-hidden="true"></i>Odaberi fotografiju</span>
                                                <input type="file" id="imageUpload" accept=".png, .jpg, .jpeg">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <hr>
                                    </div>
                                    <div class="col-md-12">
                                        <h5>Dodaj galeriju fotografija: </h5>
                                        <div class="file-field">
                                            <div class="btn blue-gradient btn-sm float-left">
                                                <span><i class="fa fa-cloud-upload mr-2" aria-hidden="true"></i>Odaberi datoteke</span>
                                                <input type="file" id="files" name="files[]" multiple>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div id="mdb-lightbox-ui"></div>
                                        <div class="mdb-lightbox sortImages"></div>
                                    </div>
                                </div>
                                <hr>
                                <h5>Dodaj galeriju videa: </h5>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="md-form">
                                            <i class="fa fa-video-camera prefix" aria-hidden="true"></i>
                                            <input type="text" id="inputIconEx1" class="form-control">
                                            <label for="inputIconEx1">URL videa</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="md-form">
                                            <i class="fa fa-video-camera prefix" aria-hidden="true"></i>
                                            <input type="text" id="inputIconEx2" class="form-control">
                                            <label for="inputIconEx2">URL videa</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="md-form">
                                            <i class="fa fa-video-camera prefix" aria-hidden="true"></i>
                                            <input type="text" id="inputIconEx3" class="form-control">
                                            <label for="inputIconEx3">URL videa</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="md-form">
                                            <i class="fa fa-video-camera prefix" aria-hidden="true"></i>
                                            <input type="text" id="inputIconEx4" class="form-control">
                                            <label for="inputIconEx4">URL videa</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="md-form">
                                            <i class="fa fa-video-camera prefix" aria-hidden="true"></i>
                                            <input type="text" id="inputIconEx5" class="form-control">
                                            <label for="inputIconEx5">URL videa</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="md-form">
                                            <i class="fa fa-video-camera prefix" aria-hidden="true"></i>
                                            <input type="text" id="inputIconEx6" class="form-control">
                                            <label for="inputIconEx6">URL videa</label>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <button class="btn btn-mdb-color btn-rounded prevBtn-2 float-left" type="button">Prethodna</button>
                            <button class="btn btn-mdb-color btn-rounded nextBtn-2 float-right" type="button">Sljedeća</button>

                        </div>

                        <!-- Fourth Step -->
                        <div class="row setup-content-2" id="step-4">
                            <div class="col-md-12">

                                <h4 class="mt-4">Sigurnosne postavke</h4>


                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="md-form">
                                            <input type="email" id="email" class="form-control" name="email" validate>
                                            <label for="email" data-error="Greška" data-success="Ispravno">E-mail</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="md-form">
                                            <input type="password" id="password" class="form-control" name="password" validate>
                                            <label for="password" data-error="wrong" data-success="right">Lozinka</label>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="md-form">
                                            <input type="password" id="password2" class="form-control validate">
                                            <label for="password2" data-error="wrong" data-success="right">Ponovite lozinku</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input filled-in" type="checkbox" value="" id="filledInCheckbox1">
                                    <label class="form-check-label" for="filledInCheckbox1">Prihvaćam uvjete korištenja</label>
                                </div>

                                <div class="form-check mb-3">
                                    <input class="form-check-input filled-in" type="checkbox" value="" id="filledInCheckbox2">
                                    <label class="form-check-label" for="filledInCheckbox2">Želim se preplatiti na newsletter</label>
                                </div>


                                <button class="btn btn-mdb-color btn-rounded prevBtn-2 float-left" type="button">Prethodna</button>
                                <button class="btn btn-success btn-rounded float-right" type="submit">Pošalji</button>
                            </div>
                        </div>

                    </form>









                </div>
            </div>
        </div>
    </div>






<!-- /Start your project here-->




@endsection


<!--     <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Surname') }}</label>

                            <div class="col-md-6">
                                <input id="surname" type="text" class="form-control{{ $errors->has('surname') ? ' is-invalid' : '' }}" name="surname" value="{{ old('surname') }}" required autofocus>

                                @if ($errors->has('surname'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('surname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
