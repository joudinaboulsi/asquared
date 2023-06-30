@foreach ($home as $h )
    <div class="background valign bg-img" data-overlay-dark="5" data-background="../assets/bg/{{ $h->image}}"
        data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="offset-lg-2 col-lg-8 offset-md-1 col-md-10 text-center caption mt-80">
                    <h1>{{ $h->title}}</h1>
                    <h5>{{$h->subtitle}}</h5>
                    <p>{{$h->main_title}}</p>
                    <a title="About Us" href="#" data-scroll-nav="1" class="butn butn-bg mt-30">
                        <span>About us<i class="icofont-caret-right"></i></span>
                    </a>
                    <a title="Contact Us" href="#" data-scroll-nav="5" class="butn butn-rgba mt-30">
                        <span>Contact us <i class="icofont-ui-message"></i></span>
                    </a>
                </div>
            </div>
        </div>
        <span class="overlay">
            <svg version="1.1" id="circle" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                x="0px" y="0px" viewBox="0 0 500 250" enable-background="new 0 0 500 250" xml:space="preserve"
                PreserveAspectRatio="none">
                <path fill="#FFFFFF"
                    d="M250,246.5c-97.85,0-186.344-40.044-250-104.633V250h500V141.867C436.344,206.456,347.85,246.5,250,246.5z" />
            </svg>
        </span>
    </div>
@endforeach