  <header class="header_area">
  
    <div class="top_menu">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <div class="float-left">
              <p>Phone: +03 29 29 2209</p>
              <p>email: vongovantien@gmail.com</p>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="float-right">
              <ul class="right_side">
                <li>
                  <a href="#">
                    đăng ký
                </li>
                <li>
                  <a href="#">
                    đăng nhập
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="main_menu">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light w-100">
          <!-- Brand and toggle get grouped for better mobile display -->
          <a class="navbar-brand logo_h" href="{{ route('home') }}">
            <img src="images/logo.png" alt="" />
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse offset w-100" id="navbarSupportedContent">
            <div class="row w-100 mr-0">
              <div class="col-lg-7 pr-0">
                <ul class="nav navbar-nav center_nav pull-right">
                  <li class="nav-item {{ request()->is('/') ? 'active' : ''}}">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                  </li>
                   <li class="nav-item {{ request()->is('product') ? 'active' : ''}}">
                    <a class="nav-link" href="{{ route('product')}}">Product</a>
                  </li>
                  <li class="nav-item {{ request()->is('contact') ? 'active' : ''}}">
                    <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </header>
