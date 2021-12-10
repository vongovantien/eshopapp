@extends('layout')
@section('title')Sản phẩm @stop
@section('content')
    <section class="cat_product_area section_gap">
      <div class="container">
        <div class="row flex-row-reverse">
          <div class="col-lg-9">
            <div class="product_top_bar">
              <form action="{{ route('product') }}">
                <div class="left_dorp">
                  <select class="sorting" name="price">
                    <option value="1">Giá tiền giảm</option>
                    <option value="2">Giá tiền tăng</option>
                  </select>
                  <select class="show" name="quantity">
                    <option value="4">Show 4</option>
                    <option value="10">Show 10</option>
                    <option value="15">Show 15</option>
                  </select>
                </div>
                <input type="submit" class="btn btn-primary" value="Tìm">
              </form>
            </div>

            <div class="latest_product_inner">
              <div class="row">
                  @foreach($product as $p)
                <div class="col-lg-4 col-md-6">
                  <div class="single-product">
                    <div class="product-img">
                      <img
                        class="card-img"
                        src="images/{{$p -> Img}}"
                        alt=""
                      />
                      <div class="p_icon">
                        <a href="#">
                          <i class="ti-eye"></i>
                        </a>
                        <a href="#">
                          <i class="ti-heart"></i>
                        </a>
                        <a href="#">
                          <i class="ti-shopping-cart"></i>
                        </a>
                      </div>
                    </div>
                    <div class="product-btm">
                      <a href="{{route('productdetail',['ProductId' => $p-> ProductId])}}" class="d-block">
                        <h4>{{$p -> ProductName}}</h4>
                      </a>
                      <div class="mt-3">
                        <span class="mr-4">{{$p -> Price}}</span>
                        <del>$35.00</del>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="left_sidebar_area">
              <aside class="left_widgets p_filter_widgets">
                <div class="l_w_title">
                  <h3>Browse Categories</h3>
                </div>
                <div class="widgets_inner">
                  <ul class="list">
                    <li>
                      <a href="#">Frozen Fish</a>
                    </li>
                    <li>
                      <a href="#">Dried Fish</a>
                    </li>
                    <li>
                      <a href="#">Fresh Fish</a>
                    </li>
                    <li>
                      <a href="#">Meat Alternatives</a>
                    </li>
                    <li>
                      <a href="#">Fresh Fish</a>
                    </li>
                    <li>
                      <a href="#">Meat Alternatives</a>
                    </li>
                    <li>
                      <a href="#">Meat</a>
                    </li>
                  </ul>
                </div>
              </aside>

              <aside class="left_widgets p_filter_widgets">
                <div class="l_w_title">
                  <h3>Product Brand</h3>
                </div>
                <div class="widgets_inner">
                  <ul class="list">
                    <li>
                      <a href="#">Apple</a>
                    </li>
                    <li>
                      <a href="#">Asus</a>
                    </li>
                    <li class="active">
                      <a href="#">Gionee</a>
                    </li>
                    <li>
                      <a href="#">Micromax</a>
                    </li>
                    <li>
                      <a href="#">Samsung</a>
                    </li>
                  </ul>
                </div>
              </aside>

              <aside class="left_widgets p_filter_widgets">
                <div class="l_w_title">
                  <h3>Color Filter</h3>
                </div>
                <div class="widgets_inner">
                  <ul class="list">
                    <li>
                      <a href="#">Black</a>
                    </li>
                    <li>
                      <a href="#">Black Leather</a>
                    </li>
                    <li class="active">
                      <a href="#">Black with red</a>
                    </li>
                    <li>
                      <a href="#">Gold</a>
                    </li>
                    <li>
                      <a href="#">Spacegrey</a>
                    </li>
                  </ul>
                </div>
              </aside>

              <aside class="left_widgets p_filter_widgets">
                <div class="l_w_title">
                  <h3>Price Filter</h3>
                </div>
                <div class="widgets_inner">
                  <div class="range_item">
                    <div id="slider-range"></div>
                    <div class="">
                      <label for="amount">Price : </label>
                      <input type="text" id="amount" readonly />
                    </div>
                  </div>
                </div>
              </aside>
            </div>
          </div>
        </div>
      </div>
    </section>
@stop
