@extends('layouts.app')
@section('content')
{{-- carousel top --}}
    <section class="home-carousel">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="main-text ">
                        <h1 class="main-title text-center">AFRICAN COCAO PRODUCTION</h1>
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                              <div class="carousel-item active">

                                <h5 class="bottom-title text-center">
                                    PROVIDING INFORMATION FOR QUALITY & QUANTITY PRODUCTION
                                </h5>
                                {{-- <img class="d-block w-100" src="..." alt="First slide"> --}}
                              </div>
                              <div class="carousel-item">
                                {{-- <img class="d-block w-100" src="..." alt="Second slide"> --}}
                                <h5 class="bottom-title text-center">
                                    BRINGING FARMERS AND BUYERS CLOSER TOGETHER
                                </h5>
                              </div>
                              <div class="carousel-item">
                                {{-- <img class="d-block w-100" src="..." alt="Third slide"> --}}
                                <h5 class="bottom-title text-center">
                                    BRINGING IN INVESTORS TO HELP FARMERS INCREASE PRODUCTION
                                </h5>
                              </div>
                            </div>
                          </div>

                        <button class="btn mx-auto d-block button " >Take An Appointment</button>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>

    </section>
{{--signup breadcrumb  --}}
    <section class="signup-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h6>DON'T MISS OUT-SIGN UP & BE NOTIFIFIED ON EVERY UPDATES</h6>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    <form action="" method="post" class="form-inline" >

                            <input type="email" name="" id="" class="form-control form-input" placeholder="email address">
                            <input type="submit" value="Subscribe" class="form-control btn button">
                    </form>
                </div>
            </div>
        </div>
    </section>
{{--about africao  --}}
    <section class="home-about">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center"> ABOUT US</h1>
                </div>
                <div class="col-md-6 home-about-us-image">

                </div>
                <div class="col-md-6">
                    <p>
                        As the world’s fifth-largest cocoa producer, Cameroon should be reaping the benefits of the growing
                         global appetite for high-quality chocolate.

                        But farmers in Konye, in the country’s southwest, are struggling to support themselves as unusually
                        harsh weather takes a big bite out of their cocoa income.

                        In recent years, prolonged and persistent rains during harvesting season have made it difficult for cocoa
                         farmers in the area to properly dry their beans before taking them to market.

                        Grade A beans should have less than 5 percent moisture content, according to
                        the agriculture non-governmental organisation Citizens’ Association for the Defence of Collective Interests (ACDIC).
                        The higher the moisture content, the less a farmer can charge for his produce.
                    </p>
                    <button class="btn button">Read More</button>

                </div>


            </div>
        </div>
    </section>
{{-- services of africao --}}
    <section class="home-services">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center"> OUR SERVICES</h1>
                </div>
                <div class="col-md-6">
                    <h3 class="text-left">
                        {{-- <img class="d-block " src="{{asset('media/images/caro.png')}}" alt="First slide" style="height:10vh"> --}}
                        Connect Farmers & Buyers
                    </h3>
                    <img class="img" src="{{asset('media/images/caro-1.png')}}" alt="connecting farmers and buyers in the cocoa sector" style="height:10vh">

                    <p>

                        Grade A beans should have less than 5 percent moisture content, according to
                        the agriculture non-governmental organisation Citizens’ Association for the Defence of Collective Interests (ACDIC).
                        The higher the moisture content, the less a farmer can charge for his produce.
                    </p>
                </div>
                <div class="col-md-6">
                    <h3 class="text-left">Providing Updates</h3>
                    <img class="img" src="{{asset('media/images/caro.png')}}" alt="updates services for cocoa farmers " style="height:10vh">

                    <p>
                        Grade A beans should have less than 5 percent moisture content, according to
                        the agriculture non-governmental organisation Citizens’ Association for the Defence of Collective Interests (ACDIC).
                        The higher the moisture content, the less a farmer can charge for his produce.
                    </p>
                </div>
                <div class="col-md-6">
                    <h3 class="text-left">Investors & Investments</h3>
                    <img class="img" src="{{asset('media/images/c-3.png')}}" alt="investors and investment services for african cocoa production" style="height:10vh">

                    <p>
                        Grade A beans should have less than 5 percent moisture content, according to
                        the agriculture non-governmental organisation Citizens’ Association for the Defence of Collective Interests (ACDIC).
                        The higher the moisture content, the less a farmer can charge for his produce.
                    </p>
                </div>
                <div class="col-md-6">
                    <h3 class="text-left">Training & Consulting</h3>
                    <img class="img" src="{{asset('media/images/caro-2.ico')}}" alt="training and consulting sservices for cocoa farmers" style="height:10vh">

                    <p>

                        Grade A beans should have less than 5 percent moisture content, according to
                        the agriculture non-governmental organisation Citizens’ Association for the Defence of Collective Interests (ACDIC).
                        The higher the moisture content, the less a farmer can charge for his produce.
                    </p>
                </div>
            </div>
        </div>

    </section>

