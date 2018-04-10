@extends('layouts.app')

@section('content')

<section class="bg-primary py-3">
  <div class="container">
    <div class="row">
      <div class="col">
        <h2 class="pt-2 text-white">Talenti</h2>
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
        <button type="button" class="btn btn-primary ml-3">Svi talenti</button>
        </div>

      <form>
        <div class="row mt-3">
          <div class="col-md-3">

            <div class="md-form form-sm">
              <i class="fa fa-search prefix white-text"></i>
              <input type="text" id="form1" class="form-control white-text">
              <label for="form1" class="white-text">Pretraži talente</label>
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



<!--ISPIS TALENTA-->

<div class="row">

    <!--Grid column-->
    <div class="col-md-12 mb-2">

        <!--Card group-->
        <div class="card-group">

            <!--Card-->
            <div class="card card-personal mr-1">

                <!--Card image-->
                <div class="view overlay hm-white-slight hm-zoom">
                    <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(26).jpg" alt="Card image cap">
                    <a href="#!">
                        <span class="badge-position badge badge-pill light-blue">TOP</span>
                        <div class="mask"></div>
                    </a>
                </div>
                <!--Card image-->

                <!--Card content-->
                <div class="card-body bg-secondary">
                    <!--Title-->
                    <a><h4 class="card-title text-white">Ana Horvat</h4></a>
                    <a class="card-meta text-white">Modeling</a>
                </div>
                <!--Card content-->

            </div>
            <!--Card-->

            <!--Card-->
            <div class="card card-personal mr-1">

                <!--Card image-->
                <div class="view overlay hm-white-slight hm-zoom">
                    <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(27).jpg" alt="Card image cap">
                    <a href="#!">
                      <span class="badge-position badge badge-pill light-blue">TOP</span>
                        <div class="mask"></div>
                    </a>
                </div>
                <!--Card image-->

                <!--Card content-->
                <div class="card-body bg-secondary">
                    <!--Title-->
                    <a><h4 class="card-title text-white">Marko Petrović</h4></a>
                    <a class="card-meta text-white">Sport</a>
                </div>
                <!--Card content-->

            </div>
            <!--Card-->

            <!--Card-->
            <div class="card card-personal mr-1">

                <!--Card image-->
                <div class="view overlay hm-white-slight hm-zoom">
                    <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(28).jpg" alt="Card image cap">
                    <a href="#!">
                      <span class="badge-position badge badge-pill light-blue">TOP</span>
                        <div class="mask"></div>
                    </a>
                </div>
                <!--Card image-->

                <!--Card content-->
                <div class="card-body bg-secondary">
                    <!--Title-->
                    <a><h4 class="card-title text-white">Sara Belančić</h4></a>
                    <a class="card-meta text-white">Ljepota</a>
                </div>
                <!--Card content-->

            </div>
            <!--Card-->


            <!--Card-->
            <div class="card card-personal mr-1">

                <!--Card image-->
                <div class="view overlay hm-white-slight hm-zoom">
                    <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(26).jpg" alt="Card image cap">
                    <a href="#!">
                      <span class="badge-position badge badge-pill light-blue">TOP</span>
                        <div class="mask"></div>
                    </a>
                </div>
                <!--Card image-->

                <!--Card content-->
                <div class="card-body bg-secondary">
                    <!--Title-->
                    <a><h4 class="card-title text-white">Ivana Stepančić</h4></a>
                    <a class="card-meta text-white">Gastro</a>
                </div>
                <!--Card content-->

            </div>
            <!--Card-->

            <!--Card-->
            <div class="card card-personal">

                <!--Card image-->
                <div class="view overlay hm-white-slight hm-zoom">
                    <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(26).jpg" alt="Card image cap">
                    <a href="#!">
                      <span class="badge-position badge badge-pill light-blue">TOP</span>
                        <div class="mask"></div>
                    </a>
                </div>
                <!--Card image-->

                <!--Card content-->
                <div class="card-body bg-secondary">
                    <!--Title-->
                    <a><h4 class="card-title text-white">Mila Modrić</h4></a>
                    <a class="card-meta text-white">Neobični talenti</a>
                </div>
                <!--Card content-->

            </div>
            <!--Card-->

        </div>
        <!--Card group-->

    </div>
    <!--Grid column-->


    <!--Grid column-->
    <div class="col-md-12">

        <!--Card group-->
        <div class="card-group">

            <!--Card-->
            <div class="card card-personal mb-r mr-1">

                <!--Card image-->
                <div class="view overlay hm-white-slight hm-zoom">
                    <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(26).jpg" alt="Card image cap">
                    <a href="#!">
                      <span class="badge-position badge badge-pill light-blue">TOP</span>
                        <div class="mask"></div>
                    </a>
                </div>
                <!--Card image-->

                <!--Card content-->
                <div class="card-body bg-secondary">
                    <!--Title-->
                    <a><h4 class="card-title text-white">Ana Horvat</h4></a>
                    <a class="card-meta text-white">Modeling</a>
                </div>
                <!--Card content-->

            </div>
            <!--Card-->

            <!--Card-->
            <div class="card card-personal mb-r mr-1">

                <!--Card image-->
                <div class="view overlay hm-white-slight hm-zoom">
                    <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(27).jpg" alt="Card image cap">
                    <a href="#!">
                      <span class="badge-position badge badge-pill light-blue">TOP</span>
                        <div class="mask"></div>
                    </a>
                </div>
                <!--Card image-->

                <!--Card content-->
                <div class="card-body bg-secondary">
                    <!--Title-->
                    <a><h4 class="card-title text-white">Marko Petrović</h4></a>
                    <a class="card-meta text-white">Sport</a>
                </div>
                <!--Card content-->

            </div>
            <!--Card-->

            <!--Card-->
            <div class="card card-personal mb-r mr-1">

                <!--Card image-->
                <div class="view overlay hm-white-slight hm-zoom">
                    <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(28).jpg" alt="Card image cap">
                    <a href="#!">
                      <span class="badge-position badge badge-pill light-blue">TOP</span>
                        <div class="mask"></div>
                    </a>
                </div>
                <!--Card image-->

                <!--Card content-->
                <div class="card-body bg-secondary">
                    <!--Title-->
                    <a><h4 class="card-title text-white">Sara Belančić</h4></a>
                    <a class="card-meta text-white">Ljepota</a>
                </div>
                <!--Card content-->

            </div>
            <!--Card-->


            <!--Card-->
            <div class="card card-personal mb-r mr-1">

                <!--Card image-->
                <div class="view overlay hm-white-slight hm-zoom">
                    <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(26).jpg" alt="Card image cap">
                    <a href="#!">
                      <span class="badge-position badge badge-pill light-blue">TOP</span>
                        <div class="mask"></div>
                    </a>
                </div>
                <!--Card image-->

                <!--Card content-->
                <div class="card-body bg-secondary">
                    <!--Title-->
                    <a><h4 class="card-title text-white">Ivana Stepančić</h4></a>
                    <a class="card-meta text-white">Gastro</a>
                </div>
                <!--Card content-->

            </div>
            <!--Card-->

            <!--Card-->
            <div class="card card-personal mb-r">

                <!--Card image-->
                <div class="view overlay hm-white-slight hm-zoom">
                    <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(26).jpg" alt="Card image cap">
                    <a href="#!">
                      <span class="badge-position badge badge-pill light-blue">TOP</span>
                        <div class="mask"></div>
                    </a>
                </div>
                <!--Card image-->

                <!--Card content-->
                <div class="card-body bg-secondary">
                    <!--Title-->
                    <a><h4 class="card-title text-white">Mila Modrić</h4></a>
                    <a class="card-meta text-white">Neobični talenti</a>
                </div>
                <!--Card content-->

            </div>
            <!--Card-->

        </div>
        <!--Card group-->

    </div>
    <!--Grid column-->


</div>

<!--PAGINATION-->


      <nav class="py-5 text-center d-flex justify-content-center">
        <ul class="pagination pg-blue">
            <li class="page-item disabled">
              <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
              </a>
            </li>
          <li class="#">
            <a class="page-link" href="#">1 <span class="sr-only"></span></a>
          </li>
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
