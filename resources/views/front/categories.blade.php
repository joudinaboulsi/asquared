<div class="container-fluid">

    <div class="row wow fadeInUp" data-wow-delay=".3s">
        <div class="col-md-12">
            <div class="section-head text-center mb-80">
                @foreach ($sections as $section )


                <h6 class="sub-title">{{$section->title_category}}</h6>
                <h4>{{$section->subtitle_category}}</h4>
                @endforeach
            </div>
        </div>
    </div>

    <div class="row">

        <!-- gallery -->
        <div class="gallery text-center full-width">
            @foreach ($categories as $category )


            <!-- gallery item -->
            <div class="items my-5 mt-lg-0 mt-md-4 mt-sm-5 mt-4">
                <div class="item-img bg-img" data-background="../assets/categories/{{$category->image}}"
                    title="{{$category->title}}">
                    <div class="item-img-overlay valign">
                        <div class="overlay-info full-width vertical-center">
                            <a title="Apparel & Umbrellas" href="../assets/pdf/{{$category->pdf}}" target=”_blank>
                                <p>See all of our</p>
                                <h6>{{$category->title}}</h6>
                            </a>
                            <a title="{{$category->title}}" href="../assets/pdf/{{$category->pdf}}"
                                download="{{$category->title}}">
                                <span class="icon icofont-download" title="Download PDF"></span>
                            </a>
                        </div>
                    </div>
                </div>

                <a title="{{$category->title}}" href="../assets/pdf/{{$category->pdf}}" target=”_blank>
                    <h5 class="desc mt-2">{{$category->title}}</h5>
                </a>

            </div>
            @endforeach

