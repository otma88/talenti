@extends('layouts.app')

@section('content')

<section class="bg-primary py-3">
  <div class="container">
    <div class="row">
      <div class="col">
        <h2 class="pt-2 text-white">Novosti</h2>
      </div>
    </div>
  </div>
</section>

<section id="search-part" class="bg-primary">
  <div class="container">
    <form class="mb-0">
      <div class="row">
        <div class="col-md-3">

          <div class="md-form form-sm">
            <i class="fa fa-search prefix white-text"></i>
            <input type="text" id="form1" class="form-control white-text">
            <label for="form1" class="white-text">Pretraži novosti</label>
          </div>

        </div>

        <div class="col-md-3">
          <select class="mdb-select">
            <option value="" disabled selected>Izaberi kategoriju</option>
            <option value="1">Option 1</option>
            <option value="2">Option 2</option>
            <option value="3">Option 3</option>
          </select>
        </div>


        <div class="col-md-3">
          <button class="btn btn-default float-center"><i class="fa fa-magic mr-1"></i>Pretraži</button>

        </div>

      </div>
    </form>

</div>
</section>



<section class="section pb-3 text-center text-lg-left bg-primary">
  <div class="container">

    <!--Grid row-->
    <div class="row py-4">

        <!--Grid column-->
        <div class="col-lg-5 ml-auto col-xl-4 pb-3">
            <!--Featured image-->
            <div class="view overlay hm-white-slight z-depth-1-half">
                <img src="https://mdbootstrap.com/img/Photos/Others/img%20(27).jpg" alt="Sample image for first version of blog listing" class="img-fluid">
                <a>
                    <div class="mask"></div>
                </a>
            </div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-7 mr-auto col-xl-6 text-white">
            <!--Excerpt-->
            <a href="" class="green-text"><h6 class="font-bold pb-1"><i class="fa fa-cutlery"></i> Food</h6></a>
            <h4 class="mb-4"><strong>This is title of the news.</strong></h4>
            <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus et aut officiis debitis aut rerum.</p>
            <p>by <a><strong>Carine Fox</strong></a>, 19/08/2016</p>
            <a class="btn btn-success mb-3">Read more</a>
        </div>
        <!--Grid column-->

    </div>
    <!--Grid row-->

    <hr class="hr-width mb-5 mt-5 pb-3">

    <!--Grid row-->
    <div class="row">

        <!--Grid column-->
        <div class="col-lg-7 ml-auto col-xl-6 pb-3 text-white">
            <!--Excerpt-->
            <a href="" class="pink-text"><h6 class="font-bold pb-1"><i class="fa fa-image"></i> Lifestyle</h6></a>
            <h4 class="mb-4"><strong>This is title of the news.</strong></h4>
            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident et dolorum fuga.</p>
            <p>by <a><strong>Carine Fox</strong></a>, 14/08/2016</p>
            <a class="btn btn-pink mb-3">Read more</a>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-5 mr-auto col-xl-4 mb-5">
            <!--Featured image-->
            <div class="view overlay hm-white-slight z-depth-1-half">
                <img src="https://mdbootstrap.com/img/Photos/Others/img%20(34).jpg" alt="Second image in the first version of blog listing" class="img-fluid">
                <a>
                    <div class="mask"></div>
                </a>
            </div>
        </div>
        <!--Grid column-->

    </div>
    <!--Grid row-->

    <hr class="hr-width mb-5 mt-4 pb-3">

    <!--Grid row-->
    <div class="row pb-5">

        <!--Grid column-->
        <div class="col-lg-5 ml-auto col-xl-4 pb-3">
            <!--Featured image-->
            <div class="view overlay hm-white-slight z-depth-1-half">
                <img src="https://mdbootstrap.com/img/Photos/Others/img (28).jpg" alt="Thrid image in the blog listing." class="img-fluid">
                <a>
                    <div class="mask"></div>
                </a>
            </div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-7 mr-auto col-xl-6 text-white">
            <!--Excerpt-->
            <a href="" class="indigo-text"><h6 class="font-bold pb-1"><i class="fa fa-suitcase"></i> Travels</h6></a>
           <h4 class="mb-4"><strong>This is title of the news.</strong></h4>
            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro qui dolorem ipsum quia sit amet, consectetur.</p>
            <p>by <a><strong>Carine Fox</strong></a>, 11/08/2016</p>
            <a class="btn btn-indigo mb-3">Read more</a>
        </div>
        <!--Grid column-->

    </div>
    <!--Grid row-->

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
<!--Section: Blog v.1-->

@endsection
