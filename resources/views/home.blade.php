@extends('layouts.app')

@section('title', 'Home')

@section('content')

<br>
<br>
  <br>


<div id="carouselExampleControls"  class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner" >
        <div class="carousel-item active">
            <img src="https://www.annahar.com/Library/Images/Uploaded%20Images/2021/06/07/karen/nurses-patients-care-procedures.jpg" style="height:500px;width:100%;" class="d-block w-100" alt="...">
          </div>
      <div class="carousel-item " >
        <img src="https://i0.wp.com/www.echoroukonline.com/wp-content/uploads/2021/08/%D8%A7%D9%84%D8%AE%D8%AF%D9%8A%D8%B1-%D8%A7%D9%84%D9%85%D9%88%D8%B6%D8%B9%D9%8A.png?resize=630,354.375" style="height:500px;width:100%;" class="d-block w-100" alt="...">

      </div>
      <div class="carousel-item">
        <img src="https://thumbs.dreamstime.com/b/medicine-healthcare-concept-doctor-stethoscope-clinic-close-up-global-125171698.jpg" style="height:500px;width:100%;" class="d-block w-100" alt="...">

      </div>

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <br>
  <br>
  <br id="doc">
  <br>
  <br >
  <br>
  <h1 Align="center" class="display-5" >Our Doctors</h1>
  <br>
  <br>
  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row " align="center">
      <div class="col-lg-4">
        <img class="bd-placeholder-img rounded-circle" src="https://thumbs.dreamstime.com/b/smiling-doctor-253655.jpg" width="140" height="140"  preserveAspectRatio="xMidYMid slice" focusable="false"/>
        <br>
        <br>
        <h2 class="fw-normal">DR One</h2>
        <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
        <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img class="bd-placeholder-img rounded-circle" src="https://img.freepik.com/free-photo/woman-doctor-wearing-lab-coat-with-stethoscope-isolated_1303-29791.jpg?w=2000" width="140" height="140"  preserveAspectRatio="xMidYMid slice" focusable="false"/>
        <br>
        <br>
        <h2 class="fw-normal">DR Two</h2>
        <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
        <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img class="bd-placeholder-img rounded-circle" src="https://img.freepik.com/premium-photo/doctor-clinic-talks-phone-successful-man-smiles-clinic-employee-reports-good-news-patient_321831-7657.jpg" width="140" height="140"  preserveAspectRatio="xMidYMid slice" focusable="false"/>
        <br>
        <br>
        <h2 class="fw-normal">DR Tree</h2>
        <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
        <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->
    <br>
    <br id="about">
    <br >
    <br>
    <h1 Align="center" class="display-5" >Our Departement</h1>
    <br>
    <br>
    <hr class="featurette-divider">
    <br>
    <br>
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">CLINIQUE INTERNATIONAL CASABLANCA. <span class="text-muted">International Clinic est un établissement de soins privé situé au cœur de Casablanca..</span></h2>
        <p class="lead">Le patient au centre de la conception

            Inaugurée en mai 2015, International Clinic accueille les patients dans un environnement répondant aux exigences de fonctionnalité, d’organisation hospitalière et de modernité.

            Elle offre, en effet, des soins spécialisés et personnalisés au sein d’un cadre hôtelier de grande qualité et de pôles d’excellence accessibles à tous.

            International Clinic est engagée dans une démarche qualité en vue d’une certification ISO 9001, version 2015. </p>
      </div>
      <div class="col-md-5">
        <img src="https://images.pexels.com/photos/247786/pexels-photo-247786.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="650" preserveAspectRatio="xMidYMid slice" focusable="false"/>

      </div>
    </div>
    <br id="serv">
    <br>
    <br >
    <br>
    <h1 Align="center" class="display-5" >Our Services</h1>
    <br>
    <br>
    <hr class="featurette-divider">
    <br>
    <br>
    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading fw-normal lh-1">CLINIQUE INTERNATIONAL CASABLANCA. <span class="text-muted">See for yourself.</span></h2>
        <br>
        <br>
        <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="https://images.pexels.com/photos/4483327/pexels-photo-4483327.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="650" preserveAspectRatio="xMidYMid slice" focusable="false"/>

      </div>
    </div>
    <br>
    <br>
    <hr class="featurette-divider">
    <br>
    <br>
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
        <br>
        <br>
        <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
      </div>
      <div class="col-md-5">
        <img src="https://images.pexels.com/photos/127873/pexels-photo-127873.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="650" preserveAspectRatio="xMidYMid slice" focusable="false"/>

      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div>
  <br>
  <br>
  <br id="cont">
  <div class="container">
    <div class="modal modal-tour position-static d-block bg-secondary py-5" tabindex="-1" role="dialog" id="modalTour">
        <div class="modal-dialog"  role="document">
          <div class="modal-content rounded-4 shadow">
            <div class="modal-body p-5">
              <h2 class="fw-bold mb-0" id="cont">Contact Us</h2>

              <ul class="d-grid gap-4 my-5 list-unstyled">
                <li class="d-flex gap-4">
                  <img src="https://cdn-icons-png.flaticon.com/128/732/732200.png" class="bi text-muted flex-shrink-0" width="48" height="48" />
                  <div>
                    <h5 class="mb-0">Email</h5>
                    Ayoub_lafar@hotmail.com
                                  </div>
                </li>
                <li class="d-flex gap-4">
                    <img src="https://cdn-icons-png.flaticon.com/512/3616/3616215.png" class="bi text-muted flex-shrink-0" width="48" height="48" />

                  <div>
                    <h5 class="mb-0">Téléphone</h5>
                    +212 6 23 79 35 49
                  </div>
                </li>
                <li class="d-flex gap-4">
                    <img src="https://cdn-icons-png.flaticon.com/512/3180/3180180.png" class="bi text-muted flex-shrink-0" width="48" height="48" />

                  <div>
                    <h5 class="mb-0">Adresse</h5>
                    Boulevard Hassan 2, Khouribga, Morocco.
                  </div>
                </li>
              </ul>
              <button type="button" class="btn btn-lg btn-primary mt-5 w-100" data-bs-dismiss="modal">Great, thanks!</button>
            </div>
          </div>
        </div>
      </div>
  </div>
  <br>
  <br>
  <br>
  <footer class="container">
    <p class="float-end"><a href="#">Back to top</a></p>
    <p>Created By Lafar Ayoub &copy; 2022 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>
@endsection