{{--africao aims  --}}
    <section class="home-africao-aim">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <h3 class="text-center"><strong>AFRICAO</strong> Aims To Make Available Information That Guarantess Quality And Quantity Production Of Cocoa Beans To Farmers,Buyers & The Community At Large</h3>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </section>
{{-- how we help farmers and buyers --}}
    <section class="home-buyers-farmers">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                <img src="{{asset('media/images/farmer.jpg')}}" alt="how we help cocoa farmers" class="img img-fluid mx-auto d-block">
                </div>
                <div class="col-md-6">
                    <div>
                        <h3>HOW WE HELP FARMERS</h3>
                        <p>

                            Grade A beans should have less than 5 percent moisture content, according to
                            the agriculture non-governmental organisation Citizens’ Association for the Defence of Collective Interests (ACDIC).
                            The higher the moisture content, the less a farmer can charge for his produce.
                        </p>
                        <ul>
                            <li>
                                Bring them closer to buyers
                            </li>
                            <li>
                                Provide them with vital info on cocoa production
                            </li>
                            <li>
                                Connect them with investors
                            </li>
                            <li>
                                provide them info on various different markets
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="col-md-6">
                    <div>
                        <h3>HOW WE HELP BUYERS</h3>
                        <p>

                            Grade A beans should have less than 5 percent moisture content, according to
                            the agriculture non-governmental organisation Citizens’ Association for the Defence of Collective Interests (ACDIC).
                            The higher the moisture content, the less a farmer can charge for his produce.
                        </p>
                        <ul>
                            <li>
                                Help them find a niche
                            </li>
                            <li>
                                Bring them closer to farmers
                            </li>
                            <li>
                                Update them when cocoa beans are ready
                            </li>
                        </ul>
                    </div>


                </div>
                <div class="col-md-6">
                    <img src="{{asset('media/images/buyers.jpg')}}" alt="how we help cocoa buyers" class="img img-fluid mx-auto d-block">

                </div>
            </div>
        </div>

    </section>
{{-- worries appointment --}}
{{-- <section class="home-appointment">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center mb-4">Are You Ready To Start A Conversation</h2>
                <button class="btn button mx-auto d-block">Take An Appointment</button>
            </div>

        </div>
    </div>

</section> --}}
{{--africao invest  --}}
@include('inc.invest')

{{-- latest blog post --}}
<section class="home-blog">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">LATEST BLOGS</h1>
            </div>

            <div class="col-md-4">
                <div class="card mb-3 shadow" >
                    <img src="{{asset('media/images/main-pic1.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title"><strong>Best chemicals to fight black pods</strong> </h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn button mb-5">Read More</a>
                    </div>
                  </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-3 shadow" >
                    <img src="{{asset('media/images/main-pic2.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title"><strong>How & when to plan cocoa</strong> </h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn button mb-5">Read More</a>
                    </div>
                  </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-3 shadow" >
                    <img src="{{asset('media/images/main-pic.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title"><strong>What causes sunripe</strong> </h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn button mb-5">Read More</a>
                    </div>
                  </div>
            </div>
            <div class="col-md-12 mt-5">
                <button class="button-2 btn mx-auto d-block">View All Blog Post</button>
            </div>

        </div>
    </div>

</section>
{{-- contact us --}}
    <section class="home-contactus">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">CONTACT US</h1>
                    <p class="text-center">Let Us Hear From You</p>
                    <br>
                </div>

                @include('inc.contact')

            </div>
        </div>

    </section>


@endsection
