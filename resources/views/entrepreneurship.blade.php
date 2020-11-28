@extends('layouts.index')

@section('content')




<!--Carousel Wrapper-->
<div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">

    <!--Indicators-->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-1z" data-slide-to="1"></li>
        <li data-target="#carousel-example-1z" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->

    <!--Slides-->
    <div class="carousel-inner" role="listbox">

        <!--First slide-->
        <div class="carousel-item active">
            <div class="view"
                style="background-image: url('test/img/School of Entrepreneurship-01.png'); background-repeat: no-repeat; background-size: cover;">

                <!-- Mask & flexbox options-->
                <div class="mask rgba-black-light d-flex justify-content-center align-items-center">



                </div>
                <!-- Mask & flexbox options-->

            </div>
        </div>
        <!--/First slide-->

        <!--Second slide-->
        <div class="carousel-item">
            <div class="view"
                style="background-image: url('test/img/School of Entrepreneurship-01.png'); background-repeat: no-repeat; background-size: cover;">

                <!-- Mask & flexbox options-->
                <div class="mask rgba-black-light d-flex justify-content-center align-items-center">
                </div>
                <!-- Mask & flexbox options-->

            </div>
        </div>
        <!--/Second slide-->

        <!--Third slide-->
        <div class="carousel-item">
            <div class="view"
                style="background-image: url('test/img/School of Entrepreneurship-01.png'); background-repeat: no-repeat; background-size: cover;">

                <!-- Mask & flexbox options-->
                <div class="mask rgba-black-light d-flex justify-content-center align-items-center">
                </div>
                <!-- Mask & flexbox options-->

            </div>
        </div>
        <!--/Third slide-->

    </div>
    <!--/.Slides-->

    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->

</div>
<!--/.Carousel Wrapper-->





<!--Carousel Wrapper-->
<div class="wow fadeIn" style="visibility: visible; animation-name: fadeIn;   color: rgb(43, 108, 163);">
    <!--Section heading-->
    <h2 class="h1 text-center mb-5" style="margin-top: 80px;">Welcome to CORE School Of Entrepreneurship</h2>
    <!--Section description-->
    <p class="text-center">The motivation behind the CORE School of Entrepreneurship came from the “Engagement”
        phase-out of three phases - Explore, Excite and Engage of Professional Fellows Program (PFP). It was
        observed, hundreds of amazing people from around the globe participate in the program each year thus
        engaging these people after going back home is worthwhile. Bringing in more than 200 Professional
        Fellows from 45+ nations from five different continents every year, a platform can connect these young
        leaders and create sustainable opportunities and responsibilities in the area of entrepreneurship and
        leadership development, women empowerment, sustainable environmental management and supporting global
        startups.
    </p>

    <h2 class="h1 text-center mb-5" style="margin-top: 68px;">Community</h2>
    <p class="text-center"> Community is the key power of Entrepreneurship. CORE Global is connected with International
        Academic Institutes to professors or ideas to grow and for forward-thinkers to meet through dynamic discussions.
        Join our international community to grow your business idea faster to business. You can also find your potential
        team member through the CORE Community. </p>

</div>



@endsection