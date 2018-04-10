@extends('layouts.app')

@section('content')

<section class="py-3 bg-primary">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <h2 class="pt-2 text-white">Audicije i poslovi</h2>
      </div>
      <div class="col-md-3">
        <button class="btn btn-default float-right"><i class="fa fa-magic mr-1"></i> Objavi natječaj</button>
      </div>

  </div>

    <div class="row px-1 mt-3">

        <!--Grid column-->
        <div class="col">
          <a href="#">
            <div class="card card-body hoverable bg-secondary">
              <p class="card-text text-white text-center">Sport</p>
            </div>
          </a>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col">
          <a href="#">
            <div class="card card-body hoverable bg-secondary">
              <p class="card-text text-white text-center">Glazbena umjetnost</p>
            </div>
          </a>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col">
          <a href="#">
            <div class="card card-body hoverable bg-secondary">
              <p class="card-text text-white text-center">Zabava</p>
            </div>
          </a>
        </div>
        <!--Grid column-->


        <!--Grid column-->
        <div class="col">
          <a href="#">
            <div class="card card-body hoverable bg-secondary">
              <p class="card-text text-white text-center">Ostale umjetnosti</p>
            </div>
          </a>
        </div>
        <!--Grid column-->


        <!--Grid column-->
        <div class="col">
          <a href="#">
            <div class="card card-body hoverable bg-secondary">
              <p class="card-text text-white text-center">Dizajn</p>
            </div>
          </a>
        </div>
        <!--Grid column-->
      </div>


      <div class="row mt-3 px-1">

          <!--Grid column-->
          <div class="col">
            <a href="#">
              <div class="card card-body hoverable bg-secondary">
                <p class="card-text text-white text-center">Gastro</p>
              </div>
            </a>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col">
            <a href="#">
              <div class="card card-body hoverable bg-secondary">
                <p class="card-text text-white text-center">Ljepota</p>
              </div>
            </a>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col mb-r">
            <a href="#">
              <div class="card card-body hoverable bg-secondary">
                <p class="card-text text-white text-center">Modeling</p>
              </div>
            </a>
          </div>
          <!--Grid column-->


          <!--Grid column-->
          <div class="col">
            <a href="#">
              <div class="card card-body hoverable bg-secondary">
                <p class="card-text text-white text-center">Proizvodnja i obrtništvo</p>
              </div>
            </a>
          </div>
          <!--Grid column-->


          <!--Grid column-->
          <div class="col">
            <a href="#">
              <div class="card card-body hoverable bg-secondary">
                <p class="card-text text-white text-center">Neobični talenti</p>
              </div>
            </a>
          </div>
          <!--Grid column-->
        </div>
  <div class="row">
  <h4 class="text-white pl-3 pt-3">285 rezultata</h4>
  <button type="button" class="btn btn-primary ml-3">Sve audicije i poslovi</button>
  </div>

<form>
  <div class="row mt-3">
    <div class="col-md-3">

      <div class="md-form form-sm">
        <i class="fa fa-search prefix white-text"></i>
        <input type="text" id="form1" class="form-control white-text">
        <label for="form1" class="white-text">Pretraži poslove</label>
      </div>

    </div>

    <div class="col-md-3">
      <select class="mdb-select">
        <option value="" disabled selected>Izaberi županiju</option>
        <option value="1">Option 1</option>
        <option value="2">Option 2</option>
        <option value="3">Option 3</option>
      </select>
    </div>

    <div class="col-md-3">
      <select class="mdb-select">
        <option value="" disabled selected>Izaberi spol</option>
        <option value="1">Muško</option>
        <option value="2">Žensko</option>
      </select>
    </div>

    <div class="col-md-3">
      <button class="btn btn-default float-center"><i class="fa fa-magic mr-1"></i>Pretraži</button>

    </div>

  </div>
</form>

  </div>

</section>

