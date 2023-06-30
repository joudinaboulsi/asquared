@foreach ($about as $b )
    <div class="container">
        <div class="row">
    
            <div class="section-head col-lg-12 wow slideInUp text-center">
                @foreach ($sections as $section )
                    
                
                <h6 class="sub-title">{{$section->title_about}}</h6>
                <h4>{{$section->subtitle_about}}</h4>
                @endforeach
                <p> {!! $b->description !!}</p>
            </div>
    
            <div class="col-md-12">
                <div class="item bg-img wow slideInUp" data-wow-delay=".2s" data-background="../assets/bg/{{$b->background1}}">
                    <div class="block">
                        <span class="icon icofont-edit"></span>
                        <h6>Availability & Customization</h6>
                        <p>We have thousands of custom imprinted products to choose from, ranging from low-cost promotional
                            pens, usbs, coffee mugs and personalized trade show promotional gifts to conference bags,
                            conference folders, clothing, executive business corporate merchandise and an extensive range of
                            environmentally friendly recycled items. Our items are always in stock and can be custom ordered
                            to your preference.</p>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="row mt-1">
            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="item bg-img wow slideInUp" data-wow-delay=".2s"
                    data-background="img/added-images/printing-machine2.jpg">
                    <div class="block">
                        <span class="icon icofont-printer"></span>
                        <h6>Printing</h6>
                        <p>We provide different types of printing, engraving, carving and embroidery through our state of
                            the art machines and technology.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="item bg-img wow slideInUp" data-wow-delay=".2s"
                    data-background="img/added-images/international2.jpg">
                    <div class="block">
                        <span class="icon icofont-world"></span>
                        <h6>International Level</h6>
                        <p>We are based in Lebanon. We provide services on an International and Local Level.</p>
                    </div>
                </div>
            </div>
        </div>
@endforeach