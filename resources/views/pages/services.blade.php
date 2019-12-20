@extends('layouts.app')
@section('content')
{{-- title bar --}}
<section class="title-bar home-carousel">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="main-text ">
                    <h1 class="main-title text-center">SERVICES WE OFFER</h1>
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
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</section>
{{-- various services we offer --}}
<section class="services">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                  <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#menu3">Training & Consulting</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#menu2">Investors & Investments</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " data-toggle="tab" href="#home">Connect Farmers & Buyers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#menu1">Providing Updates</a>
                        </li>

                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div id="home" class="container tab-pane fade"><br>
                            <h3 class="mb-3">Connect Farmers & Buyers</h3>
                            <img class="img" src="{{asset('media/images/caro.png')}}" alt="updates services for cocoa farmers " style="height:10vh">

                            <p class="mb-5">
                                Laboris anim eiusmod esse consequat culpa dolor. Lorem dolor culpa ex irure aliquip nulla aliqua fugiat nisi voluptate cillum reprehenderit. Occaecat eu sunt aliquip Lorem nulla eu.

                                Amet cupidatat ea enim commodo. Fugiat culpa deserunt nostrud cupidatat adipisicing sunt tempor eu. Lorem velit aute do do occaecat adipisicing aliqua dolor ut excepteur exercitation proident fugiat. Consectetur reprehenderit et dolor enim minim enim aute in labore occaecat.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>

                        <div id="menu1" class="container tab-pane fade"><br>
                            <h3 class="mb-3">Providing Updates</h3>
                            <img class="img" src="{{asset('media/images/caro.png')}}" alt="updates services for cocoa farmers " style="height:10vh">

                            <p class="mb-5">
                                Deserunt officia laborum consequat pariatur aliquip deserunt ex nulla mollit deserunt nostrud eu commodo laborum. Reprehenderit ad quis ipsum culpa sit ex dolor eiusmod nostrud do id. Commodo nulla cillum nulla non nisi ipsum do commodo non ut dolor. Elit mollit aute velit voluptate consequat ea eiusmod aliquip. Labore laboris nisi laborum sunt sit ipsum incididunt. Elit excepteur laboris exercitation est labore est id excepteur aute cupidatat nisi ullamco. Mollit ad incididunt eu eu ex mollit ipsum esse reprehenderit cillum occaecat do.

                                 Dolor cillum qui nulla adipisicing adipisicing sint sit commodo aliquip Lorem officia. Irure nostrud irure nisi cupidatat amet velit aliqua do. Velit ea nostrud commodo in exercitation aute laboris dolor consectetur consequat. Cillum excepteur Lorem aliqua reprehenderit irure irure magna. Magna commodo elit officia elit.
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>

                        <div id="menu2" class="container tab-pane fade"><br>
                            <h3 class="mb-3">Investors & Investments</h3>
                            <img class="img" src="{{asset('media/images/caro.png')}}" alt="updates services for cocoa farmers " style="height:10vh">

                            <p class="mb-5">
                                Ad anim anim quis sint exercitation minim. Aliquip ea aliquip est fugiat exercitation. Aliqua ea anim enim reprehenderit in in aute aute labore aliqua minim commodo. Cupidatat mollit consectetur adipisicing ea do.

                                Aliquip dolore eu culpa cupidatat aute est excepteur officia dolor veniam irure deserunt nulla ullamco. Quis esse ullamco dolor qui minim labore adipisicing anim consequat. Lorem dolore laboris tempor aliquip anim. Et quis anim ea eu. Et nostrud labore commodo id. Duis do quis cupidatat sunt.
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
                            </p>
                            <button class="btn button">Invest Today</button>
                        </div>

                        <div id="menu3" class="container tab-pane active"><br>
                            <h3 class="mb-3">Investors & Investments</h3>
                            <img class="img" src="{{asset('media/images/caro.png')}}" alt="updates services for cocoa farmers " style="height:10vh">

                            <p class="mb-5">
                                Ad anim anim quis sint exercitation minim. Aliquip ea aliquip est fugiat exercitation. Aliqua ea anim enim reprehenderit in in aute aute labore aliqua minim commodo. Cupidatat mollit consectetur adipisicing ea do.

                                Aliquip dolore eu culpa cupidatat aute est excepteur officia dolor veniam irure deserunt nulla ullamco. Quis esse ullamco dolor qui minim labore adipisicing anim consequat. Lorem dolore laboris tempor aliquip anim. Et quis anim ea eu. Et nostrud labore commodo id. Duis do quis cupidatat sunt.
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
                            </p>
                            <button class="btn button">Take An Appointment</button>
                         </div>
                    </div>
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
