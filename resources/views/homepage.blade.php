@extends("layouts.master")

@section("content") 

    <!-- =====================================
        ==== Start Header -->
        <header class="header" data-scroll-index="0">
          @include('front.home')
        </header>

    <!-- End Header ====
        ======================================= -->

    <!-- =====================================
        ==== Start About -->
        <section class="about-paragraphs section-padding text-center" data-scroll-index="1" >
           @include('front.about')
        </div>
    </section>
    <!-- End About ====
        ======================================= -->

    <!-- =====================================
        ==== Start Our Objective -->
      @include('front.objective')
    <!-- End Our Objective  ====
        ======================================= -->

    <!-- =====================================
        ==== Start Categories -->
        <section class="works section-padding pb-0" data-scroll-index="2">
         @include('front.categories')
        </section>
    <!-- End Categories ====
        ======================================= -->

   <!-- =====================================
    ==== Start Portfolio -->
    <section class="team section-padding mt-5" data-scroll-index="3"  data-background="img/added-images/pinkBackground.jpg">
        <div class="container-fluid">
           @include('front.portfolio')
        </div>
    </section>
    <!-- End Portfolio ====
        ======================================= -->

  <!-- =====================================
    ==== Start Clients -->
    <section class="team section-padding" data-scroll-index="4">
        <div class="container-fluid">
         @include('front.clients')
        </div>
    </section>
    <!-- End Clients ====
        ======================================= -->

    <!-- =====================================
        ==== Start Contact -->
        @if(Session::has('msg'))
        <p class="alert {{ Session::get('alert-class', 'alert-success') }} text-center mb-0">{!!Session::get('msg')!!}</p>
        @endif
        <section class="contact section-padding bg-img " data-scroll-index="5" data-overlay-light="1" data-background="img/added-images/contact-map2.jpg" >
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="info mb-md50">

                            <div class="item wow fadeIn" data-wow-delay=".3s">
                                @foreach ($sections as $section )
                                <h3>{{$section->title_contact}}</h3>
                                @endforeach
                                <p><span>{{app('contact')->country}}</span>{{app('contact')->address}}</p>
                                <h4><a title="Call us" href="tel:{{app('contact')->link_phone1}}">{{app('contact')->phone1}}</a></h4>
                                <h4><a title="Call us" href="tel:{{app('contact')->link_phone2}}">{{app('contact')->phone2}}</a></h4>
                                <p><a title="Send Email" href="mailto:{{app('contact')->email1}}">{{app('contact')->email1}}</a></p>
                                <p><a title="Send Email" href="mailto:{{app('contact')->email2}}">{{app('contact')->email2}}</a></p>
                                <p><a title="Send Email" href="mailto:{{app('contact')->email3}}">{{app('contact')->email3}}</a></p>
                            </div>

                            <div class="social">
                                <a title="facebook" href="{{app('contact')->fb}}" target=”_blank class="icon">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a title="instagram" href="{{app('contact')->insta}}" target=”_blank class="icon">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Form -->
                    <div class="col-lg-7">
                        {!! Form::open(array('route' => 'home_path', 'id' => 'contact_form', 'class' => 'form wow fadeIn', 'data-wow=delay' => '.5s' )) !!}
                        <div class="messages"></div>

                        <div class="controls">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="form_name" type="text" name="form_name" placeholder="Name *" required="required" data-error="Firstname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="form_email" type="email" name="form_email" placeholder="Email *" required="required" data-error="Valid email is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input id="form_subject" type="text" name="form_subject" required="required" placeholder="Subject *" data-error="Subject is required.">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea id="form_message" name="form_message" placeholder="Your Message *" rows="4" required="required" data-error="Your message is required."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="g-recaptcha" data-sitekey="{{env('NOCAPTCHA_SITEKEY')}}"></div>
                                        <input type="hidden" class="hiddenRecaptcha required show-error-msg" name="hiddenRecaptcha" id="hiddenRecaptcha" required="required" data-error="Please verify that you are a Human.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button title="Send email" type="submit" class="butn butn-bg"><span>Send Message <i class="icofont-paper-plane"></i></span></button>
                                </div>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </section>
    <!-- End Contact ====
        ======================================= -->

@endsection
