@extends('cms.layouts.dashboard')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">About Page</h5>
                <div class="card-body">
                    <form action="{{route('about.update',$about->id)}}" method="POST" enctype="multipart/form-data">

                        @csrf
                        @method('post')
                        <div class="col-12">
                            <h5>Content Section one</h5>

                            <div class="mb-4 mt-4">
                                <label for="defaultFormControlInput" class="form-label">Description </label>
                               <textarea class="form-control" id="defaultFormControlInput" name="description">{!! $about->description !!}</textarea>

                            </div>

                            <h5>Content Section Two</h5>
                            <div class="mb-4 mt-4">
                                @if($about->background1)
                                <img src="../assets/bg/{{ $about->background1}}" width="100">
                                @endif

                            </div>

                            <div class="mb-4 mt-4">
                                <label for="defaultFormControlInput" class="form-label">Background One </label>
                                <input type="file" class="form-control" id="file"
                                    name="background1"/>

                            </div>

                            <div class="mb-4 mt-4">
                                @if($about->icon1)
                                <img src="../assets/icons/{{ $about->icon1}}" width="100">
                                @endif
                            
                            </div>
                            
                            <div class="mb-4 mt-4">
                                <label for="defaultFormControlInput" class="form-label">Icon One </label>
                                <input type="file" class="form-control" id="file" name="icon1" />
                            
                            </div>

                              <div class="mb-4 mt-4">
                                <label for="defaultFormControlInput" class="form-label">Title</label>
                                <input type="text" class="form-control" id="defaultFormControlInput" name="title1"
                                    aria-describedby="defaultFormControlHelp" value="{{$about->title1}}" />
                            
                            </div>
                     
                           <div class="mb-4 mt-4">
                                <label for="defaultFormControlInput" class="form-label">Description One</label>
                                <textarea class="form-control" id="defaultFormControlInput"
                                    name="description1">{!! $about->description1 !!}</textarea>
                            </div>

                            <h5>Content Section Three</h5>
                            <div class="mb-4 mt-4">
                                @if($about->background2)
                                <img src="../assets/bg/{{ $about->background2}}" width="100">
                                @endif
                            
                            </div>
                            
                            <div class="mb-4 mt-4">
                                <label for="defaultFormControlInput" class="form-label">Background  </label>
                                <input type="file" class="form-control" id="file" name="background2" />
                            
                            </div>
                            
                            <div class="mb-4 mt-4">
                                @if($about->icon2)
                                <img src="../assets/icons/{{ $about->icon2}}" width="100">
                                @endif
                            
                            </div>
                            
                            <div class="mb-4 mt-4">
                                <label for="defaultFormControlInput" class="form-label">Icon  </label>
                                <input type="file" class="form-control" id="file" name="icon2" />
                            
                            </div>
                            
                            <div class="mb-4 mt-4">
                                <label for="defaultFormControlInput" class="form-label">Title</label>
                                <input type="text" class="form-control" id="defaultFormControlInput" name="title2"
                                    aria-describedby="defaultFormControlHelp" value="{{$about->title2}}" />
                            
                            </div>
                            
                            <div class="mb-4 mt-4">
                                <label for="defaultFormControlInput" class="form-label">Description </label>
                                <textarea class="form-control" id="defaultFormControlInput"
                                    name="description3">{!! $about->description2 !!}</textarea>
                            
                            </div>

                            <h5>Content Section four </h5>
                            <div class="mb-4 mt-4">
                                @if($about->background3)
                                <img src="../assets/bg/{{ $about->background3}}" width="100">
                                @endif
                            
                            </div>
                            
                            <div class="mb-4 mt-4">
                                <label for="defaultFormControlInput" class="form-label">Background four </label>
                                <input type="file" class="form-control" id="file" name="background3" />
                            
                            </div>
                            
                            <div class="mb-4 mt-4">
                                @if($about->icon3)
                                <img src="../assets/icons/{{ $about->icon3}}" width="100">
                                @endif
                            
                            </div>
                            
                            <div class="mb-4 mt-4">
                                <label for="defaultFormControlInput" class="form-label">Icon </label>
                                <input type="file" class="form-control" id="file" name="icon3" />
                            
                            </div>
                            
                            <div class="mb-4 mt-4">
                                <label for="defaultFormControlInput" class="form-label">Title</label>
                                <input type="text" class="form-control" id="defaultFormControlInput" name="title3"
                                    aria-describedby="defaultFormControlHelp" value="{{$about->title3}}" />
                            
                            </div>
                            
                            <div class="mb-4 mt-4">
                                <label for="defaultFormControlInput" class="form-label">Description </label>
                                <textarea class="form-control" id="defaultFormControlInput"
                                    name="description2">{!! $about->description3 !!}</textarea>
                            
                            </div>

                            <h5>Content Section five </h5>
                            <div class="mb-4 mt-4">
                                @if($about->background4)
                                <img src="../assets/bg/{{ $about->background4}}" width="100">
                                @endif
                            
                            </div>
                            
                            <div class="mb-4 mt-4">
                                <label for="defaultFormControlInput" class="form-label">Background four </label>
                                <input type="file" class="form-control" id="file" name="background4" />
                            
                            </div>
                            
                          
                            <div class="mb-4 mt-4">
                                <label for="defaultFormControlInput" class="form-label">Title</label>
                                <input type="text" class="form-control" id="defaultFormControlInput" name="title4"
                                    aria-describedby="defaultFormControlHelp" value="{{$about->title4}}" />
                            
                            </div>
    
                            <div class="mb-4 mt-4">
                                <label for="defaultFormControlInput" class="form-label">Description </label>
                                <textarea class="form-control" id="defaultFormControlInput"
                                    name="description4">{!! $about->description4 !!}</textarea>
                            
                            </div>
                            
                        <button type="submit" class="btn btn-primary">Save</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection