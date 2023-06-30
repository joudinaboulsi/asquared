@extends('cms.layouts.dashboard')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">Sections Pages</h5>
                <div class="card-body">
                    <form action="{{route('sections.update',$section->id)}}" method="POST" >

                        @csrf
                        @method('post')
                      <div class="row">
                        <div class="mb-3 mt-3 col-6">
                            <label for="defaultFormControlInput" class="form-label">Title About</label>
                            <input type="text" class="form-control" id="defaultFormControlInput" name="title_about"
                                aria-describedby="defaultFormControlHelp" value="{{$section->title_about}}" />
                        
                        </div>
                        <div class="mb-3 mt-3 col-6">
                            <label for="defaultFormControlInput" class="form-label">SubTitle About</label>
                            <input type="text" class="form-control" id="defaultFormControlInput" name="subtitle_about"
                                aria-describedby="defaultFormControlHelp" value="{{$section->subtitle_about}}" />
                        
                        </div>
                      </div>

                      <div class="row">
                            <div class="mb-3 mt-3 col-6">
                                <label for="defaultFormControlInput" class="form-label">Title Category</label>
                                <input type="text" class="form-control" id="defaultFormControlInput" name="title_category"
                                    aria-describedby="defaultFormControlHelp" value="{{$section->title_category}}" />
                        
                            </div>
                            <div class="mb-3 mt-3 col-6">
                                <label for="defaultFormControlInput" class="form-label">SubTitle Category</label>
                                <input type="text" class="form-control" id="defaultFormControlInput" name="subtitle_category"
                                    aria-describedby="defaultFormControlHelp" value="{{$section->subtitle_category}}" />
                        
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 mt-3 col-6">
                                <label for="defaultFormControlInput" class="form-label">Title Portfolio</label>
                                <input type="text" class="form-control" id="defaultFormControlInput" name="title_portfolio"
                                    aria-describedby="defaultFormControlHelp" value="{{$section->title_portfolio}}" />
                        
                            </div>
                            <div class="mb-3 mt-3 col-6">
                                <label for="defaultFormControlInput" class="form-label">SubTitle Portfolio</label>
                                <input type="text" class="form-control" id="defaultFormControlInput" name="subtitle_portfolio"
                                    aria-describedby="defaultFormControlHelp" value="{{$section->subtitle_portfolio}}" />
                        
                            </div>
                        </div>
                      
                        <div class="row">
                            <div class="mb-3 mt-3 col-6">
                                <label for="defaultFormControlInput" class="form-label">Title Client</label>
                                <input type="text" class="form-control" id="defaultFormControlInput" name="title_client"
                                    aria-describedby="defaultFormControlHelp" value="{{$section->title_client}}" />
                        
                            </div>
                            <div class="mb-3 mt-3 col-6">
                                <label for="defaultFormControlInput" class="form-label">SubTitle Client</label>
                                <input type="text" class="form-control" id="defaultFormControlInput" name="subtitle_client"
                                    aria-describedby="defaultFormControlHelp" value="{{$section->subtitle_client}}" />
                        
                            </div>
                        </div>
                        <div class="mb-3 mt-3 col-6">
                            <label for="defaultFormControlInput" class="form-label">SubTitle Contact</label>
                            <input type="text" class="form-control" id="defaultFormControlInput" name="title_contact"
                                aria-describedby="defaultFormControlHelp" value="{{$section->title_contact}}" />
                        
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection