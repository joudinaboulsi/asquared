@foreach ($about as $b )
    <section class="objectives section-padding pb-0">
        <div class="background bg-img bg-fixed" data-background="img/added-images/pinkBackground.jpg"></div>
        <div class="container">
            <div class="row wow fadeInUp" data-wow-delay=".3s">
                <div class="col-md-12">
                    <div class="cont text-center">
                        <h3 STYLE="text-transform:uppercase">{{$b->title4}}</h3>
                    </div>
                </div>
            </div>
            <div class="row out">
                <div class="col-md-12">
                    <div class="item bg-img wow slideInUp" data-wow-delay=".2s"
                        data-background="../assets/bg/{{ $b->background4}}">
                        <ul class="mt-4">
                           {!! $b->description4 !!}
                        </ul>
                    </div>
                </div>
                <!--                <div class="col-md-6">
                            <div class="item bg-img wow slideInUp" data-wow-delay=".2s" data-background="img/added-images/achievement1.jpg">
                                <h5 class="mt-2">02-Achieve your ideas</h5>
                                <p class="mt-4">At A Squared, with the help of our marketing experts and branding specialists, we aim to help you for the most part to achieve and project your ideas.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item bg-img wow slideInUp" data-wow-delay=".2s" data-background="img/added-images/distribution1.jpg">
                                <h5 class="mt-2">03-Best Distribution</h5>
                                <p class="mt-4">With our numerous distribution channels, we have the capability and ressources to service your needs as fast as possible.</p>
                            </div>
                        </div> -->
            </div>
        </div>
    </section>
@endforeach