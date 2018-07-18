
@section('first_step')
<!-- FIRST STEP -->
  <form role="form" action="" method="post">
        <div class="row setup-content-2" id="step-1">
          <div class="card-body">
        <!-- Grid row -->
            <p class="h4 py-3">Želim se registrirati kao: </p>
              <div class="form-row mb-4" id="parent">
                <div class="col-md-6  d-flex justify-content-center">
                  <div class="form-check">
                      <input class="form-check-input" type="radio" name="korisnik" data-toggle="collapse" href="#formTalenti" value="option1" id="talentiRadio" aria-expanded="true" aria-controls="formTalenti">
                      <label class="form-check-label pl-4" for="talentiRadio">Talent</label>
                  </div>
                </div>

                  <div class="col-md-6  d-flex justify-content-center">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="korisnik" data-toggle="collapse" href="#formPoslodavci" value="option2" id="poslodavciRadio" aria-expanded="true" aria-controls="formPoslodavci">
                        <label class="form-check-label pl-4" for="poslodavciRadio">Poslodavac</label>
                    </div>
                  </div>

              </div>

        </div>
      </div>


<!-- FORM TALENTI -->

        <div class="collapsing" id="formTalenti" data-parent="#parent">
          <h4 class="">Osobne informacije</h4>
          <hr class="blue-gradient py-1">


            <div class="form-row">
              <!-- Grid column -->
              <div class="col-md-4">
                  <!-- Material input -->
                  <div class="md-form form-group">
                      <input type="text" class="form-control" id="ime">
                      <label for="ime">Ime</label>
                  </div>
              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-md-4">
                  <!-- Material input -->
                  <div class="md-form form-group">
                      <input type="text" class="form-control" id="prezime">
                      <label for="prezime">Prezime</label>
                  </div>
              </div>

            <div class="col-md-4 form-inline">
              <p class="mb-1 ml-4">Spol: </p>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="muskoRadios" id="musko" value="option1" checked>
                <label class="form-check-label pl-4" for="musko">
                    Muško
                </label>
              </div>

              <div class="form-check">
                <input class="form-check-input" type="radio" name="zenskoRadios" id="zensko" value="option2">
                <label class="form-check-label pl-4" for="zensko">
                    Žensko
                </label>
              </div>
            </div>
              <!-- Grid column -->
          </div>
          <!-- Grid row -->

        <!-- Grid row -->
          <div class="form-row">
                <!-- Grid column -->
                <div class="col-md-3">
                  <div class="md-form">
                    <input placeholder="Datum rođenja" type="text" id="date-picker-talenti" class="form-control datepicker">
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
        <!-- Grid row -->

        <h4 class="mt-4">Sigurnosne postavke</h4>
        <hr class="blue-gradient py-1">

        <div class="form-row">
          <div class="col-md-6">
            <div class="md-form">
                <input type="email" id="inputValidationEx" class="form-control validate">
                <label for="inputValidationEx" data-error="Greška" data-success="Ispravno">E-mail</label>
            </div>
          </div>
          <div class="col-md-6">
            <div class="md-form">
                <input type="password" id="inputValidationEx2" class="form-control validate">
                <label for="inputValidationEx2" data-error="wrong" data-success="right">Lozinka</label>
            </div>
          </div>

          <div class="col-md-6">
            <div class="md-form">
                <input type="password" id="inputValidationEx2" class="form-control validate">
                <label for="inputValidationEx2" data-error="wrong" data-success="right">Ponovite lozinku</label>
            </div>
          </div>
        </div>

        <div class="form-check">
              <input class="form-check-input filled-in" type="checkbox" value="" id="filledInCheckbox1">
              <label class="form-check-label" for="filledInCheckbox1">Prihvaćam uvjete korištenja</label>
        </div>

        <hr class="blue-gradient py-1">


        <button type="submit" class="btn btn-primary btn-md">Dalje</button>

    </div>

  <!-- FORM POSLODAVCI -->

          <div class="collapsing" id="formPoslodavci" data-parent="#parent">
            <h4 class="">Osobne informacije</h4>
            <hr class="blue-gradient py-1">


              <div class="form-row">
                <!-- Grid column -->
                <div class="col-md-4">
                    <!-- Material input -->
                    <div class="md-form form-group">
                        <input type="text" class="form-control" id="ime">
                        <label for="ime">Ime</label>
                    </div>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4">
                    <!-- Material input -->
                    <div class="md-form form-group">
                        <input type="text" class="form-control" id="prezime">
                        <label for="prezime">Prezime</label>
                    </div>
                </div>

              <div class="col-md-4 form-inline">
                <p class="mb-1 ml-4">Spol: </p>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="exampleRadios" id="musko" value="option1" checked>
                  <label class="form-check-label pl-4" for="musko">
                      Muško
                  </label>
                </div>

                <div class="form-check">
                  <input class="form-check-input" type="radio" name="exampleRadios" id="zensko" value="option2">
                  <label class="form-check-label pl-4" for="zensko">
                      Žensko
                  </label>
                </div>
              </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->

          <!-- Grid row -->
            <div class="form-row">
                  <!-- Grid column -->
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
                      <option value="1">Hrvatska</option>
                      <option value="2">Bosna i hercegovina</option>
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
          <!-- Grid row -->

          <h4 class="mt-4">Sigurnosne postavke</h4>
          <hr class="blue-gradient py-1">

          <div class="form-row">
            <div class="col-md-6">
              <div class="md-form">
                  <input type="email" id="inputValidationEx" class="form-control validate">
                  <label for="inputValidationEx" data-error="Greška" data-success="Ispravno">E-mail</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="md-form">
                  <input type="password" id="inputValidationEx2" class="form-control validate">
                  <label for="inputValidationEx2" data-error="wrong" data-success="right">Lozinka</label>
              </div>
            </div>

            <div class="col-md-6">
              <div class="md-form">
                  <input type="password" id="inputValidationEx2" class="form-control validate">
                  <label for="inputValidationEx2" data-error="wrong" data-success="right">Ponovite Lozinka</label>
              </div>
            </div>
          </div>

          <div class="form-check">
                <input class="form-check-input filled-in" type="checkbox" value="" id="filledInCheckbox1">
                <label class="form-check-label" for="filledInCheckbox1">Prihvaćam uvjete korištenja</label>
          </div>

          <hr class="blue-gradient py-1">


          <button type="submit" class="btn btn-primary btn-md">Dalje</button>

          </div>

  </form>

  @endsection
