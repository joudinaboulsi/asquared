
    <div class="row">
    
        <div class="section-head text-center col-sm-12">
            @foreach ($sections as $section)
                
          
            <h6 class="sub-title">{{$section->title_portfolio}}</h6>
            <h4>{{$section->subtitle_portfolio}}</h4>
            @endforeach
        </div>
    
        <div class="owl-carousel owl-theme">
           @foreach ($portfolio as $p)
            <div class="item"> <img src="../assets/portfolio/{{$p->image}}" alt="{{$p->title}}" title="{{$p->title}}">
            </div>
            @endforeach
         

          

        
        </div>
    
    </div>
