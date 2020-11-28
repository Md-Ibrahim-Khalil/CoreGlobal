@extends('layouts.index')

@section('content')


<div class="wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
    <!--Section heading-->
    <h2 class="h1 text-center mb-5" style="margin-top: 80px;">CORE Global Courses</h2>
    <!--Section description-->
    <p class="text-center">
        CORE Idea to PrototypeSchool of Entrepreneurship will introduce you to the top-class instructors who will help
        to grow your knowledge in the right direction. Technology and entrepreneurship are driving the next world
        economic wheel. We offer you the next level of knowledge to become the next Robinhood to Elon Musk where you
        will be the expert in Leadership and Foundation Setting, Market Strategy, Financial and Resource Capacity,
        Communications & Networking, and Advocacy and many more.

    </p>

</div>



<!--Section: Cards-->
<section class="text-center">

    <!--Grid row-->
    <div class="row mb-4 wow fadeIn">

        <!--Grid column-->
        <div class="col-lg-4 col-md-12 mb-4">

            <!--Card-->
            <div class="card">

                <!--Card image-->
                <div class="view overlay">
                    <div class="embed-responsive-16by9 rounded-top">
                        <img src="test/img/Courses-01.png" class="img-fluid aos-init aos-animate" alt=""
                            data-aos="zoom-in" data-aos-delay="200">
                    </div>
                </div>

                <!--Card content-->
                <div class="card-body">
                    <p class="card-text">
                        <strong>Law & Strategy</strong>
                    </p>
                </div>

            </div>
            <!--/.Card-->

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4">

            <!--Card-->
            <div class="card">

                <!--Card image-->
                <div class="view overlay">
                    <div class="embed-responsive-16by9 rounded-top">
                        <img src="test/img/Courses-02.png" class="img-fluid aos-init aos-animate" alt=""
                            data-aos="zoom-in" data-aos-delay="200">
                    </div>
                </div>

                <!--Card content-->
                <div class="card-body">
                    <p class="card-text">
                        <strong>Marketing and Planning</strong>
                    </p>
                </div>

            </div>
            <!--/.Card-->

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4">

            <!--Card-->
            <div class="card">

                <!--Card image-->
                <div class="view overlay">
                    <div class="embed-responsive-16by9 rounded-top">
                        <img src="test/img/Courses-03.png" class="img-fluid aos-init aos-animate" alt=""
                            data-aos="zoom-in" data-aos-delay="200">
                    </div>
                </div>

                <!--Card content-->
                <div class="card-body">
                    <p class="card-text">
                        <strong>Finance & Resources Management </strong>
                    </p>
                </div>

            </div>
            <!--/.Card-->

        </div>
        <!--Grid column-->

    </div>
    <!--Grid row-->

    <!--Grid row-->
    <div class="row mb-4 wow fadeIn">

        <!--Grid column-->
        <div class="col-lg-4 col-md-12 mb-4">

            <!--Card-->
            <div class="card">

                <!--Card image-->
                <div class="view overlay">
                    <div class="embed-responsive-16by9 rounded-top">
                        <img src="test/img/Courses-04.png" class="img-fluid aos-init aos-animate" alt=""
                            data-aos="zoom-in" data-aos-delay="200">
                    </div>
                </div>

                <!--Card content-->
                <div class="card-body">
                    <p class="card-text">
                        <strong>Leadership </strong>
                    </p>
                </div>

            </div>
            <!--/.Card-->

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4">

            <!--Card-->
            <div class="card">

                <!--Card image-->
                <div class="view overlay">
                    <div class="embed-responsive-16by9 rounded-top">
                        <img src="test/img/Courses-05.png" class="img-fluid aos-init aos-animate" alt=""
                            data-aos="zoom-in" data-aos-delay="200">
                    </div>
                </div>

                <!--Card content-->
                <div class="card-body">
                    <p class="card-text">
                        <strong>Leadership</strong>
                    </p>
                </div>

            </div>
            <!--/.Card-->

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4">

            <!--Card-->
            <div class="card">

                <!--Card image-->
                <div class="view overlay">
                    <div class="embed-responsive-16by9 rounded-top">
                        <img src="test/img/Courses-06.png" class="img-fluid aos-init aos-animate" alt=""
                            data-aos="zoom-in" data-aos-delay="200">
                    </div>
                </div>

                <!--Card content-->
                <div class="card-body">
                    <p class="card-text">
                        <strong>Operations</strong>
                    </p>
                </div>

            </div>
            <!--/.Card-->

        </div>
        <!--Grid column-->

    </div>
    <!--Grid row-->

    <!--Pagination-->
    <nav class="d-flex justify-content-center wow fadeIn">
        <ul class="pagination pg-blue">

            <!--Arrow left-->
            <li class="page-item disabled">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                </a>
            </li>

            <li class="page-item active">
                <a class="page-link" href="#">1
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">3</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">4</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">5</a>
            </li>

            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                </a>
            </li>
        </ul>
    </nav>
    <!--Pagination-->

</section>
<!--Section: Cards-->



@endsection
