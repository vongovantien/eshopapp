@extends('layout')
@section('content')
  <section class="section_gap">
    <div class="container">
      <div class="d-none d-sm-block mb-5 pb-4">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d250856.42104560309!2d106.87214176361155!3d10.76285104679931!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317523edaef55c31%3A0x4645bca5e90e4664!2zQ-G7rWEgSMOgbmcgS2ltIEtow60gxJBp4buHbiBNw6F5IEjGr-G7mk5HIERVWcOKTg!5e0!3m2!1svi!2s!4v1638437217450!5m2!1svi!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      <div class="row">
        <div class="col-12">
          <h2 class="contact-title">Get in Touch</h2>
        </div>
        <div class="col-lg-8 mb-4 mb-lg-0">
          <form class="form-contact contact_form" action="#" method="post" id="contactForm" novalidate="novalidate">
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                   <label for="name">Your message:</label>
                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" placeholder="Enter Message"></textarea>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="name">Your name:</label>
                  <input class="form-control" name="name" id="name" type="text" placeholder="Enter your name">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                   <label for="name">Your email:</label>
                  <input class="form-control" name="email" id="email" type="email" placeholder="Enter email address">
                </div>
              </div>
            </div>
            <div class="form-group mt-lg-3 text-center">
              <button type="submit" class="main_btn">Send Message</button>
            </div>
          </form>
        </div>
        <div class="col-lg-4">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
              <h3>Nhơn Trạch, Đồng Nai.</h3>
              <p>1225, Lý Thái Tổ</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
            <div class="media-body">
              <h3><a href="tel:0329292209">0329292209</a></h3>
              <p>Mon to Fri 9am to 6pm</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
              <h3><a href="mailto:vongovantien@gmail.com">vongovantien@gmail.com</a></h3>
              <p>Send us your query anytime!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@stop
