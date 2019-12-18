<footer class="footer">
    <div class="container-fluid navbar-fixed-bottom">
        <div class="row">
            <div class="col-md-4">
                <h3><strong>AFRICAO</strong></h3>
                <p>

                    Grade A beans should have less than 5 percent moisture content, according to
                    the agriculture non-governmental organisation Citizens’ Association for the Defence of Collective Interests (ACDIC).
                    The higher the moisture content, the less a farmer can charge for his produce.
                </p>
                <p><strong>Phone : </strong>+237 672345338</p>
                <p><strong>Email : </strong>aficao@gmail.com</p>
            </div>
            <div class="col-md-1">
                <p><strong>Site Map</strong></p>
                <ul>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Home') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Services') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('About') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Contact') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Blog') }}</a>
                    </li>
                </ul>

            </div>
            <div class="col-md-3">
                <p><strong>Latest Blogs</strong></p>
                <div class="card mb-3" >
                    <div class="row no-gutters">
                      <div class="col-md-4">
                      <img src="{{asset('media/images/main-pic1.jpg')}}" class=" mx-auto d-block img img-fluid red " alt="...">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title" style="color:#212529;">Card title papy</h5>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <p><strong>Follow Us</strong></p>
                <form action="" method="post" class="form-inline">
                    <input type="email" name="" id="" placeholder="Email address" class="form-control">
                    <input type="submit" value="Subscribe" class="form-control btn button">
                </form>
            </div>
            <div class="col-md-12">
                <p class="text-center " style="padding-top:3rem; padding-bottom:0rem"><strong>&copy;2019 Africao </strong></p>
            </div>
        </div>

    </div>

</footer>
