@extends('layouts.app')
@section('content')
{{-- carousel top --}}
<section class="home-carousel">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="main-text ">
                    <h1 class="main-title text-center">ABOUT AFRICAO</h1>
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">

                            <h5 class="bottom-title text-center">
                                PROVIDING INFORMATION FOR QUALITY & QUANTITY PRODUCTION
                            </h5>
                            {{-- <img class="d-block w-100" src="..." alt="First slide"> --}}
                          </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>

</section>
<section class="why-africao">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Why</h1>
                <p>Irure irure anim veniam occaecat est consectetur ipsum excepteur quis. Lorem voluptate nostrud velit sit exercitation exercitation do nostrud qui commodo in ipsum velit esse. Sint sit ex amet officia culpa reprehenderit anim sit nulla.

                    Magna nulla irure cillum duis ea laboris ullamco anim esse sit est reprehenderit ipsum quis. Pariatur labore nisi voluptate veniam consequat. Aliqua dolore cupidatat esse labore laborum duis cillum id duis incididunt est minim aliquip. Nostrud nostrud velit aute nostrud.

                    Eu officia eiusmod ex exercitation. Amet minim pariatur quis laborum ad. Adipisicing quis esse fugiat ipsum do ad labore excepteur deserunt labore. Culpa labore consectetur ipsum nostrud aliqua. Aliquip aliqua consectetur cupidatat qui quis minim exercitation velit Lorem aute. Cillum sint ut ut duis magna laboris laboris. Aliquip sunt Lorem cillum minim non consequat labore sint irure magna sit aute fugiat.
                </p>
            </div>
        </div>
    </div>

</section>
{{-- mission and vison --}}
<section class="aboot-mission-vision" style="background:#ffffff">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="text-center">Mission</h1>
                <p>
                    Irure irure anim veniam occaecat est consectetur ipsum excepteur quis. Lorem voluptate nostrud velit sit exercitation exercitation do nostrud qui commodo in ipsum velit esse. Sint sit ex amet officia culpa reprehenderit anim sit nulla.


                </p>
            </div>
            <div class="col-md-6">
                <h1 class="text-center">Vision</h1>
                <p>
                    Irure irure anim veniam occaecat est consectetur ipsum excepteur quis. Lorem voluptate nostrud velit sit exercitation exercitation do nostrud qui commodo in ipsum velit esse. Sint sit ex amet officia culpa reprehenderit anim sit nulla.


                </p>
            </div>
        </div>
    </div>

</section>
{{--africao invest  --}}
@include('inc.invest')
{{-- our partnesrs --}}
<section class="why-africao" style="background:white">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Our Partners</h1>
            </div>
            <div class="col-md-3 mb-3">
                <img class="img" src="{{asset('media/images/c-3.png')}}" alt="investors and investment services for african cocoa production" style="height:15vh">


            </div>
            <div class="col-md-3 mb-3">
                <img class="img" src="{{asset('media/images/c-3.png')}}" alt="investors and investment services for african cocoa production" style="height:15vh">


            </div>
            <div class="col-md-3 mb-3">
                <img class="img" src="{{asset('media/images/c-3.png')}}" alt="investors and investment services for african cocoa production" style="height:15vh">


            </div>
            <div class="col-md-3 mb-3">
                <img class="img" src="{{asset('media/images/c-3.png')}}" alt="investors and investment services for african cocoa production" style="height:15vh">


            </div>
            <div class="col-md-3 mb-3">
                <img class="img" src="{{asset('media/images/c-3.png')}}" alt="investors and investment services for african cocoa production" style="height:15vh">


            </div>
            <div class="col-md-3 mb-3">
                <img class="img" src="{{asset('media/images/c-3.png')}}" alt="investors and investment services for african cocoa production" style="height:15vh">


            </div>
            <div class="col-md-3 mb-3">
                <img class="img" src="{{asset('media/images/c-3.png')}}" alt="investors and investment services for african cocoa production" style="height:15vh">


            </div>
            <div class="col-md-3 mb-3">
                <img class="img" src="{{asset('media/images/c-3.png')}}" alt="investors and investment services for african cocoa production" style="height:15vh">

            </div>
            <div class="col-md-12 mt-5">
                <button class="btn button-2 mx-auto d-block">Become A Partner</button>
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
