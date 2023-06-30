<div class="row">

    <div class="section-head text-center col-sm-12">
        @foreach ($sections as $section )
            
   
        <h6 class="sub-title">{{$section->title_portfolio}}</h6>
        <h4>{{$section->subtitle_portfolio}}</h4>
        @endforeach
    </div>

@foreach($clients as $client)
    

    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-6">
        <div class="titem text-center wow fadeInUp mb-md50" data-wow-delay=".3s">
            <img src="../assets/clients/{{$client->image}}" alt="{{$client->title}}" title="{{$client->title}}">
        </div>
    </div>
@endforeach
   
</div>