<section class="py-3 bg-primary">
  <div class="container">

    <div class="row">
      <div class="col-md-4">
        <a href="#">
        <!--Panel-->
          <div class="card card-body bg-secondary">
              <h4 class="card-title white-text">Slastičar za sezonski rad</h4>
              <h5 class="text-primary">Gastro</h5>
              <p class="card-text text-white mb-1"><i class="fa fa-institution mr-2" aria-hidden="true"></i>Slastičarna "U prolazu"</p>
              <p class="card-text text-white mb-1"><i class="fa fa-calendar mr-2" aria-hidden="true"></i>01.12.2017</p>
              <p class="card-text text-white"><i class="fa fa-location-arrow mr-2" aria-hidden="true"></i>Samobor</p>
              <p class="card-text text-white">Slastičar za sezonski rad preko ljeta tražimo. Važna je volja i radnik željan zarade</p>
          </div>
        <!--/.Panel-->
        </a>
      </div>


      <div class="col-md-4">
        <a href="#">
        <!--Panel-->
          <div class="card card-body bg-secondary">
              <h4 class="card-title white-text">Slastičar za sezonski rad</h4>
              <h5 class="text-primary">Gastro</h5>
              <p class="card-text text-white mb-1"><i class="fa fa-institution mr-2" aria-hidden="true"></i>Slastičarna "U prolazu"</p>
              <p class="card-text text-white mb-1"><i class="fa fa-calendar mr-2" aria-hidden="true"></i>01.12.2017</p>
              <p class="card-text text-white"><i class="fa fa-location-arrow mr-2" aria-hidden="true"></i>Samobor</p>
              <p class="card-text text-white">Slastičar za sezonski rad preko ljeta tražimo. Važna je volja i radnik željan zarade</p>
          </div>
        <!--/.Panel-->
        </a>
      </div>

      <div class="col-md-4">
        <a href="#">
        <!--Panel-->
          <div class="card card-body bg-secondary">
              <h4 class="card-title white-text">Slastičar za sezonski rad</h4>
              <h5 class="text-primary">Gastro</h5>
              <p class="card-text text-white mb-1"><i class="fa fa-institution mr-2" aria-hidden="true"></i>Slastičarna "U prolazu"</p>
              <p class="card-text text-white mb-1"><i class="fa fa-calendar mr-2" aria-hidden="true"></i>01.12.2017</p>
              <p class="card-text text-white"><i class="fa fa-location-arrow mr-2" aria-hidden="true"></i>Samobor</p>
              <p class="card-text text-white">Slastičar za sezonski rad preko ljeta tražimo. Važna je volja i radnik željan zarade</p>
          </div>
        <!--/.Panel-->
        </a>
      </div>

    </div>

    <div class="row mt-3">
      <div class="col-md-4">
        <a href="#">
        <!--Panel-->
          <div class="card card-body bg-secondary">
              <h4 class="card-title white-text">Slastičar za sezonski rad</h4>
              <h5 class="text-primary">Gastro</h5>
              <p class="card-text text-white mb-1"><i class="fa fa-institution mr-2" aria-hidden="true"></i>Slastičarna "U prolazu"</p>
              <p class="card-text text-white mb-1"><i class="fa fa-calendar mr-2" aria-hidden="true"></i>01.12.2017</p>
              <p class="card-text text-white"><i class="fa fa-location-arrow mr-2" aria-hidden="true"></i>Samobor</p>
              <p class="card-text text-white">Slastičar za sezonski rad preko ljeta tražimo. Važna je volja i radnik željan zarade</p>
          </div>
        <!--/.Panel-->
        </a>
      </div>

      <div class="col-md-4">
        <a href="#">
        <!--Panel-->
          <div class="card card-body bg-secondary">
              <h4 class="card-title white-text">Slastičar za sezonski rad</h4>
              <h5 class="text-primary">Gastro</h5>
              <p class="card-text text-white mb-1"><i class="fa fa-institution mr-2" aria-hidden="true"></i>Slastičarna "U prolazu"</p>
              <p class="card-text text-white mb-1"><i class="fa fa-calendar mr-2" aria-hidden="true"></i>01.12.2017</p>
              <p class="card-text text-white"><i class="fa fa-location-arrow mr-2" aria-hidden="true"></i>Samobor</p>
              <p class="card-text text-white">Slastičar za sezonski rad preko ljeta tražimo. Važna je volja i radnik željan zarade</p>
          </div>
        <!--/.Panel-->
        </a>
      </div>


      <div class="col-md-4">
        <a href="#">
        <!--Panel-->
          <div class="card card-body bg-secondary">
              <h4 class="card-title white-text">Slastičar za sezonski rad</h4>
              <h5 class="text-primary">Gastro</h5>
              <p class="card-text text-white mb-1"><i class="fa fa-institution mr-2" aria-hidden="true"></i>Slastičarna "U prolazu"</p>
              <p class="card-text text-white mb-1"><i class="fa fa-calendar mr-2" aria-hidden="true"></i>01.12.2017</p>
              <p class="card-text text-white"><i class="fa fa-location-arrow mr-2" aria-hidden="true"></i>Samobor</p>
              <p class="card-text text-white">Slastičar za sezonski rad preko ljeta tražimo. Važna je volja i radnik željan zarade</p>
          </div>
        <!--/.Panel-->
        </a>
      </div>

    </div>

    <div class="row mt-3">
      <div class="col-md-4">
        <a href="#">
        <!--Panel-->
          <div class="card card-body bg-secondary">
              <h4 class="card-title white-text">Slastičar za sezonski rad</h4>
              <h5 class="text-primary">Gastro</h5>
              <p class="card-text text-white mb-1"><i class="fa fa-institution mr-2" aria-hidden="true"></i>Slastičarna "U prolazu"</p>
              <p class="card-text text-white mb-1"><i class="fa fa-calendar mr-2" aria-hidden="true"></i>01.12.2017</p>
              <p class="card-text text-white"><i class="fa fa-location-arrow mr-2" aria-hidden="true"></i>Samobor</p>
              <p class="card-text text-white">Slastičar za sezonski rad preko ljeta tražimo. Važna je volja i radnik željan zarade</p>
          </div>
        <!--/.Panel-->
        </a>
      </div>

      <div class="col-md-4">
        <a href="#">
        <!--Panel-->
          <div class="card card-body bg-secondary">
              <h4 class="card-title white-text">Slastičar za sezonski rad</h4>
              <h5 class="text-primary">Gastro</h5>
              <p class="card-text text-white mb-1"><i class="fa fa-institution mr-2" aria-hidden="true"></i>Slastičarna "U prolazu"</p>
              <p class="card-text text-white mb-1"><i class="fa fa-calendar mr-2" aria-hidden="true"></i>01.12.2017</p>
              <p class="card-text text-white"><i class="fa fa-location-arrow mr-2" aria-hidden="true"></i>Samobor</p>
              <p class="card-text text-white">Slastičar za sezonski rad preko ljeta tražimo. Važna je volja i radnik željan zarade</p>
          </div>
        <!--/.Panel-->
        </a>
      </div>


      <div class="col-md-4">
        <a href="#">
        <!--Panel-->
          <div class="card card-body bg-secondary">
              <h4 class="card-title white-text">Slastičar za sezonski rad</h4>
              <h5 class="text-primary">Gastro</h5>
              <p class="card-text text-white mb-1"><i class="fa fa-institution mr-2" aria-hidden="true"></i>Slastičarna "U prolazu"</p>
              <p class="card-text text-white mb-1"><i class="fa fa-calendar mr-2" aria-hidden="true"></i>01.12.2017</p>
              <p class="card-text text-white"><i class="fa fa-location-arrow mr-2" aria-hidden="true"></i>Samobor</p>
              <p class="card-text text-white">Slastičar za sezonski rad preko ljeta tražimo. Važna je volja i radnik željan zarade</p>
          </div>
        <!--/.Panel-->
        </a>
      </div>

    </div>


    <div class="row mt-3">
      <div class="col-md-4">
        <a href="#">
        <!--Panel-->
          <div class="card card-body bg-secondary">
              <h4 class="card-title white-text">Slastičar za sezonski rad</h4>
              <h5 class="text-primary">Gastro</h5>
              <p class="card-text text-white mb-1"><i class="fa fa-institution mr-2" aria-hidden="true"></i>Slastičarna "U prolazu"</p>
              <p class="card-text text-white mb-1"><i class="fa fa-calendar mr-2" aria-hidden="true"></i>01.12.2017</p>
              <p class="card-text text-white"><i class="fa fa-location-arrow mr-2" aria-hidden="true"></i>Samobor</p>
              <p class="card-text text-white">Slastičar za sezonski rad preko ljeta tražimo. Važna je volja i radnik željan zarade</p>
          </div>
        <!--/.Panel-->
        </a>
      </div>

      <div class="col-md-4">
        <a href="#">
        <!--Panel-->
          <div class="card card-body bg-secondary">
              <h4 class="card-title white-text">Slastičar za sezonski rad</h4>
              <h5 class="text-primary">Gastro</h5>
              <p class="card-text text-white mb-1"><i class="fa fa-institution mr-2" aria-hidden="true"></i>Slastičarna "U prolazu"</p>
              <p class="card-text text-white mb-1"><i class="fa fa-calendar mr-2" aria-hidden="true"></i>01.12.2017</p>
              <p class="card-text text-white"><i class="fa fa-location-arrow mr-2" aria-hidden="true"></i>Samobor</p>
              <p class="card-text text-white">Slastičar za sezonski rad preko ljeta tražimo. Važna je volja i radnik željan zarade</p>
          </div>
        <!--/.Panel-->
        </a>
      </div>


      <div class="col-md-4">
        <a href="#">
        <!--Panel-->
          <div class="card card-body bg-secondary">
              <h4 class="card-title white-text">Slastičar za sezonski rad</h4>
              <h5 class="text-primary">Gastro</h5>
              <p class="card-text text-white mb-1"><i class="fa fa-institution mr-2" aria-hidden="true"></i>Slastičarna "U prolazu"</p>
              <p class="card-text text-white mb-1"><i class="fa fa-calendar mr-2" aria-hidden="true"></i>01.12.2017</p>
              <p class="card-text text-white"><i class="fa fa-location-arrow mr-2" aria-hidden="true"></i>Samobor</p>
              <p class="card-text text-white">Slastičar za sezonski rad preko ljeta tražimo. Važna je volja i radnik željan zarade</p>
          </div>
        <!--/.Panel-->
        </a>
      </div>

    </div>

    <nav class="py-5 text-center d-flex justify-content-center">
      <ul class="pagination pg-blue">
        <li class="page-item disabled">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
        <li class="page-item active">
          <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
        </li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">4</a></li>
        <li class="page-item"><a class="page-link" href="#">5</a></li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
      </ul>
  </nav>

  </div>
</section>



@endsection
