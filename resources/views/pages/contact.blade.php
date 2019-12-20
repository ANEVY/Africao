@extends('layouts.app')
@section('content')
{{-- carousel top --}}
<section class="home-carousel">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="main-text ">
                    <h1 class="main-title text-center">CONTACT US</h1>

                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>

</section>
{{-- contact us --}}
<section class="home-contactus">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <p class="text-center">Let Us Hear From You</p>
                <br>
            </div>
            @include('inc.contact')

        </div>
    </div>

</section>
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

@endsection
